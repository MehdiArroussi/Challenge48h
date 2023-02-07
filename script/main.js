function myfunction(){
    var int = 0;
    var email =document.getElementById('email').value;
    var pass0 = document.getElementById('passwordsign').value;
    var pass1 = document.getElementById('confirmpassword').value;
    var numregex = /(?=.*?[0-9])/; //At least one digit
    var speregex = /(?=.*?[#?!@$%^&*-])/; //At least one special character
    var upperegex = /(?=.*?[A-Z])/; //At least one upper case letter

    if (pass0 != pass1) {
        document.getElementById('message').innerHTML = 'Password not matching ❌';
    } else if (pass0 == "" || pass1 == "") {
        document.getElementById('message').innerHTML = 'Password not matching ❌';
    } else {
        document.getElementById('message').innerHTML = 'Password Matching ✔️';
        int+=1;
    }

    if (pass0.length < 8) {
        document.getElementById('message1').innerHTML = 'Password must be at least 8 characters ❌';
    } else {
        document.getElementById('message1').innerHTML = 'Password is at least 8 characters ✔️';
        int+=1;
    }

    if (numregex.test(pass0) != true) {
        document.getElementById('message2').innerHTML = 'Password must contain at least one number ❌';
    } else {
        document.getElementById('message2').innerHTML = 'Password contain at least one number ✔️';
        int+=1;
    }

    if (speregex.test(pass0) != true) {
        document.getElementById('message3').innerHTML = 'Password must contain at least one special character ❌';
    } else {
        document.getElementById('message3').innerHTML = 'Password contain at least one special character ✔️';
        int+=1;
    }

    if (upperegex.test(pass0) != true) {
        document.getElementById('message4').innerHTML = 'Password must contain at least one upper case letter ❌';
    } else {
        document.getElementById('message4').innerHTML = 'Password contain at least one upper case letter ✔️';
        int+=1;
    }
    if (((email.match(new RegExp("@", "g")) || []).length) == 1 ) {
        int+=1;
        document.getElementById('message5').innerHTML = 'Password contain at least one upper case letter ✔️';
    }
    else if (((email.match(new RegExp("@", "g")) || []).length) == 0 )
    {
        document.getElementById('message5').innerHTML = 'Password must contain at least one upper case letter ❌';
    }
    else {
        document.getElementById('message5').innerHTML = 'Password must contain at least one upper case letter ❌';
    }

    if (int === 6) {
        document.getElementsByClassName("signupinput")[0].style.visibility = "visible";
    } else {
        document.getElementsByClassName("signupinput")[0].style.visibility = "hidden";
    }

}

