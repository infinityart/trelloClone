<?php
/**
 * User: Jonty
 * Date: 12/5/2017
 */
declare(strict_types = 1);

namespace TrelloClone\Handlers;


use Http\Request;
use Http\Response;
use TrelloClone\Template\Renderer;

class Homepage
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(
        Request $request,
        Response $response,
        Renderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }


    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];

        $html = $this->renderer->render('homepage', $data);

        $this->response->setContent($html);
    }
}