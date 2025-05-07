<?php
/**
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\Rate\Response;

/**
 * Class WebServiceError
 *
 * @package ShipperHQ\WS\Rate\Response
 */
class WebServiceError
{
    /**
     * @var int
     */
    private $errorCode;

    /**
     * @var string
     */
    private $internalErrorMessage;

    /**
     * @var string
     */
    private $externalErrorMessage;

    /**
     * @var int
     */
    private $priority = 999;

    public function __construct(?int $errorCode = null, ?string $description = null, ?string $errorMessage = null)
    {
        if ($errorCode !== null) {
            $this->errorCode = $errorCode;
            $this->internalErrorMessage = $description ?? 'Please contact ShipperHQ for support';
            $this->externalErrorMessage = $errorMessage ?? 'Unknown Error has Occurred';
        }
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     */
    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getInternalErrorMessage(): string
    {
        return $this->internalErrorMessage;
    }

    /**
     * @param string $internalErrorMessage
     */
    public function setInternalErrorMessage(string $internalErrorMessage): void
    {
        $this->internalErrorMessage = $internalErrorMessage;
    }

    /**
     * @return string
     */
    public function getExternalErrorMessage(): string
    {
        return $this->externalErrorMessage;
    }

    /**
     * @param string $externalErrorMessage
     */
    public function setExternalErrorMessage(string $externalErrorMessage): void
    {
        $this->externalErrorMessage = $externalErrorMessage;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'errorCode' => $this->errorCode,
            'internalErrorMessage' => $this->internalErrorMessage,
            'externalErrorMessage' => $this->externalErrorMessage,
            'priority' => $this->priority
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "WebServiceError{errorCode=%d, internalErrorMessage='%s', externalErrorMessage='%s', priority=%d}",
            $this->errorCode,
            $this->internalErrorMessage,
            $this->externalErrorMessage,
            $this->priority
        );
    }
}
