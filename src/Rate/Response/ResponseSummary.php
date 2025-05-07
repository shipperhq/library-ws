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
 * Class ResponseSummary
 *
 * @package ShipperHQ\WS\Response
 */
class ResponseSummary
{
    /**
     * @var int
     */
    private $date;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $profileId;

    /**
     * @var string
     */
    private $profileName;

    /**
     * @var string
     */
    private $cacheStatus;

    /**
     * @var string
     */
    private $experimentName;

    public function __construct($date = 0, $status = -1, $version = "")
    {
        $this->date = $date;
        $this->status = $status;
        $this->version = $version;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->profileId;
    }

    /**
     * @param string $profileId
     */
    public function setProfileId(string $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * @return string
     */
    public function getProfileName(): string
    {
        return $this->profileName;
    }

    /**
     * @param string $profileName
     */
    public function setProfileName(string $profileName): void
    {
        $this->profileName = $profileName;
    }

    /**
     * @return string
     */
    public function getCacheStatus(): string
    {
        return $this->cacheStatus;
    }

    /**
     * @param string $cacheStatus
     */
    public function setCacheStatus(string $cacheStatus): void
    {
        $this->cacheStatus = $cacheStatus;
    }

    /**
     * @return string
     */
    public function getExperimentName(): string
    {
        return $this->experimentName;
    }

    /**
     * @param string $experimentName
     */
    public function setExperimentName(string $experimentName): void
    {
        $this->experimentName = $experimentName;
    }

    /**
     * Convert the object to an associative array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'date' => $this->date,
            'version' => $this->version,
            'transactionId' => $this->transactionId ?? '',
            'status' => $this->status,
            'profileId' => $this->profileId ?? '',
            'profileName' => $this->profileName ?? '',
            'cacheStatus' => $this->cacheStatus ?? '',
            'experimentName' => $this->experimentName ?? '',
        ];
    }

    /**
     * Convert the object to a human-readable string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "ResponseSummary{date='%s', version='%s', transactionId='%s', status='%d', profileId='%s', profileName='%s', cacheStatus='%s', experimentName='%s'}",
            $this->date,
            $this->version,
            $this->transactionId ?? '',
            $this->status,
            $this->profileId ?? '',
            $this->profileName ?? '',
            $this->cacheStatus ?? '',
            $this->experimentName ?? ''
        );
    }
}
