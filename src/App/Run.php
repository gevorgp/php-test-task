<?php

declare(strict_types=1);

namespace App;

use App\Contract\Contract;
use App\Dto\ContractDto;
use App\Dto\DisplayContractDto;
use App\Validation\ContractValidation;
use Exception;
use App\Constants\ContractConstant;

class Run
{
    /**
     * @return DisplayContractDto
     * @throws Exception
     */
    public function run(): DisplayContractDto
    {
        $contractDto = $this->setContract();
        $contractValidation = new ContractValidation($contractDto);
        $contractValidation->validate();

        if (count($contractValidation->getErrors())) {
            foreach ($contractValidation->getErrors() as $error) {
                echo $error . '<br />';
            }
            die();
        }

        $displayContractDto = new DisplayContractDto();

        $contract = new Contract($contractDto, $displayContractDto);
        return $contract->populate();
    }

    /**
     * @return ContractDto
     */
    private function setContract(): ContractDto
    {
        $contractConstants = new ContractConstant();
        $contractRequestDto = new ContractDto();
        $contractRequestDto->setFirstName($contractConstants->getFirstName());
        $contractRequestDto->setLastName($contractConstants->getLastName());
        $contractRequestDto->setDateOfBirth($contractConstants->getDateOfBirth());
        $contractRequestDto->setStreet($contractConstants->getStreet());
        $contractRequestDto->setHouseNumber($contractConstants->getHouseNumber());
        $contractRequestDto->setZipCode($contractConstants->getZipCode());
        $contractRequestDto->setCity($contractConstants->getCity());
        $contractRequestDto->setCountry($contractConstants->getCountry());
        $contractRequestDto->setVat($contractConstants->getVat());
        $contractRequestDto->setDownPaymentInterval($contractConstants->getDownPaymentInterval());
        $contractRequestDto->setYearlyUsage($contractConstants->getYearlyUsage());
        $contractRequestDto->setProducts($contractConstants->getProducts());
        $contractRequestDto->setBonuses($contractConstants->getBonuses());

        return $contractRequestDto;
    }
}