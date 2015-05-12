// Get stories from JSON
//
$(document).ready(getstories);
function getstories(){
	
    $.getJSON('stories.json', function(data) {
		$.each(data.list, function(key, val) {
        var output="<div id='stories' class='col-sm-12 blogpost'>";
		    output+="<a href='val.resolved_url'>"+"<h3>"+val.resolved_title+"</h3>"+"</a>";
		    output+="<p>" + val.excerpt +"</p>";
		    output+="</hr>";
			output+="</div>";

			$("#news").append(output);
      	});
    });
}