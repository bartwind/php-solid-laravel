<?php

namespace App\Employee;


class Manager extends Employee implements Manageable
{
    protected $manager;

    public function calculatePerHourRate(int $rank) : void
    {
        $baseRate = 25.50;
        $this->setSalary($baseRate + ($rank * 2)) ;
    }

    public function generatePerformanceReview(): string
    {
        return 'Generating Performance review';
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param mixed $manager
     */
    public function setManager(Employee $manager): void
    {
        $this->manager = $manager;
    }

}
