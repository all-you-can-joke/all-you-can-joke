<?php

// define the question
$question = $_GET["query"];
// load file
$joke_list = file_get_contents("joke_list.json");

// decode JSON into an array
$array = json_decode($string, true);

// pick a random index
$one_item = $array[rand(0, count($array) - 1)];

// data process
$one_item_json = json_encode($one_item); // convert back to JSON
$obj = json_decode($one_item_json);
$quote = $obj->{'Quote'}; // quote in plain text
$author = $obj->{'Author'}; // author in plain text

// output options
if ($_GET["output"] === "json") {
  echo $one_item_json;
}
else if ($_GET["output"] === "quote-only") {
  echo $quote;
}
else if ($_GET["output"] === "double-hyphen") {
  echo "$quote —— $author";
}
else if ($_GET["output"] === "no-hyphen") {
  echo "$quote $author";
}
else {
  echo "$quote — $author";
}
?>
