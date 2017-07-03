<?php

class LeapYearGenerator
{
    function checkLeapYear($input_year)
    {
        if (($input_year % 4) != 0) {
            return false;
        } else {
            return true;
        }
    }
}

?>
