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
namespace ShipperHQ\WS\Shipment\Request;

/**
 * Class CustomerDetails
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class ShipmentCustomerDetails
{
    public $customerGroup;
    public $companyName;
    public $email;
    public $firstName;
    public $lastName;
    public $phone;

    /**
     * @param null $customerGroup
     */
    public function __construct(
        $customerGroup = null,
        $companyName = null,
        $emailAddress = null,
        $firstName = null,
        $lastname = null,
        $telephone = null
    ) {
    
        $this->customerGroup = $customerGroup;
        $this->companyName = $companyName;
        $this->email = $emailAddress;
        $this->firstName = $firstName;
        $this->lastName = $lastname;
        $this->phone = $telephone;
    }
}
