// FUNCTIONS
function show()
{
    document.querySelector("#sitting").style.display = 'block';
}

function hide()
{
    document.querySelector("#sitting").style.display = 'none';
}

// ADD EVENTS
document.querySelector("#profile-name").addEventListener("mouseover", show);

document.querySelector("#sitting").addEventListener("mouseover", show);
document.querySelector("#sitting").addEventListener("mouseout", hide);