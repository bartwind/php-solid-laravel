<?php

namespace Tests\Feature;

use App\Employee\CEO;
use App\Employee\Employee;
use App\Employee\Manager;
use App\Employee\Staff;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeTest extends TestCase
{
    /** @test */
    public function employee_can_be_replaced_with_manager(): void
    {
        $devManager = new Manager();
        $devManager->setName('Dave Childs');
        $devManager->calculatePerHourRate(10);
        $this->assertSame(45.5,$devManager->getSalary());

        $employee = new CEO();
        $employee->setName('Daniel');
        $employee->calculatePerHourRate(2);
        $this->assertSame(16.5,$employee->getSalary());

    }

}
