function sayHello(){
    yourName = document.getElementById("username").value;
    if (yourName == "" || !yourName)
        alert("Maaf Silahkan Login Terlebih Dahulu")
    else
        alert("Hallo "+yourName+" Selamat Datang Di Tani IT")
}

function showhide(toggle) {
    var elementmode = document.getElementById(toggle).style;
    elementmode.display = (!elementmode.display) ? 'none' : '';
}
function openclose(toggle) { showhide(toggle); }


function mypassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}
