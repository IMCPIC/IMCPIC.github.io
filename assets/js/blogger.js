$(document).ready(getposts);

function getposts(){
	$('#key').paginate({itemsPerPage: 5});
    $.getJSON('entries.json', function(data) {
		$.each(data.entries, function(key, val) {
                var output="<div id='key' class='col-sm-12 blogpost'>";
				    output+="<small><p class='muted' style='float:right;'>" + val.date +"</p></small>";
				    output+="<h5>" + val.title +"</h5>";
				    output+="<p>" + val.text +"</p>";
				    output+="</hr>";
					output+="</div>";

				$("#blog").append(output);
      	});
    });
}