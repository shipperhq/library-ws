<?php
/**
 *
 * ShipperHQ Shipping Module
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
 * @package ShipperHQ_Shipping_Carrier
 * @copyright Copyright (c) 2014 Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Shared;

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
    public $accessorials;
    public $selectedOptions;
    public $email;
    public $givenName;
    public $familyName;
    public $telNo;

   /**
    * @param null $accessorials
    * @param null $city
    * @param null $country
    * @param null $region
    * @param null $street
    * @param null $street2
    * @param null $zipcode
    * @param null $selectedOptions
    */
    public function __construct(
        $accessorials = null,
        $city = null,
        $country = null,
        $region = null,
        $street = null,
        $street2 = null,
        $zipcode = null,
        $email = null,
        $firstName = null,
        $lastName = null,
        $telephone = null,
        $selectedOptions = null
    ) {
    
        $this->accessorials = $accessorials;
        $this->city = $city;
        $this->country = $country;
        $this->region = $region;
        $this->street = $street;
        $this->street2 = $street2;
        $this->zipcode = $zipcode;
        $this->email = $email;
        $this->givenName = $firstName;
        $this->familyName = $lastName;
        $this->telNo = $telephone;
        $this->selectedOptions = $selectedOptions;
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
    * @param Accessorials $accessorials
    */
    public function setSelectedOptions($selectedOptions)
    {
        $this->selectedOptions = $selectedOptions;
    }

   /**
    * @return Accessorials
    */
    public function getSelectedOptions()
    {
        return $this->selectedOptions;
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

    /**
     * @param null $accessorials
     */
    public function setAccessorials($accessorials)
    {
        $this->accessorials = $accessorials;
    }

    /**
     * @return null
     */
    public function getAccessorials()
    {
        return $this->accessorials;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return null
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param null $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return null
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param null $telNo
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * @return null
     */
    public function getTelNo()
    {
        return $this->telNo;
    }
}
