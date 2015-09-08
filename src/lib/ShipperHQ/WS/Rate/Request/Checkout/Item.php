<?php
/**
 *
 * Webshopapps Shipping Module
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

namespace ShipperHQ\Checkout;

/**
 * Class Item
 *
 * @package ShipperHQ\Checkout
 */
class Item
{

   public $id;
   public $name;
   public $weight;
   public $qty;
   public $attributes;
   public $basePrice;
   public $storePrice;
   public $taxInclStorePrice;
   public $taxInclBasePrice;
   public $discountedStorePrice;
   public $discountedBasePrice;
   public $discountedTaxInclStorePrice;
   public $discountedTaxInclBasePrice;
   public $rowTotal;
   public $baseRowTotal;
   public $baseCurrency;
   public $packageCurrency;
   public $storeBaseCurrency;
   public $storeCurrentCurrency;
   public $taxPercentage;
   public $discountPercent;
   public $discountAmount;
   public $freeShipping;
//   public $freeMethodWeight;
   public $additionalAttributes;
   public $legacyAttributes;
   public $items;
   public $type;
   public $fixedPrice;
   public $fixedWeight;

   /**
    * @param array $items
    * @param int $qty
    * @param float $weight
    * @param int $rowTotal
    * @param float $basePrice
    * @param float $baseRowTotal
    * @param float $discountAmount
    * @param float $discountPercent
    * @param float $discountedBasePrice
    * @param float $discountedStorePrice
    * @param float $discountedTaxInclBasePrice
    * @param float $discountedTaxInclStorePrice
    * @param bool $fixedPrice
    * @param float $fixedWeight
    * @param float $freeMethodWeight
    * @param bool $freeShipping
    * @param int $id
    * @param string $name
    * @param string $packageCurrency
    * @param string $baseCurrency
    * @param string $storeBaseCurrency
    * @param string $storeCurrentCurrency
    * @param float $storePrice
    * @param float $taxInclBasePrice
    * @param float $taxInclStorePrice
    * @param float $taxPercentage
    * @param string $type
    * @param array $attributes
    * @param array $legacyAttributes
    * @param array $additionalAttributes
    */
   function __construct($items = array(), $qty = 0, $weight = 0.0, $rowTotal = 0,
                        $basePrice = 0.0, $baseRowTotal = 0.0, $discountAmount = 0.0,
                        $discountPercent = 0.0, $discountedBasePrice = 0.0,
                        $discountedStorePrice = 0.0, $discountedTaxInclBasePrice = 0.0,
                        $discountedTaxInclStorePrice = 0.0, $fixedPrice = false, $fixedWeight = 0.0,
                        $freeShipping = false, $id = 0,
                        $name = "", $packageCurrency = "",$baseCurrency = "",
                        $storeBaseCurrency = "", $storeCurrentCurrency = "", $storePrice = 0.0, $taxInclBasePrice = 0.0,
                        $taxInclStorePrice = 0.0, $taxPercentage = 0.0, $type = "",
                        $attributes = array(), $legacyAttributes = array(), $additionalAttributes = array())
   {
      $this->additionalAttributes = $additionalAttributes;
      $this->attributes = $attributes;
      $this->baseCurrency = $baseCurrency;
      $this->basePrice = $basePrice;
      $this->baseRowTotal = $baseRowTotal;
      $this->discountAmount = $discountAmount;
      $this->discountPercent = $discountPercent;
      $this->discountedBasePrice = $discountedBasePrice;
      $this->discountedStorePrice = $discountedStorePrice;
      $this->discountedTaxInclBasePrice = $discountedTaxInclBasePrice;
      $this->discountedTaxInclStorePrice = $discountedTaxInclStorePrice;
      $this->fixedPrice = $fixedPrice;
      $this->fixedWeight = $fixedWeight;
      $this->freeShipping = $freeShipping;
      $this->id = $id;
      $this->items = $items;
      $this->legacyAttributes = $legacyAttributes;
      $this->name = $name;
      $this->packageCurrency = $packageCurrency;
      $this->qty = $qty;
      $this->rowTotal = $rowTotal;
      $this->storeBaseCurrency = $storeBaseCurrency;
      $this->storeCurrentCurrency = $storeCurrentCurrency;
      $this->storePrice = $storePrice;
      $this->taxInclBasePrice = $taxInclBasePrice;
      $this->taxInclStorePrice = $taxInclStorePrice;
      $this->taxPercentage = $taxPercentage;
      $this->type = $type;
      $this->weight = $weight;
   }

