<?php

namespace Smoney\Smoney\Client;

use Smoney\Smoney\Client\AbstractClient;

/**
 * Class HistoryClient
 */
class HistoryClient extends AbstractClient
{
    /**
     * @param int $appUserId
     *
     * @return PDF file
     */
    public function getPdf($appUserId, $beginDate, $endDate)
    {
        $uri = 'users/'.$appUserId.'/historyitems';

        return $this->action('GET', $uri, ['datestart' => $beginDate, 'dateend' => $endDate], ['Accept' => 'application/pdf']);
    }
}
