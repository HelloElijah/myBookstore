function sellBookRequest() {
    var title = document.getElementById("title").value;
    var author = document.getElementById("author").value;
    var location = document.getElementById("location").value;
    var price = document.getElementById("price").value;
    var email = document.getElementById("email").value;
    var image = document.getElementById("image").value;
    var category = document.getElementById("category").value;
    console.log(category);
    var cat_code;
    
    if (category=="Fantasy") {
        cat_code=1;
    }
    else if (category=="Sci-Fi"){
        cat_code=2;
    }
    else if (category=="Mystery"){
        cat_code=3;
    }
    else if (category=="Thriller"){
        cat_code=4;
    }
    else{
        cat_code=5;
    }

    console.log(cat_code);
    var xhttp = new XMLHttpRequest();
    xhttp.open("get", "sellBook.php?title=" + title + "&author=" + author 
    + "&location=" + location + "&price=" + price + "&email=" + email + "&image=" + image + "&category=" + cat_code);
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