<?php

declare(strict_types=1);

namespace App\Constants;

class TestConstant
{
    /**
     * @var string
     */
    private string $firstName = 'Hans';

    /**
     * @var string
     */
    private string $lastName = 'Mayer';

    /**
     * @var string
     */
    private string $productName = 'Electricity Simple';

    /**
     * @var string
     */
    private string $yearlyUsage = '3500';

    /**
     * @var string
     */
    private string $vat = '19.00';

    /**
     * @var int
     */
    private int $downPaymentInterval = 12;


    /**
     * @var array
     */
    private array $tariff = [
        'name' => 'Tariff 3',
        'usageFrom' => '3001',
        'validFrom' => '2022-01-01',
        'validUntil' => '2022-12-31',
        'workingPriceNet' => '0.15',
        'basePriceNet' => '40.00'
    ];

    /**
     * @var string
     */
    private string $workingPriceNet = '0.15';

    /**
     * @var string
     */
    private string $basePriceNet = '40.00';

    /**
     * @var array
     */
    private array $bonus = [
        0 => [
            'name' => 'BONUS-A',
            'usageFrom' => 0,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '5',
            'paymentAfterMonths' => 0
        ],
        1 => [
            'name' => 'BONUS-B',
            'usageFrom' => 0,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '5',
            'paymentAfterMonths' => 6

        ],
        2 => [
            'name' => 'BONUS-C',
            'usageFrom' => 2500,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '2.5',
            'paymentAfterMonths' => 3

        ]
    ];

    /**
     * @var float
     */
    private float $workingPriceNetYearly = 525;

    /**
     * @var float
     */
    private float $monthlyDownPayment = 47.083333333333336;

    /**
     * @var array
     */
    private array $monthlyPayments = [
        0 => 53.23,
        1 => 53.23,
        2 => 53.23,
        3 => 51.83,
        4 => 51.83,
        5 => 51.83,
        6 => 49.03,
        7 => 49.03,
        8 => 49.03,
        9 => 49.03,
        10 => 49.03,
        11 => 49.03,
    ];

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return array
     */
    public function getMonthlyPayments(): array
    {
        return $this->monthlyPayments;
    }

    /**
     * @return float
     */
    public function getMonthlyDownPayment(): float
    {
        return $this->monthlyDownPayment;
    }

    /**
     * @return float
     */
    public function getWorkingPriceNetYearly(): float
    {
        return $this->workingPriceNetYearly;
    }

    /**
     * @return string
     */
    public function getWorkingPriceNet(): string
    {
        return $this->workingPriceNet;
    }

    /**
     * @return string
     */
    public function getBasePriceNet(): string
    {
        return $this->basePriceNet;
    }

    /**
     * @return array
     */
    public function getBonus(): array
    {
        return $this->bonus;
    }

    /**
     * @return int
     */
    public function getDownPaymentInterval(): int
    {
        return $this->downPaymentInterval;
    }

    /**
     * @return array
     */
    public function getTariff(): array
    {
        return $this->tariff;
    }

    /**
     * @return string
     */
    public function getVat(): string
    {
        return $this->vat;
    }

    /**
     * @return string
     */
    public function getYearlyUsage(): string
    {
        return $this->yearlyUsage;
    }

}