<?php

class FixedPaymentSalary implements Salary
{
    private $fixedSalary;

    public function __construct(int $fixedSalary)
    {
        $this->fixedSalary = $fixedSalary;
    }

    public function getSalary()
    {
        return $this->fixedSalary;
    }
}
