<?php
// enable CORS
 header("Access-Control-Allow-Origin: *");
// define the question
$question = $_GET["query"];
// echo $question;

// load and decode JSON
$joke_list = json_decode(file_get_contents("joke_list.json"),true);
// iterate array to find matching question
foreach ($joke_list as $qa_set) {
  $qa_set_json = json_encode($qa_set); // convert back to JSON
  $obj = json_decode($qa_set_json);
  $q = $obj->{'Question'};
  $a = $obj->{'Answer'};
  if (strtolower($question) == strtolower($q)){
    echo $a;
  }
}
