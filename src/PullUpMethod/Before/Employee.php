<?php

namespace Refactor\PullUpMethod\Before;

class Employee extends Party
{
    public function annualCost(): int
    {
        return $this->monthlyCost() * 12;
    }

    private function monthlyCost()
    {
        // blah
    }
}
