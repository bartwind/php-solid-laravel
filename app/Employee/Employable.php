<?php

namespace App\Employee;


interface Employable
{
    public function getSalary();

    public function setSalary($salary): void;

    public function getName();

    public function setName($name): void;

    public function calculatePerHourRate(int $rank): void;

}
