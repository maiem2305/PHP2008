function validateForm() {
    var x = document.forms["add_comic"]["namebook"].value;
    var x2 = document.forms["add_comic"]["slcAuthor"].value;
    var x3 = document.forms["add_comic"]["slcEditor"].value;
    var x4 = document.forms["add_comic"]["slcCategory"].value;
    var x5 = document.forms["add_comic"]["desBook"].value;
    //var x6 = document.getElementById("pagebook").files[0].name;
   // var x5 = document.forms["add_comic"]["imagebook"].value;
    if (x == "") {
        alert("Name must be filled out");
        document.getElementById("txtnamebook").innerHTML = "Trường NAME bồ vừa nhập rỗng kìa ";
        return false;
    }
    else if (x2 == "") {
        alert("select empty author");
        document.getElementById("txtslcAuthor").innerHTML = "Trường author này rỗng";
        return false;
    }
    else if (x3 == "") {
        alert("select empty Editor");
        document.getElementById("txtslcEditor").innerHTML = "Trường Editor này rỗng";
        return false;
    }
    else if (x4 == "") {
        alert("select empty");
        document.getElementById("txtslcCategory").innerHTML = "Trường  này rỗng";
        return false;
    }
    else if (x5 == "") {
        alert("select empty Mo ta");
        document.getElementById("txtdesBook").innerHTML = "Trường Description này rỗng";
        return false;
    }
    // else if (x6 == "") {
    //     alert("select empty Images");
    //     document.getElementById("txtimagebook").innerHTML = "Trường Images này rỗng";
    //     return false;
    // }
    // else if (x4 == "") {
    //     alert("select empty author");
    //     document.getElementById("txtslcAuthor").innerHTML = "Trường author này rỗng";
    //     return false;
    // }
}