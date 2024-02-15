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
// Functions
function show(e)
{
    dailogDelete.style.display = 'flex';
    let showId = e.target.parentNode.firstElementChild.value;
    let dateId = e.target.parentNode.lastElementChild.value;
    a.href = "/seller/time/delete?id=" + dateId +"&show_id=" + showId;
}

function hide()
{
    dailogDelete.style.display = 'none';
}

// variables
let dailogDelete = document.querySelector(".delete-dailog");
let btnDelete = document.querySelectorAll("#btn-delete-time");
let btnCancel = document.querySelector("#btn-cancel");
let a = document.querySelector("#delete-btn a");

// add events
for (let btn of btnDelete){
    btn.addEventListener("click" , show);
}

btnCancel.addEventListener("click" , hide);