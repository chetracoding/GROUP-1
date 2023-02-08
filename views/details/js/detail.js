// VARIABLES
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#expires-date').attr('min',today);

// FUNCTIONS
function onPay(event) 
{
    let isCorrect = true;

    if ($("#number-card").val().length != 16) {
        isCorrect = false;
        $("#error-number").text("Please input only 16 digits");
    }

    if ($("#expires-date").val() == "") {
        isCorrect = false;
        $("#error-date").text("Please input card expiration date");
    } else {
        $("#error-date").text("");
    }
}

function  validateCardNumber(element) 
{
    if (element.value.length != 16) {
        $("#error-number").text("Please input only 16 digits");
    } else {
        $("#error-number").text("");
    }
}

function checkNumberTicket(element) 
{
    console.log();
    element.value = Math.abs(element.value);
    if (element.value < 1 || element.value > 10) {
        $("#error-number-ticket").text("Please input between 1 to 10 tickets");
    } else {
        $("#error-number-ticket").text("");
    }
}
function showText(element) 
{
    for (let option of element.children) {
        if (option.value == element.value) {
            $("#get-date").text(option.textContent.substr(6, 11));
            $("#get-time").text(option.textContent.substr(25));
        }
    }
}

function showTicket(element) 
{
    if (element.value > 0 && element.value < 11) {
        $("#your-ticket").text(element.value);
    } else {
        $("#your-ticket").text(0);
    }
}


// ADD EVENT LISTENERS
$("#number-card").on( "keyup", function() {
    validateCardNumber(this);
});

$("#btn-card").on( "click", function(e) {
    onPay(e);
});

$("#number-ticket").on( "keyup", function() {
    checkNumberTicket(this);
});

$("#date").on( "change", function() {
    showText(this);
});

$("#number-ticket").on( "keyup", function() {
    showTicket(this);
});





