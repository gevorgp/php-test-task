<?php

declare(strict_types=1);

namespace App\Contract;

use App\Dto\ContractDto;
use App\Dto\DisplayContractDto;
use DateTime;
use Exception;

class Contract
{

    public function __construct(
        private ContractDto $contractDto,
        private DisplayContractDto $displayContractDto
    ) {
    }

    /**
     * @return DisplayContractDto
     * @throws Exception
     */
    public function populate(): DisplayContractDto
    {
        $this->displayContractDto->setFirstName($this->contractDto->getFirstName());
        $this->displayContractDto->setLastName($this->contractDto->getLastName());
        $this->displayContractDto->setYearlyUsage($this->contractDto->getYearlyUsage());
        $this->displayContractDto->setVat($this->contractDto->getVat());
        $this->displayContractDto->setDownPaymentInterval($this->contractDto->getDownPaymentInterval());

        $this->addPricesTariff();

        $this->checkForValidBonus();

        $this->calculateWorkingPriceNetYearly();

        $this->calculateMonthlyDown();

        $this->addMonthlyDownPayment();

        return $this->display();
    }

    /**
     * @return void
     * @throws Exception
     */
    private function addPricesTariff(): void
    {
        $dateNow = new DateTime('now');

        foreach ($this->contractDto->getProducts() as $product) {
            if ($dateNow >= new DateTime($product['validFrom']) && $dateNow <= new DateTime($product['validUntil'])) {
                $this->displayContractDto->setProductName($product['name']);
                foreach ($product['tariffs'] as $tariff) {
                    if ($dateNow >= new DateTime($tariff['validFrom'])
                        && $dateNow <= new DateTime($tariff['validUntil'])
                        && $this->contractDto->getYearlyUsage() >= $tariff['usageFrom']
                    ) {
                        $this->displayContractDto->setTariff($tariff);
                        $this->displayContractDto->setWorkingPriceNet($tariff['workingPriceNet']);
                        $this->displayContractDto->setBasePriceNet($tariff['basePriceNet']);
                    }
                }
            }
        }
    }

    /**
     * @return void
     * @throws Exception
     */
    private function checkForValidBonus(): void
    {
        $dateNow = new DateTime('now');

        foreach ($this->contractDto->getBonuses() as $bonus) {
            if ($dateNow >= new DateTime($bonus['validFrom'])
                && $dateNow <= new DateTime($bonus['validUntil'])
                && $this->displayContractDto->getYearlyUsage() >= $bonus['usageFrom']
            ) {
                $this->displayContractDto->setBonus($bonus);
            }
        }
    }

    /**
     * @return void
     */
    private function calculateWorkingPriceNetYearly(): void
    {
        $workingPriceNetYearly = $this->displayContractDto->getWorkingPriceNet() *
            $this->displayContractDto->getYearlyUsage();
        $this->displayContractDto->setWorkingPriceNetYearly($workingPriceNetYearly);
    }

    /**
     * @return void
     */
    private function calculateMonthlyDown(): void
    {
        $monthlyDownPayment = ($this->displayContractDto->getBasePriceNet(
                ) + $this->displayContractDto->getWorkingPriceNetYearly()) /
            (int)$this->displayContractDto->getDownPaymentInterval();
        $this->displayContractDto->setMonthlyDownPayment($monthlyDownPayment);
    }

    /**
     * @return void
     */
    private function addMonthlyDownPayment(): void
    {
        for ($i = 1; $i <= (int)$this->displayContractDto->getDownPaymentInterval(); $i++) {
            $mPayment = $this->displayContractDto->getMonthlyDownPayment();
            foreach ($this->displayContractDto->getBonus() as $bonus) {
                if ($i > $bonus['paymentAfterMonths']) {
                    $mPayment -= ($this->displayContractDto->getMonthlyDownPayment() * ((float)$bonus['value'] / 100));
                }
            }
            $payment = round($mPayment + ($mPayment * ($this->displayContractDto->getVat() / 100)), 2);

            $this->displayContractDto->setMonthlyPayments($payment);
        }
    }

    /**
     * @return DisplayContractDto
     */
    private function display(): DisplayContractDto
    {
        echo "Interval: {$this->displayContractDto->getDownPaymentInterval()} <br>";
        echo "First Name: {$this->displayContractDto->getFirstName()} <br>";
        echo "Last Name: {$this->displayContractDto->getLastName()} <br>";
        echo "Product Name: {$this->displayContractDto->getProductName()} <br>";
        echo "Tariff Base price: {$this->displayContractDto->getBasePriceNet()} EUR <br>";
        echo "Tariff Working price: {$this->displayContractDto->getWorkingPriceNet()} Cent <br>";
        foreach ($this->displayContractDto->getMonthlyPayments() as $month => $monthlyPayment) {
            echo "Monthly down payemnt: {$month} - {$monthlyPayment} EUR <br>";
        }

        return $this->displayContractDto;
    }
}