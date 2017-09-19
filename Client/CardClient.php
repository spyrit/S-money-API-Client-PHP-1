<?php

namespace Smoney\Smoney\Client;
use Smoney\Smoney\Facade\CardFacade;

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

    /**
     * @param $appCardId
     * @return CardFacade
     */
    public function getCard($appCardId)
    {
        $uri = 'cards/'.$appCardId;
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\CardFacade', 'json');
    }
}
