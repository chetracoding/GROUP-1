// Generate QR Code
generateBtn = document.querySelector(".qr-code .btn");
qrImg = document.querySelector(".qr-code img");
let preValue;
function openForm(){
    document.getElementById("popup").style.display = "flex"; 
    let qrValue = window.location.href;
    if(!qrValue || preValue === qrValue) return;
    preValue = qrValue;
    generateBtn.innerText = "Generating QR Code...";
    qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrValue}`;
    qrImg.addEventListener("load", () => {
        generateBtn.innerText = "Close QR Code";
    });
}

function closeForm(){
    document.getElementById("popup").style.display = "none"; 
}

// Print Ticket
function autoClick(){
$("#download").click();
}

$(document).ready(function(){
var element = $("#htmlContent");

$("#download").on('click', function(){

    html2canvas(element, {
    onrendered: function(canvas) {
        var imageData = canvas.toDataURL("image/jpg");
        var newData = imageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
        $("#download").attr("download", "cambo_ticket.jpg").attr("href", newData);
    }
    });

});
});