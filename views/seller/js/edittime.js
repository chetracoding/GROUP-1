
// VARIABLES
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;

$("#date_show").attr('min',today);

// FUNCTIONS
function setTwodigits(number) {
    if (number < 10) {
        number = "0" + number;
    }
    return number;
}

function setToEndTime(time, duration) { 
    let hour = parseInt(time.substr(0, 2)) + parseInt(duration.substr(0, 2));
    let minute = parseInt(time.substr(3, 5)) + parseInt(duration.substr(3, 5));

    if (hour > 23) {
        hour -= 24;
    }

    if (minute > 59) {
        minute -= 60;
    }
    $("#end_time").val(setTwodigits(hour) +":"+ setTwodigits(minute));
}

// ADD EVENTS

$("#start_time").on( "change", function() {
    setToEndTime(this.value, $("#show_duration").val());
});
