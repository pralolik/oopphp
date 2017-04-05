<?php

abstract class Employee
{
    private $employeeName;
    private $employeeSalary;

    public function __construct(string $employeeName, Salary $employeeSalary)
    {
        $this->employeeName = $employeeName;
        $this->employeeSalary = $employeeSalary;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function getEmployeeSalary()
    {
        return $this->employeeSalary->getSalary();
    }


}
