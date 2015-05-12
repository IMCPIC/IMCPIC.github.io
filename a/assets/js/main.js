// Get stories from JSON
//
$(document).ready(getstories);
function getstories(){
	
    $.getJSON('stories.json', function(data) {
		$.each(data.list, function(key, val) {
        var output="<div id='stories' class='col-sm-12 blogpost'>";
		    output+="<h3>" + val.resolved_title +"</h3>";
		    output+="<h4>" + val.resolved_url +"</h4>";
		    output+="<p>" + val.excerpt +"</p>";
		    output+="</hr>";
			output+="</div>";

			$("#news").append(output);
      	});
    });
}