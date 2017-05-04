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
namespace ShipperHQ\WS\Rate\Response;

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
        return [
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
        ];
    }
}
