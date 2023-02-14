generateBtn = document.querySelector(".qr-code .btn");
qrImg = document.querySelector(".qr-code img");
let preValue;
function openForm(){
    document.getElementById("popup").style.display = "flex"; 
    let qrValue = window.location.href;
    console.log(qrValue);
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