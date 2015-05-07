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
//
$('#search2').keyup(function () { 
    var searchField = $('#search2').val();
    if (searchField.length){        
    var myExp = new RegExp(searchField, "i");
    var found = 0;
 
   $.getJSON('entries.json', function (data) {
   var output = '<ul class="searchresults" id="searchresults">';
 	   output += '<div id="searchresults-pagination" style="float:right;">';
	  output += '<a id="searchresults-previous" href="#">&laquo; Newer</a>';
	  output += ' | ';
	  output += '<a id="searchresults-next" href="#">Older &raquo;</a>';
      output += '</div>';
      output += '<br>';
   $.each(data.entries, function(key, val) {
      if (val.text.search(myExp) !== -1 || val.title.search(myExp) !== -1) {
      console.log(val);
      found = 1;
      output += '<br>';
      output += '<li>';
      output += '<h5>' + val.date + '</h5>';
      output += '<h4>' + val.title + '</h4>';
      output += '<p>' + val.text + '</p>';
      output += '</li>';
      }
   });
      output += '</ul>';

      

      if (found==1) {
      $('#update').removeClass('update-hidden');
      $('#update').html(output);
      $('#searchresults').paginate({itemsPerPage: 4});
      }
      else {
          $('#update').addClass('update-hidden');
      }
 	 
});
    } else {
      $('#update').addClass('update-hidden');
    }
});
