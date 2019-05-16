/**
* contact.js
* koiwacrc.net
* vers:20190222
* shinjou inc.
**/
$(function(){
  /* ------------------------------form */
  $("#name").focus(function(){
    $("#name").removeClass("warnInput");
    $("#name").addClass("focusInput");
  }).blur(function(){
    $("#name").removeClass("focusInput");
  });
  $("#mail").focus(function(){
    $("#mail").removeClass("warnInput")
    $("#mail").addClass("focusInput");
  }).blur(function(){
    $("#mail").removeClass("focusInput");
  });
  $("#message").focus(function(){
    $("#message").removeClass("warnInput");
    $("#message").addClass("focusInput");
  }).blur(function(){
    $("#message").removeClass("focusInput");
  });
 
  /* -------------------------------submit */
  $("#send").click(function(){
    var flag = 0;
    var fname = $("#name").val();
    var fmail = $("#mail").val();
    var fmessage = $("#message").val();
    if (fname.match(/^[ \r\n\t]*$/)||fname == "") {
      flag = 1;
      $("#name").addClass("warnInput");
    } else {
      if($("#name").hasClass("warnInput")) {
        $("#name").removeClass("warnInput");
      }
    }
    if (! fmail.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
      flag = 2;
      $("#mail").addClass("warnInput");
    } else {
      if($("#mail").hasClass("warnInput")) {
        $("#mail").removeClass("warnInput");
      }
    }
    if (fmessage.match(/^[ 　\r\n\t]*$/)) {
      flag = 3;
      $("#message").addClass("warnInput");
    } else {
      if($("#message").hasClass("warnInput")) {
        $("#message").removeClass("warnInput");
      }
    }
    if (flag) { return false; }
    else {   /* ----------------------------- ajax */
      $(".article1").hide();
      var postData = {};
      postData['kind'] = 'ホームページより問い合わせ'
      postData['name'] = $("#name").val();
      postData['mail'] = $("#mail").val();
      postData['message'] = $("#message").val();
      $.ajax ({
        url:"../lib_sendmail.php",
        type:"POST",
        data:postData,
        beforeSend:function(xhr,setting) {
          $("#send").attr("disable",false);
        },
        complete:function(xhr,textStatus) {
          $("#send").attr("disable",false);
        },
        success:function(xhr,textStatus,error) {
          $(".thanx").show();
        }
      });
    }
  });
});