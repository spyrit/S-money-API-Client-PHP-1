<?php

namespace Smoney\Smoney\Client;

/**
 * Class CardClient
 * @package Smoney\Smoney\Client
 */
class CardClient extends AbstractClient
{
    /**
     * @param $appCardId
     */
    public function deleteCard($appCardId)
    {
        $uri = 'cards/'.$appCardId;
        $this->action('DELETE', $uri);
    }
}
