<?php

declare(strict_types=1);

namespace App\Constants;

class ContractConstant
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
    private string $dateOfBirth = '1980-05-05';

    /**
     * @var string
     */
    private string $street = 'Augsburer str.';

    /**
     * @var string
     */
    private string $houseNumber = '4';

    /**
     * @var string
     */
    private string $zipCode = '10789';

    /**
     * @var string
     */
    private string $city = 'Berlin';

    /**
     * @var string
     */
    private string $country = 'Germany';

    /**
     * @var string
     */
    private string $vat = '19.00';

    /**
     * @var int
     */
    private int $downPaymentInterval = 12;

    /**
     * @var string
     */
    private string $yearlyUsage = '3500';

    /**
     * @var array
     */
    private array $products = [
        [
            'name' => 'Electricity Simple',
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'tariffs' => [
                [
                    'name' => 'Tariff 1',
                    'usageFrom' => '0',
                    'validFrom' => '2021-01-01',
                    'validUntil' => '2021-12-31',
                    'workingPriceNet' => '0.20',
                    'basePriceNet' => '50.00'
                ],
                [
                    'name' => 'Tariff 2',
                    'usageFrom' => '0',
                    'validFrom' => '2022-01-01',
                    'validUntil' => '2022-12-31',
                    'workingPriceNet' => '0.20',
                    'basePriceNet' => '50.00'
                ],
                [
                    'name' => 'Tariff 3',
                    'usageFrom' => '3001',
                    'validFrom' => '2022-01-01',
                    'validUntil' => '2022-12-31',
                    'workingPriceNet' => '0.15',
                    'basePriceNet' => '40.00'
                ],
                [
                    'name' => 'Tariff 4',
                    'usageFrom' => '5001',
                    'validFrom' => '2022-01-01',
                    'validUntil' => '2022-12-31',
                    'workingPriceNet' => '0.12',
                    'basePriceNet' => '35.00'
                ]
            ]
        ]
    ];

    /**
     * @var array
     */
    private array $bonuses = [
        [
            'name' => 'BONUS-A',
            'usageFrom' => 0,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '5',
            'paymentAfterMonths' => 0
        ],
        [
            'name' => 'BONUS-B',
            'usageFrom' => 0,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '5',
            'paymentAfterMonths' => 6
        ],
        [
            'name' => 'BONUS-C',
            'usageFrom' => 2500,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '2.5',
            'paymentAfterMonths' => 3
        ],
        [
            'name' => 'BONUS-D',
            'usageFrom' => 4500,
            'validFrom' => '2021-01-01',
            'validUntil' => '2022-12-31',
            'value' => '1.25',
            'paymentAfterMonths' => 9
        ]
    ];

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return array
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return string
     */
    public function getYearlyUsage(): string
    {
        return $this->yearlyUsage;
    }

    /**
     * @return int
     */
    public function getDownPaymentInterval(): int
    {
        return $this->downPaymentInterval;
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
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

}