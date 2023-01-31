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
$('#sitting').mouseover(show);
$('#sitting').mouseout(hide);