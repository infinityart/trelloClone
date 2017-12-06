<?php
/**
 * User: Jonty
 * Date: 12/6/2017
 */

namespace TrelloClone\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}