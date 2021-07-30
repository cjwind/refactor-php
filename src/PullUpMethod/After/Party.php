<?php

namespace Refactor\PullUpMethod\After;

abstract class Party
{

    public function annualCost(): int
    {
        return $this->monthlyCost() * 12;
    }

    abstract protected function monthlyCost();
}
