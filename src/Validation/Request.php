<?php

namespace ShipperHQ\WS\Validation;

use ShipperHQ\WS\Validation\Address;

use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class RateRequest
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class Request extends AbstractWebServiceRequest implements WebServiceRequestInterface
{

    public $address;

    /**
     * @param null $cart
     * @param Address $destination
     * @param Address $origin
     */
    function __construct(Address $address = null)
    {
        $this->address = $address;
    }


    /**
     * @param Address $address
     */
    public function setAddress($address)
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
}
