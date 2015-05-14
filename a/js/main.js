$(document).ready(getstories);
function getstories(){

    /*$.post("https://getpocket.com/v3/get",
        {"consumer_key":"41123-fe4863e76b86cdd3c0382833",
            "access_token":"1f8a751f-c3e9-a29d-e897-d1756d",
            "detailType":"complete"},
        function(data,status){
            console.log(JSON.stringify(data));
        });*/
    
    $.getJSON('stories.json', function(data) {
        $.each(data.list, function(key, val) {
        var output="<div id='stories' class='col-md-4 col-sm-4 mainnews-item'>";
            output+="<a href='"+val.resolved_url+"' class='mainnews-link' data-toggle='modal' target='_blank'>";            
            output+="<div class='mainnews-hover'>";
            output+="<div class='mainnews-hover-content'>";
            output+="<p class='excerpt'>"+ val.excerpt +"</p>";
            output+="<i class='fa fa-ellipsis-h fa-2x'></i>"
            output+="</div>";
            output+="</div>";
            if(val.has_image>0){
                output+="<img src='"+val.image.src+"' class='img-responsive' alt='img/PLogoSoft.png' style='object-fit:cover; border:12px solid rgba(0, 0, 0, .9);'>";
            }
            else{
                output+="<img src='img/PLogoSoft.png' class='img-responsive' alt=''>";
            }
            output+="</a>";
            output+="<div class='mainnews-caption'>";
            if(val.given_title != ""){
                output+="<h4 class='title'>"+val.given_title+"</h4>";
            }
            else{
            output+="<h4 class='title'>"+val.resolved_title+"</h4>";
            }
            output+="</div>";
            output+="</div>"
            $("#news").append(output);
        });
        var maxlength = 180;
        $('p.excerpt').text(function (_, text) {
        return $.trim(text).substring(0, maxlength)+"...";
        });
        var maxlength2 = 70;
        $('h4.title').text(function (_, text) {
        return $.trim(text).substring(0, maxlength2);
        });
    });
}





$(document).ready(function(){
    $('.arrow').hover(
        function() {
            $('.arrow').addClass('pulse-grow');
        },
        function() {
            $('.arrow').removeClass('pulse-grow');
    });
});

// jQuery for page scrolling feature

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();

    });

});

// Animation

animationHover('.img-logo-1','pulse');

function animationHover(element, animation){
  element = $(element);
  element.hover(
    function() {
      element.addClass('animated ' + animation);
    },
    function(){
      //wait for animation to finish before removing classes
      window.setTimeout( function(){
        element.removeClass('animated ' + animation);
      }, 200);
    }
  );
};


// Mobile NavBar Slide

$(document).ready(function () {
    slider();
});

$(window).scroll(function () {
    slider();
});

function slider() {
    if (document.body.scrollTop > 300)
        $('#slider').stop().animate({"margin-top": '0', "opacity": '1'}, 200);
    else
        $('#slider').stop().animate({"margin-top": '-40', "opacity": '.2'}, 200);
}


// Highlight the top nav as scrolling occurs

$('body').scrollspy({
    target: '.navbar-fixed-top'
})
