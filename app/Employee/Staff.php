<?php

namespace App\Employee;


class Staff extends Employee implements Manageable
{
    protected $manager;
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
