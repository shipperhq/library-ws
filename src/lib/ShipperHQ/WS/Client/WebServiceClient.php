<?php

namespace ShipperHQ\WS\Client;

/**
 * Class WebServiceClient
 *
 * @package ShipperHQ\WS\Client
 */
class WebServiceClient {

   /**
    * @param \ShipperHQ\WS\Request\WebServiceRequest $requestObj
    * @param $webServicePath
    * @return mixed|null
    */
   public function sendAndReceive(\ShipperHQ\WS\Request\WebServiceRequest $requestObj, $webServiceURL, $timeout = 30) {

       $jsonRequest = json_encode($requestObj);
       $debugRequest = $requestObj;
       $debugRequest->credentials = null;
       $jsonDebugRequest = json_encode($debugRequest);
       $debugData['json_request']      = $jsonDebugRequest;
       $debugData['url']               = $webServiceURL;
       $responseBody = '';

       try {
            $client = new \Zend_Http_Client();
            $client->setUri($webServiceURL);
            $client->setConfig(array('maxredirects'=>0, 'timeout'=>$timeout));
            $client->setRawData($jsonRequest, 'application/json');
            $response = $client->request(\Zend_Http_Client::POST);
            if(!is_null($response)) {
                $responseBody = $response->getBody();
            }

            $debugData['response'] = $responseBody;
            $responseBody = json_decode($responseBody, false);

       }
       catch (\Exception $e) {
           $debugData['error'] = array('error' => $e->getMessage(), 'code' => $e->getCode());
           $debugData['response'] = '';
       }

       $result = array('result' => $responseBody, 'debug' => $debugData);

       return $result;
   }
}