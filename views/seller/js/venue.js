// Functions
function show(e)
{
    dailogDelete.style.display = 'flex';
    let venueId = e.target.parentNode.lastElementChild.value;
    console.log(venueId);
    a.href = "/seller/venue/delete?id=" + venueId;
}

function hide()
{
    dailogDelete.style.display = 'none';
}

// variables
let dailogDelete = document.querySelector(".delete-dailog");
let btnDelete = document.querySelectorAll("#btn-delete-venue");
let btnCancel = document.querySelector("#btn-cancel");
let a = document.querySelector("#delete-btn a");

// add events
for (let btn of btnDelete){
    btn.addEventListener("click" , show);
}

btnCancel.addEventListener("click" , hide);