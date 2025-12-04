<?php

function getWeekday(int $num) : string 
{
return match($num) 
{
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    6 => "Saturday",
    7 => "Sunday",
  };
}

function howDoesItFeel(int $temp) : string 
{
  return match(true) 
  {
    $temp < 0 => "Sehr kalt",
    $temp >= 0 AND $temp < 15 => "Kalt",
    $temp >= 15 AND $temp < 25 => "Angenehm",
    $temp >= 25 AND $temp < 35 => "Warm",
    $temp >= 35 => "Sehr warm",
  };
}

function isPosNegOrZero(int $num) : string 
{
  return match(true) 
  {
    $num < 0 => "$num ist kleiner als 0",
    $num == 0 => "$num ist 0",
    $num > 0 => "$num ist größer als 0",
    };
}

// echo getWeekday(5);
// echo howDoesItFeel(25);
echo isPosNegOrZero(-200);
