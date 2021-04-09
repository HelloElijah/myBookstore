function sellBookRequest() {
    var title = document.getElementById("title").value;
    var author = document.getElementById("author").value;
    var location = document.getElementById("location").value;
    var price = document.getElementById("price").value;
    var email = document.getElementById("email").value;
    var image = document.getElementById("image").value;

    var xhttp = new XMLHttpRequest();
    xhttp.open("get", "sellBook.php?title=" + title + "&author=" + author 
    + "&location=" + location + "&price=" + price + "&email=" + email + "&image" + image);
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4) {
            if (xhttp.status == 200) {
                if (xhttp.responseText == "Insert Successfully") {
                    alert("You have Posted Book Successfully");
                }
                else{
                    displayResult(xhttp.responseText);
                }
            } else {
                displayResult("An error occurred: " + xhttp.statusText); 
            }
        }
    };
    xhttp.send(null);
}

function displayResult(sText) {
    var divPostInfo = document.getElementById("divPostInfo");
    divPostInfo.innerHTML = sText;
}