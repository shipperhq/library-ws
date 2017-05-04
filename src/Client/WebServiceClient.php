<?php
/**
 *
 * ShipperHQ
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * Shipper HQ Shipping
 *
 * @category ShipperHQ
 * @package ShipperHQ_WS
 * @copyright Copyright (c) 2015 Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
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
        if ($debugRequest && $debugRequest->getCredentials() != null) {
            $debugRequest->credentials->password = null;
        }
        $jsonDebugRequest = json_encode($debugRequest, JSON_PRETTY_PRINT);
        $debugData['json_request'] = $jsonDebugRequest;
        $debugData['url'] = $webServiceURL;
        $responseBody = '';

        try {
            $client = new \Zend_Http_Client();
            $client->setUri($webServiceURL);
            $client->setConfig(['maxredirects' => 0, 'timeout' => $timeout]);
            $client->setRawData($jsonRequest, 'application/json');
            $response = $client->request(\Zend_Http_Client::POST);
            if ($response !== null) {
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

    /**
     * @param \ShipperHQ\WS\WebServiceRequest $requestObj
     * @param $webServicePath
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
                $responseBody = json_decode($body, false);
            }

            $debugData['response'] = $responseBody;
        } catch (\Exception $e) {
            $debugData['error'] = ['error' => $e->getMessage(), 'code' => $e->getCode()];
            $debugData['response'] = '';
        }

        $result = ['result' => $responseBody, 'debug' => $debugData];

        return $result;
    }
}
