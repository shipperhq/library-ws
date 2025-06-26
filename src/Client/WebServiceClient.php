<?php
/**
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use ShipperHQ\WS\WebServiceRequestInterface;

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
        if (!$requestObj || $requestObj == "") {
            //SHQ18-1712
            return ['result' => '', 'debug' => 'Error - Could not create ShipperHQ request'];
        }

        $jsonRequest = json_encode($requestObj);
        $debugRequest = $requestObj;
        if ($debugRequest && $debugRequest->getCredentials() != null) {
            $debugRequest->credentials->password = null;
        }
        $jsonDebugRequest = json_encode($debugRequest, JSON_PRETTY_PRINT);
        $debugData['json_request'] = $jsonDebugRequest;
        $debugData['url'] = $webServiceURL;
        $responseBody = '';

        try {
            $client = new Client();
            $response = $client->post($webServiceURL, [
                'timeout' => $timeout,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $jsonRequest
            ]);

            if ($response !== null) {
                $responseBody = (string) $response->getBody();
            }

            $debugData['response'] = $responseBody;
            $responseBody = json_decode($responseBody, false);
        } catch (GuzzleException $e) {
            $debugData['error'] = ['error' => $e->getMessage(), 'code' => $e->getCode()];
            $debugData['response'] = '';
        }

        $result = ['result' => $responseBody, 'debug' => $debugData];

        return $result;
    }

    /**
     * @param WebServiceRequestInterface $requestObj
     * @param $webServiceURL
     * @param int $timeout
     * @return mixed|null
     */
    public function sendAndReceiveWp(WebServiceRequestInterface $requestObj, $webServiceURL, $timeout = 30)
    {
        $jsonRequest = json_encode($requestObj);
        $debugRequest = $requestObj;
        $debugRequest->credentials->password = null;
        $jsonDebugRequest = json_encode($debugRequest, JSON_PRETTY_PRINT);
        $debugData['json_request'] = $jsonDebugRequest;
        $debugData['url'] = $webServiceURL;
        $responseBody = '';

        $headers = [
            'Content-Type'  => 'application/json',
        ];

        try {
            $args = [
                'timeout' => $timeout,
                'headers' => $headers,
                'body'    => $jsonRequest
            ];

            $response = wp_remote_post($webServiceURL, $args);

            if ($response !== null) {
                $body = wp_remote_retrieve_body($response);

                // Decode if it's json
                $responseBody = json_decode((string) $body, false);
            }

            $debugData['response'] = $responseBody;
        } catch (\Exception $e) {
            $debugData['error'] = ['error' => $e->getMessage(), 'code' => $e->getCode()];
            $debugData['response'] = '';
        }

        $result = ['result' => $responseBody, 'debug' => $debugData];

        return $result;
    }

    public function sendAndReceiveGet(WebServiceRequestInterface $requestObj, $webServiceURL, $timeout = 30)
    {
        if (!$requestObj || $requestObj == "") {
            return ['result' => '', 'debug' => 'Error - Could not create ShipperHQ request'];
        }

        $jsonRequest = json_encode($requestObj);
        $debugRequest = $requestObj;
        if ($debugRequest && $debugRequest->getCredentials() != null) {
            $debugRequest->credentials->password = null;
        }
        $jsonDebugRequest = json_encode($debugRequest, JSON_PRETTY_PRINT);
        $debugData['json_request'] = $jsonDebugRequest;
        $debugData['url'] = $webServiceURL;
        $responseBody = '';

        try {
            $client = new Client();
            $client->setUri($webServiceURL);
            $client->setOptions(['maxredirects' => 0, 'timeout' => $timeout]);
            $client->setHeaders(['Content-Type' => 'application/json']);
            $response = $client->setMethod(Request::METHOD_GET)->send();
            if ($response !== null) {
                $responseBody = (string) $response->getBody();
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
