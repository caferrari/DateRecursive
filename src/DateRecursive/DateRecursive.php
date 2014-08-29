<?php

namespace Ferrari\DateRecursive;

use \ReflectionClass;
use \DateTime;
use \DateInterval;

class DateRecursive 
{

    protected $step = 'P1D';
    protected $rules = [];
    protected $limit = 1;

    public function __construct($step = 'P1D')
    {
        $this->rules = [];
        $this->step = $step;
    }

    public static function __callStatic($method, $args = array())
    {

        $fqcn = 'Ferrari\\DateRecursive\\Rule\\' . ucfirst($method);
        $class = new ReflectionClass($fqcn);
        return $class->newInstanceArgs($args);
    }

    public function match()
    {
        foreach (func_get_args() as $matcher) {
            $this->rules[] = $matcher;
        }
        return $this;
    }

    public function generate(DateTime $startDate) 
    {

        $result = [];
        $matches = 0;

        foreach ($this->getNextStep($startDate) as $date) {
            $valid = array_reduce($this->rules, function ($current, $rule) use ($date) {
                return $current && $rule->test($date);
            }, true);

            if ($valid) {
                $result[] = clone $date;
                $matches++;
            }

            if ($matches == $this->limit) {
                return $result;
            }
        }
    }

    public function getNextStep($date)
    {
        //yield $date;
        $interval = new DateInterval($this->step);
        while (true) {
            yield $date->add($interval);
        }
    }

    public function limit($limit) 
    {
        $this->limit = $limit;
        return $this;
    }

}