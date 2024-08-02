/* 
    -IanPirro
    --Simple login screen 
    Inspired by: http://dribbble.com/shots/853555-Clean-Login-UI?list=following
  
*/

// vertical align box   

(function(elem){ 
    elem.css("margin-top", Math.floor( ( $(window).height() / 2 ) - ( elem.height() / 2 ) ) );
}($("#loginWrap")));

$(window).resize(function(){
    $("#loginWrap").css("margin-top", Math.floor( ( $(window).height() / 2 ) - ( $("#loginWrap").height() / 2 ) ) );
  
});
