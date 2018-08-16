<?php

namespace Nisbet\LaravelMarkdown;

use Michelf\Markdown;
use Michelf\MarkdownExtra;

class LaravelMarkdownTransformer
{
    public function __construct()
    {
        $this->setOptions(config('markdown.options'));
    }

    /**
     * Options for PHP Markdown.
     *
     * @var array
     */
    protected $options = [];

    /**
     * transform the Markdown from the given string and return it
     *
     * @param  string  $str
     * @return string
     */
    public function string($str)
    {
        $markdown = $this->createParser();
        $contents = $markdown->transform($str);

        return $contents;
    }

    /**
     * Create a new parser with the options.
     *
     * @return MarkdownExtra|Markdown
     */
    protected function createParser()
    {
        if ($this->options['use_extra']) {
            $parser = new MarkdownExtra;
        } else {
            $parser = new Markdown;
        }

        foreach ($this->options as $key => $value) {
            if (property_exists($parser, $key)) {
                $parser->$key = $value;
            }
        }

        return $parser;
    }

    /**
     * Set the options for PHP Markdown.
     *
     * @param  array  $options
     * @return void
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }
}
