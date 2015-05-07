$(document).ready(getposts);
function getposts(){
	
    $.getJSON('entries.json', function(data) {
		$.each(data.entries.reverse(), function(key, val) {
                var output="<div id='key' class='col-sm-12 blogpost'>";
				    output+="<small><p class='muted' style='float:right;'>" + val.date +"</p></small>";
				    output+="<h5>" + val.title +"</h5>";
				    output+="<p>" + val.text +"</p>";
				    output+="</hr>";
					output+="</div>";

				$("#blog").append(output);
				$('#blog').paginate({itemsPerPage: 2});
      	});
    });
}


$(window).load(function(){
        $('#search2').keyup(function(){
            var searchField = $('#search2').val();
            var regex = new RegExp(searchField, "i");
            var output = '<div class="row">';
            var count = 1;
            $.getJSON('entries.json', function(data) {
              $.each(data, function(key, val){
                if ((val.title.search(regex) != -1) || (val.text.search(regex) != -1)) {
                  output += '<div class="col-md-6 well">';
                  output += '<div class="col-md-7">';
                  output += '<h5>' + val.title + '</h5>';
                  output += '<p>' + val.text + '</p>'
                  output += '</div>';
                  output += '</div>';
                  if(count%2 == 0){
                    output += '</div><div class="row">'
                  }
                  count++;
                }
              });
              output += '</div>';
              $('#results').html(output);
            }); 
        });
      });