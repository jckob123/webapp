/*
This is custom script meant for UI

*/

$(document).ready(function() {
  //reads the cookie when page loads and adds class
  if(Cookies.get('sidebar') == 'on')
  {
    $('#sidebar').addClass('active');
  }
  //else removes it
  else if(Cookies.get('sidebar') == 'off')
  {
    $('#sidebar').removeClass('active');
  }
  //function to call on button click to animate sidebar
  $('#sidebarCollapse').on('click',function(){
    $('#sidebar').toggleClass('active');
  });



});

//function to call on button click, sets the cookie.
function cookieSet() {
  if(Cookies.get('sidebar') == 'off')
  {
    document.cookie = "sidebar=on";
  }

  else
  {
    document.cookie= "sidebar=off";
  }
}
