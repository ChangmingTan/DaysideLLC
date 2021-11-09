

document.getElementById("sForm").onsubmit = validate;

function validate(){
    //create a flag variable
    let valid = true;

    //clear all errors
    let errors = document.getElementsByClassName("serr");
    for(let i=0; i<errors.length;i++){
        errors[i].style.visibility = "hidden";
    }

    //check name
    let name = document.getElementById("sName").value;
    if(name == ""){
        let errName = document.getElementById("errSName");
        errName.style.visibility = "visible";
        valid = false;
    }

    //check email or phone input
    let email = document.getElementById("sEmail").value;
    let phoneNum = document.getElementById("sPhone").value;
    let errEmail = document.getElementById("errSEmail");
    let errPhone = document.getElementById("errSPhone");
    
    //if both left empty
    if(email == "" && phoneNum == ""){
        errEmail.textContent = "⚠ Email or phone required";
        errPhone.textContent = "⚠ Phone or email required";
        errEmail.style.visibility = "visible";
        errPhone.style.visibility = "visible";
        valid = false;
    }
    //if email entered
    else if(email != "" && phoneNum == ""){
      if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
            let errEmail = document.getElementById("errSEmail");
            errEmail.textContent = "⚠ Email must contain \"@\" and \".\"";
            errEmail.style.visibility = "visible";
            valid = false;
        }
    }
    //if phone num entered
    else if(phoneNum != "" && email == ""){
        if(phoneNum.length < 7){
            errPhone.textContent = "⚠ Enter correct phone";
            errPhone.style.visibility = "visible";
            valid = false;
        }
    }
    //if both entered
    else{
        //check email field
        if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
            let errEmail = document.getElementById("errSEmail");
            errEmail.textContent = "⚠ Email must contain \"@\" and \".\"";
            errEmail.style.visibility = "visible";
            valid = false;
        }
        //check phone
        if(phoneNum.length < 7){
            errPhone.textContent = "⚠ Enter correct phone";
            errPhone.style.visibility = "visible";
            valid = false;
        }
        
    }
    
    //if mailbox is checked, email required
    let checkBox = document.getElementById("mailing").checked;
    if(checkBox == true){
        if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
            let errEmail = document.getElementById("errSEmail");
            errEmail.textContent = "⚠ Email required for mailing list";
            errEmail.style.visibility = "visible";
            valid = false;
        }
    }
    //if (reg.test(email) == false) {
        //let errEmail = document.getElementById("errSEmail");
        //errEmail.style.visibility = "visible";
        //valid = false;
    //}
	//if(valid == true){
	//	popUp();
	//}

    return valid;
}
/*
function popUp(){
}
	// Get the popup
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("sBtn");

	// pop up span
	var span = document.getElementsByClassName("close")[0];

	// opening popup 
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	//closing the popup
	span.onclick = function() {
	  modal.style.display = "none";
	}


	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
	
*/


// Slide show
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// auto sliding
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 8000);
}


// interest from validation

document.getElementById("form").onsubmit = validate2;

function validate2(){
    
    // create a flag variable
    let valid = true;

    // clear all errors
    let errors = document.getElementsByClassName("err");
    for(let i=0; i<errors.length; i++){
       errors[i].style.visibility = "hidden";
    }
    //check first name
    let first = document.getElementById("fName").value;
    if(first==""){
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }
    //check last name
    let last = document.getElementById("lName").value;
    if(last==""){
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    // check phone number
    let phoneNumber = document.getElementById("phone").value;
    if(phoneNumber==""){
        let errPhoneNumber = document.getElementById("errPhone");
        errPhoneNumber.style.visibility="visible"
        valid=false;

    }

    //check email input
    let email = document.getElementById("email").value;
    if (email === "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    } else if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
        let errEmail = document.getElementById("errEmail");
        errEmail.textContent = "⚠ Email must contain \"@\" and \".\""
        errEmail.style.visibility = "visible";
        valid = false;
    }


    return valid;
}

