<?php

declare(strict_types=1);

namespace App\Dto;

class DisplayContractDto
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
    private string $yearlyUsage;

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
    private string $productName;

    /**
     * @var array
     */
    private array $tariff;

    /**
     * @var string
     */
    private string $workingPriceNet;

    /**
     * @var string
     */
    private string $basePriceNet;

    /**
     * @var array
     */
    private array $bonus;

    /**
     * @var float
     */
    private float $workingPriceNetYearly;

    /**
     * @var float
     */
    private float $monthlyDownPayment;

    /**
     * @var array
     */
    private array $monthlyPayments;


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
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return array
     */
    public function getTariff(): array
    {
        return $this->tariff;
    }

    /**
     * @param array $tariff
     */
    public function setTariff(array $tariff): void
    {
        $this->tariff = $tariff;
    }

    /**
     * @return string
     */
    public function getWorkingPriceNet(): string
    {
        return $this->workingPriceNet;
    }

    /**
     * @param string $workingPriceNet
     */
    public function setWorkingPriceNet(string $workingPriceNet): void
    {
        $this->workingPriceNet = $workingPriceNet;
    }

    /**
     * @return string
     */
    public function getBasePriceNet(): string
    {
        return $this->basePriceNet;
    }

    /**
     * @param string $basePriceNet
     */
    public function setBasePriceNet(string $basePriceNet): void
    {
        $this->basePriceNet = $basePriceNet;
    }

    /**
     * @return array
     */
    public function getBonus(): array
    {
        return $this->bonus;
    }

    /**
     * @param array $bonus
     */
    public function setBonus(array $bonus): void
    {
        $this->bonus[] = $bonus;
    }

    /**
     * @return float
     */
    public function getWorkingPriceNetYearly(): float
    {
        return $this->workingPriceNetYearly;
    }

    /**
     * @param float $workingPriceNetYearly
     */
    public function setWorkingPriceNetYearly(float $workingPriceNetYearly): void
    {
        $this->workingPriceNetYearly = $workingPriceNetYearly;
    }

    /**
     * @return float
     */
    public function getMonthlyDownPayment(): float
    {
        return $this->monthlyDownPayment;
    }

    /**
     * @param float $monthlyDownPayment
     */
    public function setMonthlyDownPayment(float $monthlyDownPayment): void
    {
        $this->monthlyDownPayment = $monthlyDownPayment;
    }

    /**
     * @return array
     */
    public function getMonthlyPayments(): array
    {
        return $this->monthlyPayments;
    }

    /**
     * @param float $monthlyPayments
     */
    public function setMonthlyPayments(float $monthlyPayments): void
    {
        $this->monthlyPayments[] = $monthlyPayments;
    }
}