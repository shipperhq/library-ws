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
