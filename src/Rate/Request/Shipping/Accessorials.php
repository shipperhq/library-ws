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
namespace ShipperHQ\WS\Rate\Request\Shipping;

/**
 * Class Accessorials
 *
 * @package ShipperHQ\Shipping
 */
class Accessorials
{

    public $liftgateRequired;
    public $destinationType;
    public $notifyRequired;
    public $insideDelivery;

    public function __construct(
        $liftgateRequired = null,
        $destinationType = null,
        $notifyRequired = null,
        $insideDelivery = null
    ) {
    
        $this->liftgateRequired = $liftgateRequired;
        $this->destinationType = $destinationType;
        $this->notifyRequired = $notifyRequired;
        $this->insideDelivery = $insideDelivery;
    }

   /**
    * @param mixed $liftgateRequired
    */
    public function setLiftgateRequired($liftgateRequired)
    {
        $this->liftgateRequired = $liftgateRequired;
    }

   /**
    * @return mixed
    */
    public function getLiftgateRequired()
    {
        return $this->liftgateRequired;
    }
    /**
     * @param null $destinationType
     */
    public function setDestinationType($destinationType)
    {
        $this->destinationType = $destinationType;
    }

    /**
     * @return null
     */
    public function getDestinationType()
    {
        return $this->destinationType;
    }

    /**
     * @param null $insideDelivery
     */
    public function setInsideDelivery($insideDelivery)
    {
        $this->insideDelivery = $insideDelivery;
    }

    /**
     * @return null
     */
    public function getInsideDelivery()
    {
        return $this->insideDelivery;
    }

    /**
     * @param null $notifyRequired
     */
    public function setNotifyRequired($notifyRequired)
    {
        $this->notifyRequired = $notifyRequired;
    }

    /**
     * @return null
     */
    public function getNotifyRequired()
    {
        return $this->notifyRequired;
    }
}
