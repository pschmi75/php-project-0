<?php

enum Side {
  case left;
  case both;
  case right;
}

function concatWithPeriod(array $strings) : string {
  $result = "";
  foreach($strings as $str) {
    $result = $result . $str;
  }
  return $result;
}

function concatWithImplode(string $connector, array $strings) : string {
  return implode($connector, $strings);
}

function splitBySubstring(string $sub, string $str) : array {
  return explode($sub, $str);
}

function charAt(string $str, int $index) : string {
  return $str[$index];
}

function compare(string $str1, string $str2) : int {
  return strcmp($str1, $str2);
}

function compareWithoutCase(string $str1, string $str2) : int {
  return strcasecmp($str1, $str2);
}

function sortStrings(array $strings) {
  return usort($strings, function(string $str1, string $str2) : array {
    return strtolower($str1) <=> strtolower($str2);
  });
}

function length(string $str) : int {
  return strlen($str);
}

function findFirstOccurence(string $str, string $char) : int {
  return strpos($str, $char);
}

function findLastOccurence(string $str, string $char) : int {
  return strrpos($str, $char);
}

function replace(string $find, string $replace, string $str) : string {
  return str_replace($find, $replace, $str);
}

function getSubstring(string $str, int $start, int $length) : string {
  return substr($str, $start, $length);
}

function makeLowercase(string $str) : string {
  return strtolower($str);
}

function makeUppercase(string $str) : string {
  return strtoupper($str);
}

function trimWhitespace(string $str, Side $side) : string {
  switch($side) {
    case Side::left: return ltrim($str);
    case Side::both; return trim($str);
    case Side::right; return rtrim($str);
  }

  function countWords(string $str) : int {
    return str_word_count($str);
  }

  function countWords(string $str, string $ignoreChars) : int {
    return str_word_count($str, $ignoreChars);
  }

  function countSubstrings(string $str, string $sub) {
    return substr_count($str, $sub);
  }
}