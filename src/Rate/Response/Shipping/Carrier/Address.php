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

namespace ShipperHQ\WS\Rate\Response\Shipping\Carrier;

class Address
{
    private ?string $country = null;  // ISO2 Country
    private ?string $region = null;   // Abbreviation
    private ?string $city = null;
    private ?string $street = null;
    private ?string $street2 = null;
    private ?string $zipcode = null;
    private ?string $firstName = null;
    private ?string $email = null;
    private ?string $telephone = null;

    public function __construct()
    {
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(?string $street2): void
    {
        $this->street2 = $street2;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function toArray(): array
    {
        return [
            'country' => $this->country,
            'region' => $this->region,
            'city' => $this->city,
            'street' => $this->street,
            'street2' => $this->street2,
            'zipcode' => $this->zipcode,
            'firstName' => $this->firstName,
            'email' => $this->email,
            'telephone' => $this->telephone
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "Address{country='%s', region='%s', city='%s', street='%s', street2='%s', " .
            "zipcode='%s', firstName='%s', email='%s', telephone='%s'}",
            $this->country ?? '',
            $this->region ?? '',
            $this->city ?? '',
            $this->street ?? '',
            $this->street2 ?? '',
            $this->zipcode ?? '',
            $this->firstName ?? '',
            $this->email ?? '',
            $this->telephone ?? ''
        );
    }
}
