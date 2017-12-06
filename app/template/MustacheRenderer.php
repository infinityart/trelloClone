<?php
/**
 * User: Jonty
 * Date: 12/6/2017
 */

namespace TrelloClone\Template;


class MustacheRenderer implements Renderer
{
    private $engine;

    public function __construct(\Mustache_Engine $engine)
    {
        $this->engine = $engine;
    }

    public function render($template, $data = []):string
    {
        return $this->engine->render($template, $data);
    }
}