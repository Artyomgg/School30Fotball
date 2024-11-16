


function blockN() {
    let delay_popup = document.getElementById('overlay');
    delay_popup.style.display = "none";
}


function blockD() {

    let delay_popup = document.getElementById('overlay');
    delay_popup.style.display = "block";
}


function hello() {
    let login = document.getElementById("Login").value;
    let password =  document.getElementById("password").value;
 
    if (login == "Admin" && password == "2012"){
        blockN();
        alert("Привет! ")
    }
    else{
        blockD();
        alert("Incorrect login or pasword!!!!!")
    }
}
