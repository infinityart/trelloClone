<?php
/**
 * User: Jonty
 * Date: 12/6/2017
 */

namespace TrelloClone\Page;


class InvalidPageException extends \Exception
{
    public function __construct($slug, $code = 0, Exception $previous = null)
    {
        $message = "No page with the slug `$slug` was found";
        parent::__construct($message, $code, $previous);
    }
}