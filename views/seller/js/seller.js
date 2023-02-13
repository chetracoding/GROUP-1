// Functions
function show(e)
{
    dailogdelete.style.display = 'flex';

    let showId = e.target.parentNode.lastElementChild.value
    a.href = "/seller/show/delete?id=" + showId;
    console.log(a);
}

function hide()
{
    dailogdelete.style.display = 'none';
}

// variables
let btn_delete = document.querySelectorAll("#delete");
let btn_cancel = document.querySelector("#btn-cancel");
let dailogdelete = document.querySelector(".delete-dailog");
let a = document.querySelector("#delete-btn a");

// add events
for (let btn of btn_delete){
    btn.addEventListener("click" , show);
}

btn_cancel.addEventListener("click" , hide);