<?php

namespace App\Employee;


interface Manageable
{
    public function setManager(Employee $manager): void;

    public function getManager();

}
