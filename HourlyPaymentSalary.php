<?php

class HourlyPaymentSalary implements Salary
{
    public $salaryPerHour;
    public $hourCount;

    public function __construct(int $salaryPerHour, int $hourCount)
    {
        $this->salaryPerHour = $salaryPerHour;
        $this->hourCount = $hourCount;
    }

    public function getSalary()
    {
        return $this->salaryPerHour * $this->hourCount;
    }

}
