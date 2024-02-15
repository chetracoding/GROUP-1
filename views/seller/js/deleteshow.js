// Functions
function show(e)
{
    dailogDelete.style.display = 'flex';
    let showId = e.target.parentNode.lastElementChild.value;
    a.href = "/seller/show/delete?id=" + showId;
}

function hide()
{
    dailogDelete.style.display = 'none';
}

// variables
let dailogDelete = document.querySelector(".delete-dailog");
let btnDelete = document.querySelectorAll("#btn-delete-show");
let btnCancel = document.querySelector("#btn-cancel");
let a = document.querySelector("#delete-btn a");

// add events
for (let btn of btnDelete){
    btn.addEventListener("click" , show);
}

btnCancel.addEventListener("click" , hide);