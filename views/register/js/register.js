$(document).ready(function() {

    $('#submit').click(function(e){
      e.preventDefault();
      var firstName = $("#first-name").val();
      var lastName = $("#last-name").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var passwordConfirm = $("#password-confirm").val();
      var terms = $("#terms").val();

    $.ajax({
        type: "POST",
        url: "/register",
        dataType: "json",
        data: {firstName:firstName, lastName:lastName ,email:email, password:password, passwordConfirm:passwordConfirm, terms:terms},
        success : function(data){
              location.href = '/';
              if (data.code == "200"){

              } else {
                $("#error").html("heeello");
                $("#error-password").html(data.errors["password"]);
              }
          }
      });
    });
});