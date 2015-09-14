<?php

namespace ShipperHQ\WS\Shipment\Request;

use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;


/**
 * Class RateRequest
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class ShipmentAddonRequest extends AbstractWebServiceRequest implements WebServiceRequestInterface
{
    public $carrierCode;
    public $orderNo;
    public $reserveOrderNo;
    public $trackingNo;
    public $shipment;

    /**
     * @param null $shipmentList
     * @param null $carrierId
     * @param null $orderId
     */
    function __construct($shipmentList = null, $carrierCode = null, $orderId = null, $reserveOrderNo = null,
                            $trackinNo = null)
    {
        $this->shipment = $shipmentList;
        $this->carrierCode = $carrierCode;
        $this->orderNo = $orderId;
        $this->reserveOrderNo = $reserveOrderNo;
        $this->trackingNo = $trackinNo;
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
     * @param null $shipmentList
     */
    public function setShipment($shipmentList)
    {
        $this->shipment = $shipmentList;
    }

    /**
     * @return null
     */
    public function getShipment()
    {
        return $this->shipment;
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
     * @param mixed $trackingNo
     */
    public function setTrackingNo($trackingNo)
    {
        $this->trackingNo = $trackingNo;
    }

    /**
     * @return mixed
     */
    public function getTrackingNo()
    {
        return $this->trackingNo;
    }

}
