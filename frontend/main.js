$("#joke_form").submit(function(event){
	event.preventDefault(); //prevent default action
	var post_url = "https://all-you-can-joke-sbuhacks.appspot.com/index.php"; //get form action url
	var request_method = "GET"; //get form GET/POST method
  var search_query = $("#query").val();
  $.get(post_url + "?query=" + search_query, function(data, status){
    console.log("Status: " + status);
    $("#server-results").html(data);
  });
  $("#result-bar").css("opacity", 1);
});
