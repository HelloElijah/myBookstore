function signUpRequest() {
    var oForm = document.forms[0];
    var sBody = getRequestBody(oForm);
    var xhttp = new XMLHttpRequest();
    xhttp.open("post", oForm.action, true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4) {
            if (xhttp.status == 200) {
                if (xhttp.responseText[0] != "U") {
                    displayResult(xhttp.responseText);
                }
                else {
                    alert(xhttp.responseText);
                }
            } 
            else {
                displayResult("An error occurred");
            }
        }
    };
    xhttp.send(sBody);
}

function getRequestBody(oForm) {
    var aParams = new Array();
    for (var i = 0; i < oForm.elements.length; i++) {
        var sParam = encodeURIComponent(oForm.elements[i].name);
        sParam += "=";
        sParam += encodeURIComponent(oForm.elements[i].value);
        aParams.push(sParam);
    }
    return aParams.join("&");
}

function displayResult(sText) {
    var divSignUpInfo = document.getElementById("divSignUpInfo");
    divSignUpInfo.innerHTML = sText;
}