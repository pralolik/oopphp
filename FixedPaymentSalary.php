<?php

class FixedPaymentSalary implements Salary
{
    private $fixedSalary;

    public function __construct($fixedSalary)
    {
        $this->fixedSalary = $fixedSalary;
    }

    public function getSalary()
    {
       return $this->fixedSalary;
    }
}
