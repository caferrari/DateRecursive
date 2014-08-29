<?php

namespace Ferrari\DateRecursive;

use \DateTime;

class DateRecursiveTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @testdox Returns a list of dates that matches the criteria and the limit
     */
    public function testDateRecursiveReturnDates()
    {

        $dates = (new DateRecursive)
        ->limit(10)
        ->generate(new DateTime('2014-01-01'));

        $this->assertEquals(10, count($dates));
    }

    /**
     * @testdox Returns a list of dates that matches the criteria and the limit
     */
    public function testDateRecursiveReturnDatesBasedOnRules()
    {

        $dates = (new DateRecursive)->match(
            DateRecursive::dayOfMonth(15)
        )
        ->limit(2)
        ->generate(new DateTime('2014-01-01'));

        $this->assertEquals(2, count($dates));
        $this->assertEquals(new DateTime('2014-01-15'), $dates[0]);
        $this->assertEquals(new DateTime('2014-02-15'), $dates[1]);
    }

}
