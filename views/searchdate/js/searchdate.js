function disableStartDate() 
{
    const startDate = $('#start-date').val();
    $('#end-date').attr('min',startDate);
}

function disableEndDate() 
{
    const endDate = $('#end-date').val();
    $('#start-date').attr('max', endDate);
}

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

var today = yyyy + '-' + mm + '-' + dd;
$('#start-date').attr('min',today);

$('#end-date').attr('min',today);

$('#start-date').change(disableStartDate);
$('#end-date').change(disableEndDate);