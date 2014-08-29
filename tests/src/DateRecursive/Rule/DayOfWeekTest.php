<?php

namespace Ferrari\DateRecursive\Rule;

use \DateTime;

class DayOfWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @testdox Return true if the day of month match
     */
    public function testDateOfWeekReturnsTrueWhenTheDateMatches()
    {

        $obj = new DayOfWeek(5);
        $this->assertTrue($obj->test(new DateTime('2014-08-29')));
    }

    /**
     * @testdox Return false if the day of month does not match
     */
    public function testDateOfWeekReturnsFalseWhenTheDateDoesNotMatches()
    {
        $obj = new DayOfWeek(5);
        $this->assertFalse($obj->test(new DateTime('2014-08-30')));
    }
}
