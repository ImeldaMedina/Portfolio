
var met = document.getElementById("meet");
met.onchange= meet;
function meet() {
    var oBlock = document.getElementById("other-block");
    if(this.options[this.selectedIndex].value=="other"){
        oBlock.style.display = "block";
    }else{
        oBlock.style.display = "none";
    }
}
var email = document.getElementById("mailing");
email.onchange= eMail;
function eMail(){
    var eFor = document.getElementById("eFormat");
    if(this.checked){
        eFor.style.display ="block";
    }else{
        eFor.style.display ="none";
    }
}


document.getElementById("guest-form").onsubmit= validate;
function validate() {

    var isValid = true;

    //clear all error messages
    var errors = document.getElementsByClassName("err");
    for(var i=0; i<errors.length; i++){
        errors[i].style.visibility ="hidden";
    }
    // check first name
    var first = document.getElementById("fName").value;
    if (first == "") {
        var errFirst = document.getElementById("err-fName");
        errFirst.style.visibility = "visible";
        isValid = false;
    }
    // check last name
    var last = document.getElementById("lName").value;
    if (last == "") {
        var errLast = document.getElementById("err-lName");
        errLast.style.visibility = "visible";
        isValid = false;
    }
    //check title
    var title = document.getElementById("title").value;
    if (title == "") {
        var errTitle = document.getElementById("err-title");
        errTitle.style.visibility = "visible";
        isValid = false;
    }
    //check company
    var company = document.getElementById("company").value;
    if (company == "") {
        var errCompany = document.getElementById("err-company");
        errCompany.style.visibility = "visible";
        isValid = false;
    }
    //check linkedIn URL
    var linkedIn = document.getElementById("linkedIn").value;
    var validation= /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:[/?#]\S*)?$/i;
    if (linkedIn != ""){
        if (!validation.test(linkedIn)) {
            var errLinkedIn = document.getElementById("err-linkedIn");
            errLinkedIn.style.visibility = "visible";
            isValid = false;
        }
    }
    //If the user checks the mailing list checkbox,
    // then email address is required
    //var mailingList = document.getElementsByName("mailing").checked;
    //If the user checks the mailing list checkbox,
    // then email address is required
    //check if HTML or text email format
    var addMailing = document.getElementById("mailing");
    if (addMailing.checked) {
        var eMail = document.getElementById("eMail").value;
        var valid=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!valid.test(eMail)) {
            var errEmail = document.getElementById("err-Email");
            errEmail.style.visibility = "visible";
            isValid = false;
        }

    }

    //check meet
    var meet = document.getElementById("meet");
    if (meet.options[meet.selectedIndex].value=="none") {
        var errMeet = document.getElementById("err-meet");
        errMeet.style.visibility = "visible";

        isValid = false;

    }

        return isValid;

}

//References
// https://www.w3resource.com/javascript/form/email-validation.php
