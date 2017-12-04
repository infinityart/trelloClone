<?php
/**
 * User: Jonty
 * Date: 12/4/2017
 */
declare(strict_types = 1);

return [
    ['GET', '/', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];