   /**
    * @param array $additionalAttributes
    */
   public function setAdditionalAttributes($additionalAttributes)
   {
      $this->additionalAttributes = $additionalAttributes;
   }

   /**
    * @return array
    */
   public function getAdditionalAttributes()
   {
      return $this->additionalAttributes;
   }

   /**
    * @param array $attributes
    */
   public function setAttributes($attributes)
   {
      $this->attributes = $attributes;
   }

   /**
    * @return array
    */
   public function getAttributes()
   {
      return $this->attributes;
   }

   /**
    * @param mixed $baseCurrency
    */
   public function setBaseCurrency($baseCurrency)
   {
      $this->baseCurrency = $baseCurrency;
   }

   /**
    * @return mixed
    */
   public function getBaseCurrency()
   {
      return $this->baseCurrency;
   }

   /**
    * @param float $basePrice
    */
   public function setBasePrice($basePrice)
   {
      $this->basePrice = $basePrice;
   }

   /**
    * @return float
    */
   public function getBasePrice()
   {
      return $this->basePrice;
   }

   /**
    * @param float $baseRowTotal
    */
   public function setBaseRowTotal($baseRowTotal)
   {
      $this->baseRowTotal = $baseRowTotal;
   }

   /**
    * @return float
    */
   public function getBaseRowTotal()
   {
      return $this->baseRowTotal;
   }

   /**
    * @param float $discountAmount
    */
   public function setDiscountAmount($discountAmount)
   {
      $this->discountAmount = $discountAmount;
   }

   /**
    * @return float
    */
   public function getDiscountAmount()
   {
      return $this->discountAmount;
   }

   /**
    * @param float $discountPercent
    */
   public function setDiscountPercent($discountPercent)
   {
      $this->discountPercent = $discountPercent;
   }

   /**
    * @return float
    */
   public function getDiscountPercent()
   {
      return $this->discountPercent;
   }

   /**
    * @param float $discountedBasePrice
    */
   public function setDiscountedBasePrice($discountedBasePrice)
   {
      $this->discountedBasePrice = $discountedBasePrice;
   }

   /**
    * @return float
    */
   public function getDiscountedBasePrice()
   {
      return $this->discountedBasePrice;
   }

   /**
    * @param float $discountedStorePrice
    */
   public function setDiscountedStorePrice($discountedStorePrice)
   {
      $this->discountedStorePrice = $discountedStorePrice;
   }

   /**
    * @return float
    */
   public function getDiscountedStorePrice()
   {
      return $this->discountedStorePrice;
   }

   /**
    * @param float $discountedTaxInclBasePrice
    */
   public function setDiscountedTaxInclBasePrice($discountedTaxInclBasePrice)
   {
      $this->discountedTaxInclBasePrice = $discountedTaxInclBasePrice;
   }

   /**
    * @return float
    */
   public function getDiscountedTaxInclBasePrice()
   {
      return $this->discountedTaxInclBasePrice;
   }

   /**
    * @param float $discountedTaxInclStorePrice
    */
   public function setDiscountedTaxInclStorePrice($discountedTaxInclStorePrice)
   {
      $this->discountedTaxInclStorePrice = $discountedTaxInclStorePrice;
   }

   /**
    * @return float
    */
   public function getDiscountedTaxInclStorePrice()
   {
      return $this->discountedTaxInclStorePrice;
   }

   /**
    * @param boolean $fixedPrice
    */
   public function setFixedPrice($fixedPrice)
   {
      $this->fixedPrice = $fixedPrice;
   }

   /**
    * @return boolean
    */
   public function getFixedPrice()
   {
      return $this->fixedPrice;
   }

   /**
    * @param boolean $fixedWeight
    */
   public function setFixedWeight($fixedWeight)
   {
      $this->fixedWeight = $fixedWeight;
   }

