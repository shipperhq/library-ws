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
namespace ShipperHQ\WS\Rate\Request;

use \ShipperHQ\WS\Shared\Address;
use \ShipperHQ\WS\Rate\Request;
use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class RateRequest
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class RateRequest extends AbstractWebServiceRequest implements WebServiceRequestInterface
{

    public $cart;
    public $destination;
    public $customerDetails;
    public $cartType;
    public $deliveryDateUTC;
    public $deliveryDate;
    public $carrierId;
    public $carrierGroupId;
    public $shipDetails;
    public $carrierCode;
    public $validateAddress;

   /**
    * @param null $cart
    * @param Address $destination
    * @param Address $origin
    */
    public function __construct(
        $cart = null,
        Address $destination = null,
        CustomerDetails $customerDetails = null,
        $cartType = "STD",
        $validateAddress = null,
        $carrierId = null,
        $deliveryDateUTC = null,
        $deliveryDate = null,
        $carrierGroupId = null,
        ShipDetails $shipDetails = null
    ) {
    
        $this->cart = $cart;
        $this->destination = $destination;
        $this->customerDetails = $customerDetails;
        $this->cartType = $cartType;
        $this->carrierId = $carrierId;
        $this->deliveryDate = $deliveryDate;
        $this->deliveryDateUTC = $deliveryDateUTC;
        $this->carrierGroupId = $carrierGroupId;
        $this->shipDetails = $shipDetails;
        $this->validateAddress = $validateAddress;
    }

    /**
     * @param mixed $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return mixed
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

   /**
    * @param mixed $cart
    */
    public function setCart($cart)
    {
        $this->cart = $cart;
    }

   /**
    * @return mixed
    */
    public function getCart()
    {
        return $this->cart;
    }

   /**
    * @param Address $destination
    */
    public function setDestination(Address $destination)
    {
        $this->destination = $destination;
    }

   /**
    * @return Address
    */
    public function getDestination()
    {
        return $this->destination;
    }

   /**
    * @param CustomerDetails $customerDetails
    */
    public function setCustomerDetails(CustomerDetails $customerDetails)
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
     * @param null $deliveryDateUTC
     */
    public function setDeliveryDateUTC($deliveryDateUTC)
    {
        $this->deliveryDateUTC = $deliveryDateUTC;
    }

    /**
     * @return null
     */
    public function getDeliveryDateUTC()
    {
        return $this->deliveryDateUTC;
    }

    /**
     * @param string $cartType
     */
    public function setCartType($cartType)
    {
        $this->cartType = $cartType;
    }

    /**
     * @return string
     */
    public function getCartType()
    {
        return $this->cartType;
    }

    /**
     * @param null $carrierGroupId
     */
    public function setCarrierGroupId($carrierGroupId)
    {
        $this->carrierGroupId = $carrierGroupId;
    }

    /**
     * @return null
     */
    public function getCarrierGroupId()
    {
        return $this->carrierGroupId;
    }

    /**
     * @param null $carrierId
     */
    public function setCarrierId($carrierId)
    {
        $this->carrierId = $carrierId;
    }

    /**
     * @return null
     */
    public function getCarrierId()
    {
        return $this->carrierId;
    }

    /**
     * @param null $shipDetails
     */
    public function setShipDetails(ShipDetails $shipDetails)
    {
        $this->shipDetails = $shipDetails;
    }

    /**
     * @return null
     */
    public function getShipDetails()
    {
        return $this->shipDetails;
    }

    /**
     * @param mixed $carrierCode
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return mixed
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @return null
     */
    public function getValidateAddress()
    {
        return $this->validateAddress;
    }

    /**
     * @param null $validateAddress
     */
    public function setValidateAddress($validateAddress)
    {
        $this->validateAddress = $validateAddress;
    }
}
