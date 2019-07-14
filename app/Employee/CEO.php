<?php

namespace App\Employee;

class CEO extends Employee implements Employable
{
    public function setManager(Employee $manager): void
    {
        throw new \Exception('CEO doent have a manager');
    }

    public function generatePerformanceReview(): string
    {
        return 'Generating Performance review from CEO';
    }

    public function fireEmployee(Employee $employee): string
    {
        return 'Firing '. $employee->getName();
    }

}
