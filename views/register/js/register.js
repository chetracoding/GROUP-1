$(document).ready(function() {
    $("#form-container").submit(function(event) {
        event.preventDefault();
        let firstName = $("#first-name").val();
        let lastName = $("#last-name").val();
        let email = $("#email").val();
        let password = $("#password").val();
        let passwordConfirm = $("#password-confirm").val();
        let terms = $("#terms").val();
        $("#form-container").load("controllers/register/register.controller.php", {
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password,
            passwordConfirm: passwordConfirm,
            terms: terms
        });
    });
});