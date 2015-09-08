<?php

namespace ShipperHQ\WS\Request\UPS\Registration;

/**
 * Class UPSRegistrationRequest
 *
 * @package ShipperHQ\WS\Request\UPS\Registration
 */
class UPSRegistrationRequest extends \ShipperHQ\WS\Request\AbstractWebServiceRequest implements \ShipperHQ\WS\Request\WebServiceRequest
{
   public $proposedUserName;
   public $proposedPassWord;
   public $companyName;
   public $customerName;
   public $title;
   public $address;
   public $phoneNumber;
   public $phoneExt;
   public $email;

   /**
    * @param \ShipperHQ\Shipping\Address $address
    * @param null $companyName
    * @param null $customerName
    * @param null $email
    * @param null $phoneExt
    * @param null $phoneNumber
    * @param null $proposedPassWord
    * @param null $proposedUserName
    * @param null $title
    */
   function __construct(\ShipperHQ\Shipping\Address $address = null, $companyName = null, $customerName = null, $email = null,
                        $phoneExt = null, $phoneNumber = null, $proposedPassWord = null, $proposedUserName = null,
                        $title = null)
   {
      $this->address = $address;
      $this->companyName = $companyName;
      $this->customerName = $customerName;
      $this->email = $email;
      $this->phoneExt = $phoneExt;
      $this->phoneNumber = $phoneNumber;
      $this->proposedPassWord = $proposedPassWord;
      $this->proposedUserName = $proposedUserName;
      $this->title = $title;
   }

   /**
    * @param \ShipperHQ\Shipping\Address $address
    */
   public function setAddress(\ShipperHQ\Shipping\Address $address)
   {
      $this->address = $address;
   }

   /**
    * @return Address
    */
   public function getAddress()
   {
      return $this->address;
   }

   /**
    * @param mixed $companyName
    */
   public function setCompanyName($companyName)
   {
      $this->companyName = $companyName;
   }

   /**
    * @return mixed
    */
   public function getCompanyName()
   {
      return $this->companyName;
   }

   /**
    * @param mixed $customerName
    */
   public function setCustomerName($customerName)
   {
      $this->customerName = $customerName;
   }

   /**
    * @return mixed
    */
   public function getCustomerName()
   {
      return $this->customerName;
   }

   /**
    * @param mixed $email
    */
   public function setEmail($email)
   {
      $this->email = $email;
   }

   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @param mixed $phoneExt
    */
   public function setPhoneExt($phoneExt)
   {
      $this->phoneExt = $phoneExt;
   }

   /**
    * @return mixed
    */
   public function getPhoneExt()
   {
      return $this->phoneExt;
   }

   /**
    * @param mixed $phoneNumber
    */
   public function setPhoneNumber($phoneNumber)
   {
      $this->phoneNumber = $phoneNumber;
   }

   /**
    * @return mixed
    */
   public function getPhoneNumber()
   {
      return $this->phoneNumber;
   }

   /**
    * @param mixed $proposedPassWord
    */
   public function setProposedPassWord($proposedPassWord)
   {
      $this->proposedPassWord = $proposedPassWord;
   }

   /**
    * @return mixed
    */
   public function getProposedPassWord()
   {
      return $this->proposedPassWord;
   }

   /**
    * @param mixed $proposedUserName
    */
   public function setProposedUserName($proposedUserName)
   {
      $this->proposedUserName = $proposedUserName;
   }

   /**
    * @return mixed
    */
   public function getProposedUserName()
   {
      return $this->proposedUserName;
   }

   /**
    * @param mixed $title
    */
   public function setTitle($title)
   {
      $this->title = $title;
   }

   /**
    * @return mixed
    */
   public function getTitle()
   {
      return $this->title;
   }
}
