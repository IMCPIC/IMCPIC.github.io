$(document).ready(getposts);
function getposts(){
    $.getJSON('entries.json', function(data) {
		$.each(data.posts, function(key, val) {
                var output="<ul>";
				/*for (var i in data.entries) {
				    output+="<li>" + data.entries[i].date +"</li>";
				    output+="<li>" + data.entries[i].title +"</li>";
				    output+="<li>" + data.entries[i].text +"</li>";
				}*/

				output+="</ul>";
				$("#blog").html(output);
      	});
    });
}