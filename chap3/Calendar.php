<?php

class Calendar
{

    public $name;

    const MONTHS_IN_YEAR = 12;

    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }

}

$calendar = new Calendar();
$calendar->name = 'Year Planner';

print $calendar->name . PHP_EOL;
print $calendar::MONTHS_IN_YEAR . PHP_EOL;
print $calendar->getMonthsInYear() . PHP_EOL;