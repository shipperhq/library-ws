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
    public function __construct(
        $shipmentList = null,
        $carrierCode = null,
        $orderId = null,
        $reserveOrderNo = null,
        $trackinNo = null
    ) {
    
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