   /**
    * @return boolean
    */
   public function getFixedWeight()
   {
      return $this->fixedWeight;
   }

   /**
    * @param boolean $freeShipping
    */
   public function setFreeShipping($freeShipping)
   {
      $this->freeShipping = $freeShipping;
   }

   /**
    * @return boolean
    */
   public function getFreeShipping()
   {
      return $this->freeShipping;
   }

   /**
    * @param int $id
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return int
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @param array $items
    */
   public function setItems($items)
   {
      $this->items = $items;
   }

   /**
    * @return array
    */
   public function getItems()
   {
      return $this->items;
   }

   /**
    * @param array $legacyAttributes
    */
   public function setLegacyAttributes($legacyAttributes)
   {
      $this->legacyAttributes = $legacyAttributes;
   }

   /**
    * @return array
    */
   public function getLegacyAttributes()
   {
      return $this->legacyAttributes;
   }

   /**
    * @param mixed $name
    */
   public function setName($name)
   {
      $this->name = $name;
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * @param mixed $packageCurrency
    */
   public function setPackageCurrency($packageCurrency)
   {
      $this->packageCurrency = $packageCurrency;
   }

   /**
    * @return mixed
    */
   public function getPackageCurrency()
   {
      return $this->packageCurrency;
   }

   /**
    * @param int $qty
    */
   public function setQty($qty)
   {
      $this->qty = $qty;
   }

   /**
    * @return int
    */
   public function getQty()
   {
      return $this->qty;
   }

   /**
    * @param int $rowTotal
    */
   public function setRowTotal($rowTotal)
   {
      $this->rowTotal = $rowTotal;
   }

   /**
    * @return int
    */
   public function getRowTotal()
   {
      return $this->rowTotal;
   }

   /**
    * @param mixed $storeBaseCurrency
    */
   public function setStoreBaseCurrency($storeBaseCurrency)
   {
      $this->storeBaseCurrency = $storeBaseCurrency;
   }

   /**
    * @return mixed
    */
   public function getStoreBaseCurrency()
   {
      return $this->storeBaseCurrency;
   }

   /**
    * @param mixed $storeCurrentCurrency
    */
   public function setStoreCurrentCurrency($storeCurrentCurrency)
   {
      $this->storeCurrentCurrency = $storeCurrentCurrency;
   }

   /**
    * @return mixed
    */
   public function getStoreCurrentCurrency()
   {
      return $this->storeCurrentCurrency;
   }

   /**
    * @param float $storePrice
    */
   public function setStorePrice($storePrice)
   {
      $this->storePrice = $storePrice;
   }

   /**
    * @return float
    */
   public function getStorePrice()
   {
      return $this->storePrice;
   }

   /**
    * @param float $taxInclBasePrice
    */
   public function setTaxInclBasePrice($taxInclBasePrice)
   {
      $this->taxInclBasePrice = $taxInclBasePrice;
   }

   /**
    * @return float
    */
   public function getTaxInclBasePrice()
   {
      return $this->taxInclBasePrice;
   }

   /**
    * @param float $taxInclStorePrice
    */
   public function setTaxInclStorePrice($taxInclStorePrice)
   {
      $this->taxInclStorePrice = $taxInclStorePrice;
   }

   /**
    * @return float
    */
   public function getTaxInclStorePrice()
   {
      return $this->taxInclStorePrice;
   }

   /**
    * @param float $taxPercentage
    */
   public function setTaxPercentage($taxPercentage)
   {
      $this->taxPercentage = $taxPercentage;
   }

   /**
    * @return float
    */
   public function getTaxPercentage()
   {
      return $this->taxPercentage;
   }

   /**
    * @param mixed $type
    */
   public function setType($type)
   {
      $this->type = $type;
   }

   /**
    * @return mixed
    */
   public function getType()
   {
      return $this->type;
   }

   /**
    * @param float $weight
    */
   public function setWeight($weight)
   {
      $this->weight = $weight;
   }

   /**
    * @return float
    */
   public function getWeight()
   {
      return $this->weight;
   }


} 