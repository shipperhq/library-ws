<?php

namespace ShipperHQ\WS\Request\Rate;
use ShipperHQ\Shipping\Address;

include_once 'ShipperHQ/WS/Request/AbstractWebServiceRequest.php';
include_once 'ShipperHQ/WS/Request/WebServiceRequest.php';


/**
 * Class RateRequest
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class ShipmentRequest extends \ShipperHQ\WS\Request\AbstractWebServiceRequest implements \ShipperHQ\WS\Request\WebServiceRequest
{
    public $carrierCode;
    public $orderNo;
    public $reserveOrderNo;
    public $shippingAddress;
    public $billingAddress;
    public $customerDetails;
    public $shipment;
    public $originName;
    public $methodCode;

    /**
     * @param null $cart
     * @param Address $destination
     * @param Address $origin
     */
    function __construct($shipmentList = null, \ShipperHQ\Shipping\Address $shippingAddress = null,
                         \ShipperHQ\Shipping\Address $billingAddress = null,
                         \ShipperHQ\WS\Request\Rate\ShipmentCustomerDetails $customerDetails = null,
                         $carrierCode = null, $orderNo = null, $reserveOrderNo = null, $originName = null,
                         $methodCode = null)
    {
        $this->shipment = $shipmentList;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->customerDetails = $customerDetails;
        $this->carrierCode = $carrierCode;
        $this->orderNo = $orderNo;
        $this->reserveOrderNo = $reserveOrderNo;
        $this->originName = $originName;
        $this->methodCode = $methodCode;
    }

    /**
     * @param null $carrierId
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return null
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param null $orderId
     */
    public function setOrderNo($orderId)
    {
        $this->orderNo = $orderId;
    }

    /**
     * @return null
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param CustomerDetails $customerDetails
     */
    public function setCustomerDetails(\ShipperHQ\WS\Request\Rate\CustomerDetails $customerDetails)
    {
        $this->customerDetails = $customerDetails;
    }

    /**
     * @return CustomerDetails
     */
    public function getCustomerDetails()
    {
        return $this->customerDetails;
    }

    /**
     * @param null $shipmentList
     */
    public function setShipment($shipmentList)
    {
        $this->shipmentList = $shipmentList;
    }

    /**
     * @return null
     */
    public function getShipment()
    {
        return $this->shipmentList;
    }

    /**
     * @return mixed
     */
    public function getReserveOrderNo()
    {
        return $this->reserveOrderNo;
    }

    /**
     * @param mixed $reserveOrderNo
     */
    public function setReserveOrderNo($reserveOrderNo)
    {
        $this->reserveOrderNo = $reserveOrderNo;
    }

    /**
     * @param null $originName
     */
    public function setOriginName($originName)
    {
        $this->originName = $originName;
    }

    /**
     * @return null
     */
    public function getOriginName()
    {
        return $this->originName;
    }

    /**
     * @param mixed $methodCode
     */
    public function setMethodCode($methodCode)
    {
        $this->methodCode = $methodCode;
    }

    /**
     * @return mixed
     */
    public function getMethodCode()
    {
        return $this->methodCode;
    }


}
