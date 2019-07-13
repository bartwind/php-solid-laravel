<?php

namespace App\Employee;


class Manager extends Employee
{
    public function calculatePerHourRate(int $rank) : void
    {
        $baseRate = 25.50;
        $this->setSalary($baseRate + ($rank * 2)) ;
    }

    public function generatePerformanceReview(): string
    {
        return 'Generating Performance review';
    }

}
