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
 * Class Credentials
 *
 * @package ShipperHQ\User
 */
class Credentials
{
    public $password;
    public $apiKey;

   /**
    * @param null $apiKey
    * @param null $password
    * @param null $userId
    */
    public function __construct($apiKey = null, $password = null)
    {
        $this->apiKey = $apiKey;
        $this->password = $password;
    }

   /**
    * @param mixed $apiKey
    */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

   /**
    * @return mixed
    */
    public function getApiKey()
    {
        return $this->apiKey;
    }

   /**
    * @param mixed $password
    */
    public function setPassword($password)
    {
        $this->password = $password;
    }

   /**
    * @return mixed
    */
    public function getPassword()
    {
        return $this->password;
    }
}
