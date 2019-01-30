<?php

namespace Smoney\Smoney\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use JMS\Serializer\SerializerInterface;
use Smoney\Smoney\Client\SmoneyException;

/**
 * Class AbstractClient
 */
abstract class AbstractClient
{
    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var array
     */
    protected $headers;

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var SerializerInterface
     */
    protected $serializer;


    /**
     * @param string              $baseUrl
     * @param string              $token
     * @param string              $version
     * @param ClientInterface     $httpClient
     * @param SerializerInterface $serializer
     */
    public function __construct($baseUrl, $token, $version, ClientInterface $httpClient, SerializerInterface $serializer)
    {
        $this->setBaseUrl($baseUrl);
        $this->setToken($token);
        $this->setVersion($version);
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }

    /**
     * @param string $baseUrl
     *
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        if (!is_array($this->headers)) {
            $this->headers = [];
        }
        $this->headers['Authorization'] = 'Bearer '. $token .'';

        return $this;
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->headers['Accept'] = 'application/vnd.s-money.'. $version .'+json';
        $this->headers['Content-Type'] = 'application/vnd.s-money.'. $version .'+json';

        return $this;
    }

    /**
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @param string $httpVerb
     * @param string $uri
     * @param array  $extraParams
     * @param array  $customHeaders
     *
     * @return string
     * @throws \Exception|SmoneyException
     */
    protected function action($httpVerb, $uri, $extraParams = [], $customHeaders = [])
    {
        $options = [];
        $options['headers'] = $this->headers;

        foreach ($extraParams as $key => $value) {
            $options[$key] = $value;
        }

        foreach ($customHeaders as $key => $value) {
            $options['headers'][$key] = $value;
            if ($value === null) {
                unset($options['headers'][$key]);
            }
        }

        try {
            return $this->httpClient
                    ->request(strtoupper($httpVerb), $this->baseUrl.'/'.$uri, $options)
                    ->getBody()
                    ->getContents();
        } catch (RequestException $e) {
            throw $this->getErrorException($e);
        }
    }

    /**
     * @param RequestException $e
     *
     * @return SmoneyException|\RuntimeException
     */
    protected function getErrorException(RequestException $e)
    {
        if (!$e->hasResponse()) {
            return new \RuntimeException('', 0, $e);
        }

        $content = json_decode($e->getResponse()->getBody()->getContents(), true);
        $message = 'Unknown Error';
        $errorCode = 0;

        if (isset($content['ErrorMessage'])) {
            $message = $content['ErrorMessage'];
        } elseif ($content['Message']) {
            $message = $content['Message'];
        }

        if (isset($content['Code'])) {
            $errorCode = $content['Code'];
        }

        return new SmoneyException($message, $errorCode, $e->getResponse()->getStatusCode());
    }
}
