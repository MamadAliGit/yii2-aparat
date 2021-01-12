<?php

namespace mamadali\base;

use GuzzleHttp\Client;
use yii\base\Component;
use yii\helpers\Json;

/**
 * This is just an example.
 */
class AparatBase extends Component
{

    public $apiUrl = 'https://www.aparat.com/etc/api/';

    /**
     * @var \GuzzleHttp\Client
     */
    private $_client;


    /**
     * initializeParams
     * @param Array $params
     */
    public function initializeParams($params)
    {
        $is_resource = false;
        $multipart    = [];

        if (empty($params)) {
            return [];
        }

        return ['form_params' => $params];
    }

    /**
     * @return \GuzzleHttp\Client
     */
    protected function getClient()
    {
        if (empty($this->_client)) {
            $this->_client = new Client(['base_uri' => $this->apiUrl]);
        }
        return $this->_client;
    }

    /**
     * send request
     * @param String $method
     * @param Array $params
     * @return string
     */
    public function send($method, $params = null)
    {
        $request_params = $this->initializeParams($params);
        $response = $this->client->post($method,$request_params);
        $body = Json::decode($response->getBody());
        return $body;
    }

}
