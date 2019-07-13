<?php

namespace App\Employee;


class Employee
{
    protected $name;

    protected $salary;

    protected $manager;
    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function calculatePerHourRate(int $rank): void
    {
        $baseRate = 12.50;
        $this->setSalary($baseRate + ($rank * 2)) ;
    }


}
