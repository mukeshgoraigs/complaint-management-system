$(function() 
{
 $("ul li:first").show();
  var ck_username = /^[A-Za-z0-9_]{3,20}$/;
  var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
  var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;


 $('#email').keyup(function()
 {
  var email=$(this).val();
  if (!ck_email.test(email)) 
  {
    $(this).next().show().html("Enter valid email");
  }
  else
  {
    $(this).next().hide();
    $("li").next("li.username").slideDown({duration: 'slow',easing: 'easeOutElastic'});
  }
 });
 
 $('#username').keyup(function()
 {
  var username=$(this).val();
  if (!ck_username.test(username)) 
  {
    $(this).next().show().html("Min 3 charts no Space");
  }
  else
  {
    $(this).next().hide();
    $("li").next("li.password").slideDown({duration: 'slow',easing: 'easeOutElastic'});
  }
 });

 $('#password').keyup(function()
 {
  var password=$(this).val();
  if (!ck_password.test(password)) 
  {
    $(this).next().show().html("Min 6 Charts");
  }
  else
  {
    $(this).next().hide();
    $("li").next("li.submit").slideDown({duration: 'slow',easing: 'easeOutElastic'});
  }
 });


 $('#submit').click(function()
 {
   var email=$("#email").val();
   var username=$("#username").val();
   var password=$("#password").val();
   if(ck_email.test(email) && ck_username.test(username) && ck_password.test(password) )
   {
     $("#form").show().html("<h1><center>Thank you!</center></h1>");
   }
   else
   {}
   return false;
 });
})