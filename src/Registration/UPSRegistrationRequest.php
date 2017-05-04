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
namespace ShipperHQ\WS\Registration;

use \ShipperHQ\WS\Shared\Address;
use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class UPSRegistrationRequest
 *
 * @package ShipperHQ\WS\Registration
 */
class UPSRegistrationRequest extends AbstractWebServiceRequest implements WebServiceRequestInterface
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
     * @param \ShipperHQ\WS\Shared\Address $address
     * @param null $companyName
     * @param null $customerName
     * @param null $email
     * @param null $phoneExt
     * @param null $phoneNumber
     * @param null $proposedPassWord
     * @param null $proposedUserName
     * @param null $title
     */
    public function __construct(
        Address $address = null,
        $companyName = null,
        $customerName = null,
        $email = null,
        $phoneExt = null,
        $phoneNumber = null,
        $proposedPassWord = null,
        $proposedUserName = null,
        $title = null
    ) {
    
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
     * @param Address $address
     */
    public function setAddress(Address $address)
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
