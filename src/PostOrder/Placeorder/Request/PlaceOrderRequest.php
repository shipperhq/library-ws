<?php
/*
 * Shipper HQ
 *
 * @category ShipperHQ
 * @package shq
 * @copyright Copyright (c) 2021 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\PostOrder\Placeorder\Request;

use \ShipperHQ\WS\Shared\BasicAddress;
use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class PlaceOrderRequest
 *
 * @package ShipperHQ\WS\PostOrder\Placeorder\Request
 */
class PlaceOrderRequest extends AbstractWebServiceRequest implements WebServiceRequestInterface
{
    public $orderNumber;
    public $totalCharges;
    public $carrierCode;
    public $methodCode;
    public $transId;
    public $recipient;

    /**
     * @param null $orderNumber
     * @param null $totalCharges
     * @param null $carrierCode
     * @param null $methodCode
     * @param null $transId
     */
    public function __construct(
        $orderNumber = null,
        $totalCharges = null,
        $carrierCode = null,
        $methodCode = null,
        $transId = null,
        BasicAddress $recipient = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->totalCharges = $totalCharges;
        $this->carrierCode = $carrierCode;
        $this->methodCode = $methodCode;
        $this->transId = $transId;
        $this->recipient = $recipient;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return mixed
     */
    public function getTotalCharges()
    {
        return $this->totalCharges;
    }

    /**
     * @param mixed $totalCharges
     */
    public function setTotalCharges($totalCharges): void
    {
        $this->totalCharges = $totalCharges;
    }

    /**
     * @return mixed
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param mixed $carrierCode
     */
    public function setCarrierCode($carrierCode): void
    {
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return mixed
     */
    public function getMethodCode()
    {
        return $this->methodCode;
    }

    /**
     * @param mixed $methodCode
     */
    public function setMethodCode($methodCode): void
    {
        $this->methodCode = $methodCode;
    }

    /**
     * @return mixed
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * @param mixed $transId
     */
    public function setTransId($transId): void
    {
        $this->transId = $transId;
    }

    /**
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param mixed $recipient
     */
    public function setRecipient($recipient): void
    {
        $this->recipient = $recipient;
    }


}
