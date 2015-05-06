$(document).ready(getposts);
function getposts(){
    $.getJSON('entries.json', function(data) {
		$.each(data.posts, function(key, val) {
                var output="<ul id='"+key+"'>";
				    output+="<li>" + val.date +"</li>";
				    output+="<li>" + val.title +"</li>";
				    output+="<li>" + val.text +"</li>";

				output+="</ul>";
				$("#blog").html(output);
      	});
    });
}