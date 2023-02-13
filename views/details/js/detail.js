// VARIABLES
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#card-expiration').attr('min',today);
let userTickets = 0;

// FUNCTIONS
function onPay(event) 
{
    if ($("#number-card").val().length != 16) {
        $("#error-number").text("Please input only 16 digits");
    }

    if (!$('#card-expiration').val()) {
        $("#error-card-expiration").text("Please input card expiration date");
    } else {
        $("#error-card-expiration").text("");
    }

    if ($("#number-card").val().length == 16 && $('#card-expiration').val()) {
        $("#btn-pay").prop('type','submit');
    } else {
        $("#btn-pay").prop('type','button');
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

function showDetails(element) 
{
    $("#error-date").text("");
    for (let option of element.children) {
        if (option.value == element.value) {
            userTickets = 0;
            $("#get-date").text(option.textContent.substr(6, 11));
            $("#get-time").text(option.textContent.substr(25));
            $("#your-ticket").text(0);
            $("#number-ticket").val(0);
            $("#ticket-canbuy").text($("#total-tickets").text() - option.nextElementSibling.textContent);
          
        }
    }
}

function sum(number) {
    $("#error-number-ticket").text("");
    if (userTickets < 10 && userTickets < $("#ticket-canbuy").text()) {
        userTickets = number;
        showYourTicket(userTickets);
    } 

    if(userTickets != 0 && userTickets == $("#ticket-canbuy").text()) {
        $("#error-number-ticket").text("Limit maximum " + $("#ticket-canbuy").text() + " tickets");
    }

    if (userTickets >= 10){
        $("#error-number-ticket").text("Limit maximum 10 tickets for one payment");
    }
}

function minus(number) {
    $("#error-number-ticket").text("");
    if (userTickets > 1) {
        userTickets = number;
        showYourTicket(userTickets);
    }
}

function showYourTicket(number) {
    $("#your-ticket").text(number);
    $("#number-ticket").val(number);
    $("#total-price").text(number * $("#price")[0].textContent.substr(1));
}

function onBooking() {
    if (!$('#date').val()) {
        $("#error-date").text("Please select a date");
    }
    if($('#number-ticket').val() == 0){
        $("#error-number-ticket").text("Please add number tickets");
    }
    if ($('#date').val() && $('#number-ticket').val() != 0) {
        $("#credit-card").css("display", "flex");
    }
    if ($('#ticket-canbuy').text() == 0) {
        $("#error-number-ticket").text("Don't have tickets left!");        
    }

}

// ADD EVENT LISTENERS
$("#number-card").on( "keyup", function() {
    validateCardNumber(this);
});

$("#date").on( "change", function() {
    showDetails(this);
});

$("#btn-plus").on( "click", function() {
    sum(userTickets + 1);
});

$("#btn-minus").on( "click", function() {
    minus(userTickets - 1);
});

$("#book-now").on( "click", function() {
    onBooking();
});

$("#btn-pay").on( "click", function() {
    onPay();
});

$("#card-expiration").on( "change", function() {
    onPay();
});