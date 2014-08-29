<?php

namespace Ferrari\DateRecursive\Rule;

class DayOfWeek implements Rule
{

    private $day;

    public function __construct($day)
    {
        $this->day = $day;
    }

    public function test($date) 
    {
        return $date->format('w') == $this->day;
    }

}