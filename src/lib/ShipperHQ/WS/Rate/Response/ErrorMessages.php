<?php

namespace ShipperHQ\WS\Response;
/**
 * Class ResponseSummary
 *
 * @package ShipperHQ\WS\Response
 */

class ErrorMessages
{
    const SHIPPERHQ_NO_RATES_RETURNED = 1500;
    const SHIPPERHQ_NO_MERGEDRATES_RETURNED = 1520;
    const SHIPPERHQ_INVALID_RESPONSE  = 1550;
    const SHIPPERHQ_NO_RATES_FOR_CARRIER = 1570;
    const SHIPPERHQ_NO_SYNCH_DATA_RETURNED = 1600;
    const SHIPPERHQ_UNRESPONSIVE = 1700;
    const SHIPPERHQ_NO_PICKUP_LOCATIONS = 2000;

    public function getErrors()
    {
       return array (
            self::SHIPPERHQ_NO_RATES_RETURNED =>
                'ShipperHQ did not return any shipping rates for your carriers',
            self::SHIPPERHQ_NO_MERGEDRATES_RETURNED =>
                'ShipperHQ did not return a merged rate for multi origin/group rates',
            self::SHIPPERHQ_NO_RATES_FOR_CARRIER =>
                'ShipperHQ did not return any shipping rates for this carrier',
            self::SHIPPERHQ_INVALID_RESPONSE =>
                'ShipperHQ did not return a response, please review your settings for ShipperHQ URL and your network connectivity',
            self::SHIPPERHQ_NO_SYNCH_DATA_RETURNED =>
                'ShipperHQ did not return any attribute data to synchronize',
            self::SHIPPERHQ_UNRESPONSIVE =>
                'ShipperHQ is not responding, please check your settings to ensure they are correct',
            self::SHIPPERHQ_NO_PICKUP_LOCATIONS => 'ShipperHQ could not find any in store pickup locations in your area'
        );
    }
}