<?php
/**
 * User: Jonty
 * Date: 12/5/2017
 */

namespace TrelloClone\Handlers;


use Http\Response;

class Homepage
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }


    public function show()
    {
        $this->response->setContent('Hello World');
    }
}