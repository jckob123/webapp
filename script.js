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

  $("#pass1,#pass2").on("keyup",function(){
    if($('#pass2').val() == $('#pass1').val())
    {
      $('#pass1').addClass("correct");
      $('#pass2').addClass("correct");
    }
    else if(($('#pass2').val() && $('#pass1').val()) == "")
    {
      $('#pass1').removeClass("correct");
      $('#pass2').removeClass("correct");    
    }
    else
    {
      $('#pass1').removeClass("correct");
      $('#pass2').removeClass("correct");    
    }
  }
  );

  $("#usernamefield").on("keyup",function ()
  {
    if($("#usernamefield").val().length > 1)
    {
      $('#usernamefield').addClass("correct");
    }
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
