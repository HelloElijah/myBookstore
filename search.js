function searchBook() {
    var bookName = document.getElementById("bookName").value;
    var xhttp = new XMLHttpRequest();
    xhttp.open("get", "search.php?bookName=" + bookName, true);
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4) {
            if (xhttp.status == 200) {
                displayBookInfo(xhttp.responseText);
            } else {
                displayBookInfo("An error occurred: " + xhttp.statusText); 
            }
        }
    };
    xhttp.send(null);
}

function displayBookInfo(sText) {
    var divResult = document.getElementById("divResult");
    divResult.innerHTML = sText;
}