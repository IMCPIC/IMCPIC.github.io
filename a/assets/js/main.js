// Get stories from JSON
//
$(document).ready(getstories);
function getstories(){
	
    $.getJSON('stories.json', function(data) {
		$.each(data.list, function(key, val) {
        var output="<div id='stories' class='col-sm-12 blogpost'>";
		    output+="<a href="+val.resolved_url+"target='_blank'>"+"<h4>"+val.resolved_title+"</h4>"+"</a>";
		    output+="<p>" + val.excerpt +"</p>";
		    output+="</hr>";
			output+="</div>";

			$("#news").append(output);
      	});
    });
}