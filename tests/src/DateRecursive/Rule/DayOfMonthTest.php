<?php

namespace Ferrari\DateRecursive\Rule;

use \DateTime;

class DayOfMonthTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @testdox Return true if the day of month match
     */
    public function testDateOfMonthReturnsTrueWhenTheDateMatches()
    {

        $obj = new DayOfMonth(15);
        $this->assertTrue($obj->test(new DateTime('2014-08-15')));        
    }

    /**
     * @testdox Return false if the day of month does not match
     */
    public function testDateOfMonthReturnsFalseWhenTheDateDoesNotMatches()
    {
        $obj = new DayOfMonth(15);
        $this->assertFalse($obj->test(new DateTime('2014-08-14')));        
    }
}
