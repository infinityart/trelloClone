<?php
/**
 * User: Jonty
 * Date: 12/6/2017
 */

namespace TrelloClone\Template;


interface Renderer
{
    public function render($template, $data = []) : string;
}