<?php

class Team
{
    private $employers = array();
    private $teamName;
    private $teamSalary;

    public function __construct(string $teamName, Employee ...$employers)
    {
        $this->teamName = $teamName;
        foreach ($employers as $employee) {
            array_push($this->employers, $employee);
        }
    }

    public function getTeamSalary()
    {
        $this->teamSalary = 0;
        foreach ($this->employers as $employee) {
            $this->teamSalary += $employee->getEmployeeSalary();
        }
        return $this->teamSalary;
    }

}
