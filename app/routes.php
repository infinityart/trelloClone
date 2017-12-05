<?php
/**
 * User: Jonty
 * Date: 12/4/2017
 */
declare(strict_types = 1);

return [
    ['GET', '/', ['TrelloClone\Handlers\Homepage', 'show']],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];