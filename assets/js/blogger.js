$(document).ready(getposts);
function getposts(){
    $.getJSON('entries.json', function(data) {
		$.each(data.entries, function(key, val) {
                var output="<ul id='key'>";
				    output+="<p class='muted' style='float:right;'>" + val.date +"</p>";
				    output+="<h5>" + val.title +"</h5>";
				    output+="<p>" + val.text +"</p>";
					output+="</ul>";

				$("#key").html(output);
      	});
    });
}