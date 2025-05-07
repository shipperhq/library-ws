<?php


/*
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2025 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\Rate\Response;

use ShipperHQ\WS\AbstractWebServiceResponse;
use ShipperHQ\WS\Rate\Response\Shipping\CarrierGroupResponse;
use ShipperHQ\WS\Rate\Response\Merge\MergedRateResponse;
use ShipperHQ\WS\Rate\Response\AV\AddressValidationResponse;

class RateResponse extends AbstractWebServiceResponse
{
    private array $carrierGroupResponses = [];
    private ?MergedRateResponse $mergedRateResponse = null;
    private ?GlobalSettings $globalSettings = null;
    private ?AddressValidationResponse $addressValidationResponse = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return CarrierGroupResponse[]
     */
    public function getCarrierGroupResponses(): array
    {
        return $this->carrierGroupResponses;
    }

    /**
     * @param CarrierGroupResponse[] $carrierGroupResponses
     */
    public function setCarrierGroupResponses(array $carrierGroupResponses): void
    {
        $this->carrierGroupResponses = $carrierGroupResponses;
    }

    public function getMergedRateResponse(): ?MergedRateResponse
    {
        return $this->mergedRateResponse;
    }

    public function setMergedRateResponse(?MergedRateResponse $mergedRateResponse): void
    {
        $this->mergedRateResponse = $mergedRateResponse;
    }

    public function getGlobalSettings(): ?GlobalSettings
    {
        return $this->globalSettings;
    }

    public function setGlobalSettings(?GlobalSettings $globalSettings): void
    {
        $this->globalSettings = $globalSettings;
    }

    public function getAddressValidationResponse(): ?AddressValidationResponse
    {
        return $this->addressValidationResponse;
    }

    public function setAddressValidationResponse(?AddressValidationResponse $addressValidationResponse): void
    {
        $this->addressValidationResponse = $addressValidationResponse;
    }

    public function toArray(): array
    {
        return [
            'carrierGroupResponses' => array_map(function (CarrierGroupResponse $response) {
                return $response->toArray();
            }, $this->carrierGroupResponses),
            'mergedRateResponse' => $this->mergedRateResponse ? $this->mergedRateResponse->toArray() : null,
            'globalSettings' => $this->globalSettings ? $this->globalSettings->toArray() : null,
            'addressValidationResponse' => $this->addressValidationResponse ? $this->addressValidationResponse->toArray() : null
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "RateResponse{carrierGroupResponses=%s, mergedRateResponse=%s, globalSettings=%s, addressValidationResponse=%s}",
            json_encode($this->carrierGroupResponses),
            $this->mergedRateResponse ? $this->mergedRateResponse->__toString() : 'null',
            $this->globalSettings ? $this->globalSettings->__toString() : 'null',
            $this->addressValidationResponse ? $this->addressValidationResponse->__toString() : 'null'
        );
    }
}
