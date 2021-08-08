/*
$(window).on('popstate', function(event) {
 alert("no regreses...");
  return false;
});
*/
function nobackbutton()
{
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button"
   window.onhashchange=function(){window.location.hash="no-back-button";}   
}




