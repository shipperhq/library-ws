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
class RateRequest extends \ShipperHQ\WS\Request\AbstractWebServiceRequest implements \ShipperHQ\WS\Request\WebServiceRequest
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

   /**
    * @param null $cart
    * @param Address $destination
    * @param Address $origin
    */
   function __construct($cart = null, \ShipperHQ\Shipping\Address $destination = null,
                        \ShipperHQ\WS\Request\Rate\CustomerDetails $customerDetails = null,
                        $cartType = "STD", $carrierId = null, $deliveryDateUTC = null, $deliveryDate = null,
                        $carrierGroupId = null, \ShipperHQ\WS\Request\Rate\ShipDetails $shipDetails = null)
   {
      $this->cart = $cart;
      $this->destination = $destination;
      $this->customerDetails = $customerDetails;
      $this->cartType = $cartType;
      $this->carrierId = $carrierId;
      $this->deliveryDate = $deliveryDate;
      $this->deliveryDateUTC = $deliveryDateUTC;
      $this->carrierGroupId = $carrierGroupId;
      $this->shipDetails = $shipDetails;
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
   public function setDestination(\ShipperHQ\Shipping\Address $destination)
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
    public function setShipDetails(\ShipperHQ\WS\Request\Rate\ShipDetails $shipDetails)
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

}
