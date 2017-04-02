<?php

require 'Employee.php';
require 'Salary.php';
require 'Developer.php';
require 'Designer.php';
require 'FixedPaymentSalary.php';
require 'HourlyPaymentSalary.php';
require 'HTMLCoder.php';
require 'Team.php';


$designer = new Designer('Alesya Petrova', new FixedPaymentSalary(3000));
$seniorDeveloper = new Developer('Petya Sinica', new HourlyPaymentSalary(60,10));
$firstMiddleDeveloper = new Developer('Leha Grechka', new FixedPaymentSalary(1000));
$secondMiddleDeveloper = new Developer('Nastya Maluk', new FixedPaymentSalary(1000));
$htmlCoder = new HTMLCoder('Sanya Gus', new HourlyPaymentSalary(120,5));
$team = new Team('X', $designer, $seniorDeveloper, $firstMiddleDeveloper, $secondMiddleDeveloper, $htmlCoder);
echo $team->getTeamSalary();
