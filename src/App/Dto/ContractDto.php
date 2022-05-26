<?php

declare(strict_types=1);

namespace App\Dto;

class ContractDto
{

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var string
     */
    private string $dateOfBirth;

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $houseNumber;

    /**
     * @var string
     */
    private string $zipCode;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $country;

    /**
     * @var string
     */
    private string $vat;

    /**
     * @var int
     */
    private int $downPaymentInterval;

    /**
     * @var string
     */
    private string $yearlyUsage;

    /**
     * @var array
     */
    private array $products;

    /**
     * @var array
     */
    private array $bonuses;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     */
    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getVat(): string
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     */
    public function setVat(string $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    public function getDownPaymentInterval(): int
    {
        return $this->downPaymentInterval;
    }

    /**
     * @param int $downPaymentInterval
     */
    public function setDownPaymentInterval(int $downPaymentInterval): void
    {
        $this->downPaymentInterval = $downPaymentInterval;
    }

    /**
     * @return string
     */
    public function getYearlyUsage(): string
    {
        return $this->yearlyUsage;
    }

    /**
     * @param string $yearlyUsage
     */
    public function setYearlyUsage(string $yearlyUsage): void
    {
        $this->yearlyUsage = $yearlyUsage;
    }

    /**
     * @return array
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    /**
     * @param array $bonuses
     */
    public function setBonuses(array $bonuses): void
    {
        $this->bonuses = $bonuses;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

}