<?php

declare(strict_types=1);

namespace App\Validation;

use App\Dto\ContractDto;
use App\Interfaces\ContractValidationInterface;
use DateTime;

class ContractValidation implements ContractValidationInterface
{

    /**
     * @var array
     */
    private array $errors = [];

    /**
     * @param ContractDto $contractDto
     */
    public function __construct(private ContractDto $contractDto)
    {
    }

    /**
     * @return void
     */
    public function validate(): void
    {
        $this->validateFirstName();
        $this->validateLastName();
        $this->validateDateOfBirth();
        $this->validateStreet();
        $this->validateHouseNumbe();
        $this->validateZipCode();
        $this->validateCity();
        $this->validateCountry();
        $this->validateVat();
        $this->validateDownPaymentInterval();
        $this->validateYearlyUsage();
        $this->validateProducts();
    }

    /**
     * @return void
     */
    private function validateFirstName(): void
    {
        if (empty($this->contractDto->getFirstName())) {
            $this->errors['firstName'] = 'First name is missing';
        }
    }

    /**
     * @return void
     */
    private function validateLastName(): void
    {
        if (empty($this->contractDto->getLastName())) {
            $this->errors['lastName'] = 'Last name is missing';
        }
    }

    /**
     * @return void
     */
    private function validateDateOfBirth(): void
    {
        $d = DateTime::createFromFormat('Y-m-d', $this->contractDto->getDateOfBirth());

        if (empty($this->contractDto->getDateOfBirth()) ||
            !($d && $d->format('Y-m-d') === $this->contractDto->getDateOfBirth())
        ) {
            $this->errors['dateOfBirth'] = 'Date of birth has wrong format';
        }
    }

    /**
     * @return void
     */
    private function validateStreet(): void
    {
        if (empty($this->contractDto->getStreet())) {
            $this->errors['street'] = 'Street is missing';
        }
    }

    /**
     * @return void
     */
    private function validateHouseNumbe(): void
    {
        if (empty($this->contractDto->getHouseNumber())) {
            $this->errors['houseNumber'] = 'House number is missing';
        }
    }

    /**
     * @return void
     */
    private function validateZipCode(): void
    {
        if (empty($this->contractDto->getZipCode())) {
            $this->errors['zipCode'] = 'Zip code is missing';
        }
    }

    /**
     * @return void
     */
    private function validateCity(): void
    {
        if (empty($this->contractDto->getCity())) {
            $this->errors['city'] = 'City is missing';
        }
    }

    /**
     * @return void
     */
    private function validateCountry(): void
    {
        if (empty($this->contractDto->getCountry())) {
            $this->errors['country'] = 'Country is missing';
        }
    }

    /**
     * @return void
     */
    private function validateVat(): void
    {
        if (empty($this->contractDto->getVat()) ||
            !is_numeric($this->contractDto->getVat()) ||
            (float)$this->contractDto->getVat() > 100 ||
            (float)$this->contractDto->getVat() < 0) {
            $this->errors['vat'] = 'Vat is missing or invalid';
        }
    }

    /**
     * @return void
     */
    private function validateDownPaymentInterval(): void
    {
        if (empty($this->contractDto->getDownPaymentInterval()) ||
            !is_numeric($this->contractDto->getDownPaymentInterval()) ||
            $this->contractDto->getDownPaymentInterval() < 1) {
            $this->errors['downPaymentInterval'] = 'Down payment interval is missing or invalid';
        }
    }

    /**
     * @return void
     */
    private function validateYearlyUsage(): void
    {
        if (empty($this->contractDto->getYearlyUsage()) ||
            !is_numeric($this->contractDto->getYearlyUsage()) ||
            (int)$this->contractDto->getYearlyUsage() < 0) {
            $this->errors['yearlyUsage'] = 'Yearly usage is missing or invalid';
        }
    }

    /**
     * @return void
     */
    private function validateProducts(): void
    {
        if (empty($this->contractDto->getProducts())) {
            $this->errors['products'] = 'Products are missing';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}