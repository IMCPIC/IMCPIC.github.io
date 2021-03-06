$(document).ready(getposts);
function getposts(){
	
    $.getJSON('entries.json', function(data) {
		$.each(data.entries.reverse(), function(key, val) {
        var output="<div id='key' class='col-sm-12 blogpost'>";
		    output+="<small><p class='muted' style='float:right;'>" + val.date +"</p></small>";
		    output+="<h4>" + val.title +"</h4>";
		    output+="<p>" + val.text +"</p>";
		    output+="</hr>";
			  output+="</div>";

				$("#blog").append(output);
				$('#blog').paginate({itemsPerPage: 2});
      	});
    });
}



$(document).ready(function() {
            
    $("search2").focus();
    $("#search2").keydown(function(){
        $("#search1").focus();
    });
    

});



//
$('#search1').keyup(function () { 
    var searchField = $('#search1').val();
    if (searchField.length){        
    var myExp = new RegExp(searchField, "i");
    var found = 0;
 
    $.getJSON('entries.json', function (data) {
    var output = '<ul class="searchresults" id="searchresults">';
 	   
    $.each(data.entries.reverse(), function(key, val) {
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

      output += '<div id="searchresults-pagination" class="update" style="float:right;">';
	    output += '<a id="searchresults-previous" href="#"><b><i class="fa fa-caret-left"></i> Newer</b></a>';
	    output += '<b> | </b>';
	    output += '<a id="searchresults-next" href="#"><b>Older </b><i class="fa fa-caret-right"></i></a>';
      output += '</div>';
      output += '<div class="col-sm-12" style="float:right;">';
      output += '<p></hr></p>';
      output += '</div>'

      if (found==1) {
      $('#update').removeClass('update-hidden');
      $('#searchhide').addClass('searchhide-hidden');
      $('#searchhide2').addClass('searchhide-hidden');
      $('#update').html(output);
      $('#searchresults').paginate({itemsPerPage: 4});
      $('#search2').addClass('searchhide-hidden');
      }
      else {
          $('#update').addClass('update-hidden');
          $('#searchhide').removeClass('searchhide-hidden');
          $('#searchhide2').removeClass('searchhide-hidden');
          $('#search2').removeClass('searchhide-hidden');
      }
 	 
});
    } else {
      $('#update').addClass('update-hidden');
      $('#searchhide').removeClass('searchhide-hidden');
      $('#searchhide2').removeClass('searchhide-hidden');
      $('#search2').removeClass('searchhide-hidden');
    }
});