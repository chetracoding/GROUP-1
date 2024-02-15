// FUNCTIONS
function show(element)
{
    if (!element) return;
    element.style.display = 'block';
}

function hide(element)
{
    if (!element) return;
    element.style.display = 'none';
}

function showSitting () {
    const sitting = $('#sitting')[0];
    show(sitting);
}

// ADD EVENTS
const logoutDailog = $('.logout-dailog')[0];

$("#sitting").on( "mouseover", function() {
    show(this);
});

$("body").on( "mouseout", function() {
    hide($("#sitting")[0]);
});

$("#sitting").on( "mouseout", function() {
    hide(this);
});

$("#btn-logout").on( "click", function() {
    show(logoutDailog);
});

$("#logout-cancel").on( "click", function() {
    hide(logoutDailog);
});