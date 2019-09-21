<?php

// define the question
$question = $_GET["query"];
// load and decode JSON
$joke_list = json_decode(file_get_contents("joke_list.json"));
// iterate array to find matching question

echo urlencode("dadj adj");
echo $joke_list;

// foreach ($joke_list as $qa) {
//   foreach ($qa as $key => $value) {
//     if ($key == "Question") {
//       foreach ($value as $q) {
//         echo $qa[1];
//         // echo urlencode($qa[1][0])."\n";
//         if ($q == urlencode($question)) {
//           echo $qa[1][rand(0, count($qa[1]) - 1)];
//         }
//       }
//     }
//   }
// }
?>
