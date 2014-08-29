<?php

namespace Ferrari\DateRecursive\Rule;

class DayOfMonth implements Rule
{

    private $day;

    public function __construct($day)
    {
        $this->day = $day;
    }

    public function test($date) 
    {
        return $date->format('d') == $this->day;
    }

}