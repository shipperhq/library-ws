<?php

namespace ShipperHQ\WS\Request\Validation;
use ShipperHQ\Validation\Address;

include_once 'ShipperHQ/WS/Request/AbstractWebServiceRequest.php';
include_once 'ShipperHQ/WS/Request/WebServiceRequest.php';

/**
 * Class RateRequest
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class Request extends \ShipperHQ\WS\Request\AbstractWebServiceRequest implements \ShipperHQ\WS\Request\WebServiceRequest
{

    public $address;

    /**
     * @param null $cart
     * @param Address $destination
     * @param Address $origin
     */
    function __construct(\ShipperHQ\Validation\Address $address = null)
    {
        $this->address = $address;
    }


    /**
     * @param \ShipperHQ\Validation\Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return \ShipperHQ\Validation\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
