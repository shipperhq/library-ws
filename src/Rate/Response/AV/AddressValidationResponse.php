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

namespace ShipperHQ\WS\Rate\Response\AV;

use ShipperHQ\WS\AbstractWebServiceResponse;

class AddressValidationResponse extends AbstractWebServiceResponse
{
    private bool $valid;
    private ?string $suggestedAddress = null;
    private array $validationMessages;

    public function __construct()
    {
        parent::__construct();
        $this->validationMessages = [];
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): void
    {
        $this->valid = $valid;
    }

    public function getSuggestedAddress(): ?string
    {
        return $this->suggestedAddress;
    }

    public function setSuggestedAddress(?string $suggestedAddress): void
    {
        $this->suggestedAddress = $suggestedAddress;
    }

    /**
     * @return string[]
     */
    public function getValidationMessages(): array
    {
        return $this->validationMessages;
    }

    /**
     * @param string[] $validationMessages
     */
    public function setValidationMessages(array $validationMessages): void
    {
        $this->validationMessages = $validationMessages;
    }

    public function __toString(): string
    {
        return sprintf(
            "AddressValidationResponse{valid=%s, suggestedAddress='%s', validationMessages=%s}",
            $this->valid ? 'true' : 'false',
            $this->suggestedAddress ?? 'null',
            json_encode($this->validationMessages)
        );
    }
}
