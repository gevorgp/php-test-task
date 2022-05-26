<?php

declare(strict_types=1);

namespace App;

use App\Constants\ContractConstant;
use App\Constants\TestConstant;
use App\Dto\ContractDto;
use Exception;
use PHPUnit\Framework\TestCase;

class RunTest extends TestCase
{
    /**
     * @var Run
     */
    protected Run $run;

    protected ContractConstant $contractConstant;

    protected TestConstant $testConstant;

    /**
     * @return void
     */
    public function _before(): void
    {
        $this->run = new Run();
        $this->testConstant = new TestConstant();
    }

    /**
     * @throws Exception
     */
    public function testRun()
    {
        $this->_before();
        $contractDto = $this->run->run();
        $this->assertEquals($this->testConstant->getFirstName(), $contractDto->getFirstName());
        $this->assertEquals($this->testConstant->getLastName(), $contractDto->getLastName());
        $this->assertEquals($this->testConstant->getProductName(), $contractDto->getProductName());
        $this->assertEquals($this->testConstant->getMonthlyPayments(), $contractDto->getMonthlyPayments());
        $this->assertEquals($this->testConstant->getMonthlyDownPayment(), $contractDto->getMonthlyDownPayment());
        $this->assertEquals($this->testConstant->getWorkingPriceNetYearly(), $contractDto->getWorkingPriceNetYearly());
        $this->assertEquals($this->testConstant->getWorkingPriceNet(), $contractDto->getWorkingPriceNet());
        $this->assertEquals($this->testConstant->getBasePriceNet(), $contractDto->getBasePriceNet());
        $this->assertEquals($this->testConstant->getBonus(), $contractDto->getBonus());
        $this->assertEquals($this->testConstant->getDownPaymentInterval(), $contractDto->getDownPaymentInterval());
        $this->assertEquals($this->testConstant->getTariff(), $contractDto->getTariff());
        $this->assertEquals($this->testConstant->getVat(), $contractDto->getVat());
        $this->assertEquals($this->testConstant->getYearlyUsage(), $contractDto->getYearlyUsage());
        //$this->assertEquals( $this->testConstant->getDateOfBirth(), $contractDto->getDateOfBirth());
    }

}