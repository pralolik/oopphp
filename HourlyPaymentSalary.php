<?php

class HourlyPaymentSalary implements Salary
{
    public $salaryPerHour;
    public $hourCount;

    public function __construct($salaryPerHour1, $hourCount1)
    {
        $this->salaryPerHour = $salaryPerHour1;
        $this->hourCount = $hourCount1;
    }

    public function getSalary()
    {
        return $this->salaryPerHour * $this->hourCount;
    }

}
