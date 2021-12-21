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
namespace ShipperHQ\WS\Shared;

/**
 * Class Address
 *
 * @package ShipperHQ\Shipping
 */
class Address extends BasicAddress
{
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
        parent::__construct($city,$country, $region, $street, $street2, $zipcode);
        $this->accessorials = $accessorials;
        $this->email = $email;
        $this->givenName = $firstName;
        $this->familyName = $lastName;
        $this->telNo = $telephone;
        $this->selectedOptions = $selectedOptions;
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
