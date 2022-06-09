function getConfirmation() {
    var retVal = confirm("Do you want to continue ?");
    if (retVal == true) {
        document.write("User want to delete ?");
        return true;
    } else {
        document.write("User doesnt want to continue!");
        return false;
    }
}

function validate() {
    string = ''

    if (document.getElementById('username').value == "") {
        string = string + "Please Enter Your Username\n";
        document.getElementById('username').focus();
    }

    if (document.getElementById('password').value == "") {
        string = string + "Please Enter Password\n";
        document.getElementById('password').focus();
    }

    if (document.getElementById('confirm_password').value == "") {
        string = string + "Please Enter Confirm Password\n";
        document.getElementById('confirm_password').focus();
    }

    if (document.getElementById('gender_male').checked == false &&
        document.getElementById('gender_female').checked == false) {
        string = string + "Please Tick The Gender\n";
        document.getElementById('gender_male').focus();
    }

    if (document.getElementById('address').value == "") {
        string = string + "Please Enter Your Address\n";
        document.getElementById('address').focus();
    }

    if (document.getElementById('state').value == "") {
        string = string + "Please Select Your State\n";
        document.getElementById('state').focus();
    }

    if (document.getElementById('hobby_1').checked == false &&
        document.getElementById('hobby_2').checked == false &&
        document.getElementById('hobby_3').checked == false) {
        string = string + "Please Tick At Least One Interest\n";
        document.getElementById('hobby_1').focus();
    }

    if (string != '') {
        alert(string)
        return false
    } else {
        return true
    }
}

function myreset() {
    document.getElementById('username').value == "";
    document.getElementById('password').value == "";
    document.getElementById('confirm_password').value == "";
    document.getElementById('gender_male').checked == false;
    document.getElementById('gender_female').checked == false;
    document.getElementById('address').value == "";
    document.getElementById('state').value == "";
    document.getElementById('hobby_1').checked == false;
    document.getElementById('hobby_2').checked == false;
    document.getElementById('hobby_3').checked == false;
    alert('Succesfully Reset');
}

function over() {
    alert('Mouse Over');
}

function out() {
    alert('Mouse Out');
}

function myevent(name) {
    alert(name);
}