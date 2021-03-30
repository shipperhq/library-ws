<?php
/**
 * Shipper HQ
 *
 * @category ShipperHQ
 * @package ShipperHQ_WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Validation;

/**
 * Class Address
 *
 * @package ShipperHQ\Shipping
 */
class Address
{

    public $country;
    public $region;
    public $city;
    public $street;
    public $street2;
    public $zipcode;

    /**
     * @param null $city
     * @param null $country
     * @param null $region
     * @param null $street
     * @param null $street2
     * @param null $zipcode
     */
    public function __construct(
        $city = null,
        $country = null,
        $region = null,
        $street = null,
        $street2 = null,
        $zipcode = null
    ) {
    
        $this->city = $city;
        $this->country = $country;
        $this->region = $region;
        $this->street = $street;
        $this->street2 = $street2;
        $this->zipcode = $zipcode;
    }

    /**
     * @param mixed zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

   /**
    * @param mixed $city
    */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }
}
