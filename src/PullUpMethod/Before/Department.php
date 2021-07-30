<?php

namespace Refactor\PullUpMethod\Before;

class Department extends Party
{
    public function totalAnnualCost(): int
    {
        return $this->monthlyCost() * 12;
    }

    private function monthlyCost()
    {
        // blah
    }
}
