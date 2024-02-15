// VARIABLES
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#card-expiration').attr('min',today);

// FUNCTIONS
function onPay(event) 
{
    let allSeats = document.querySelectorAll(".field-seat");
    let selectSeat = false;

	for (let inp of allSeats) {
        if (inp.checked) {
            selectSeat = true;
        }
	}

    if (! selectSeat) {
        document.querySelector(".no-seat").style.display = "flex";
    }

    if (selectSeat) {
        if ($("#number-card").val().length != 16) {
            $("#error-number").text("Please input only 16 digits.");
        }
    
        if (!$('#card-expiration').val()) {
            $("#error-card-expiration").text("Please input card expiration.");
        } else {
            $("#error-card-expiration").text("");
        }
    }

    if ($("#number-card").val().length == 16 && $('#card-expiration').val() && selectSeat) {
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

function hidePopup() 
{
    document.querySelector(".no-seat").style.display = "none";
    document.querySelector(".max-seat").style.display = "none";
}

// ADD EVENTS
$("#number-card").on( "keyup", function() {
    validateCardNumber(this);
});

$("#btn-pay").on( "click", function() {
    onPay();
});

$("#card-expiration").on( "change", function() {
    onPay();
});

$("#btn-no-seat").on( "click", function() {
    hidePopup();
});

$("#btn-max-seat").on( "click", function() {
    hidePopup();
});