<?php

namespace ShipperHQ\WS\Client;

use \ShipperHQ\WS\WebServiceRequestInterface;


/**
 * Class WebServiceClient
 *
 * @package ShipperHQ\WS\Client
 */
class WebServiceClient
{

    /**
     * @param \ShipperHQ\WS\WebServiceRequest $requestObj
     * @param $webServicePath
     * @return mixed|null
     */
    public function sendAndReceive(WebServiceRequestInterface $requestObj, $webServiceURL, $timeout = 30)
    {

        $jsonRequest = json_encode($requestObj);
        $debugRequest = $requestObj;
        $debugRequest->credentials = null;
        $jsonDebugRequest = json_encode($debugRequest);
        $debugData['json_request'] = $jsonDebugRequest;
        $debugData['url'] = $webServiceURL;
        $responseBody = '';

        try {
            $client = new \Zend_Http_Client();
            $client->setUri($webServiceURL);
            $client->setConfig(['maxredirects' => 0, 'timeout' => $timeout]);
            $client->setRawData($jsonRequest, 'application/json');
            $response = $client->request(\Zend_Http_Client::POST);
            if (!is_null($response)) {
                $responseBody = $response->getBody();
            }

            $debugData['response'] = $responseBody;
            $responseBody = json_decode($responseBody, false);

        } catch (\Exception $e) {
            $debugData['error'] = ['error' => $e->getMessage(), 'code' => $e->getCode()];
            $debugData['response'] = '';
        }

        $result = ['result' => $responseBody, 'debug' => $debugData];

        return $result;
    }
}