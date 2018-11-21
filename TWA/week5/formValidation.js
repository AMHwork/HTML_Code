
function validate (form) {
	var invalid = false;
	var invalidForm = true;
	var regName = "`~!@#$%^&*()_+=-1234567890.{1,40}$";

	var surname = document.getElementById("surname");
    if (surname.value == "") {
        invalid = true;
        surname.style.border = '1px solid #ff0000';
        document.getElementById("validSurname").innerHTML = "Please enter a surname";
    } else if (testCharacters.test(surname.value) {
        invalid = true;
        surname.style.border = '1px solid #ff0000';
        document.getElementById("validSurname").innerHTML = "Please enter less than 40 characters."
    } else {
        surname.style.border = '1px solid #000000';
        document.getElementById("validSurname").innerHTML = "";
        console.log("surname ok");
    }

    var given = document.getElementById("given");
    if (given.value == "") {
        invalid = true;
        given.style.border = '1px solid #ff0000';
        document.getElementById("validGiven").innerHTML = "Please enter a given name ";
    } else if (!regName.test(given.value)) {
        invalid = true;
        given.style.border = '1px solid #ff0000';
        document.getElementById("validGiven").innerHTML = "Please enter less than 40 characters."
    } else {
        given.style.border = '1px solid #000000';
        document.getElementById("validGiven").innerHTML = "";
    }

    var previous = document.getElementById("previous");
    if (previous.value == "") {
        invalid = true;
        previous.style.border = '1px solid #ff0000';
        document.getElementById("validPrevious").innerHTML = "Please enter a previous name ";
    } else if (!regName.test(previous.value)) {
        invalid = true;
        previous.style.border = '1px solid #ff0000';
        document.getElementById("validPrevious").innerHTML = "Please enter less than 40 characters."
    } else {
        previous.style.border = '1px solid #000000';
        document.getElementById("validPrevious").innerHTML = "";
    }

    var country = document.getElementById("country");
    if (country.value == "") {
        invalid = true;
        country.style.border = '1px solid #ff0000';
        document.getElementById("validCountry").innerHTML = "Please enter a Country ";
    } else if (!regName.test(country.value)) {
        invalid = true;
        country.style.border = '1px solid #ff0000';
        document.getElementById("validCountry").innerHTML = "Please enter less than 40 characters."
    } else {
        country.style.border = '1px solid #000000';
        document.getElementById("validCountry").innerHTML = "";
    }

    var address = document.getElementById("address");
    if (address.value == "") {
        invalid = true;
        address.style.border = '1px solid #ff0000';
        document.getElementById("validAddress").innerHTML = "Please enter an Address ";
    } else if (!regName.test(country.value)) {
        invalid = true;
        address.style.border = '1px solid #ff0000';
        document.getElementById("validAddress").innerHTML = "Please enter less than 40 characters."
    } else {
        address.style.border = '1px solid #000000';
        document.getElementById("validAddress").innerHTML = "";
    }

    var postcode = document.getElementById("postcode");
    if (postcode.value == "") {
        invalid = true;
        postcode.style.border = '1px solid #ff0000';
        document.getElementById("validPostcode").innerHTML = "Please enter a Postcode ";
    } else if (!regName.test(postcode.value)) {
        invalid = true;
        postcode.style.border = '1px solid #ff0000';
        document.getElementById("validPostcode").innerHTML = "Please enter less than 40 characters."
    } else {
        postcode.style.border = '1px solid #000000';
        document.getElementById("validPostcode").innerHTML = "";
    }

    var patientPhone = document.getElementById("patientPhoneAH");
    if (patientPhone.value == "") {
        invalid = true;
        patientPhone.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneAH").innerHTML = "Please enter a Phone Number (AH) ";
    } else if (!regName.test(patientPhone.value)) {
        invalid = true;
        patientPhone.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneAH").innerHTML = "Enter characters less than 40 characters.";
    } else {
        patientPhone.style.border = '1px solid #000000';
        document.getElementById("validpatientPhoneAH").innerHTML = "";
    }

    var patientPhoneB = document.getElementById("patientPhoneBH");
    if (patientPhoneB.value == "") {
        invalid = true;
        patientPhoneB.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneBH").innerHTML = "Please enter a Phone Number (BH) ";
    } else if (!regName.test(patientPhoneB.value)) {
        invalid = true;
        patientPhoneB.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneBH").innerHTML = "Enter characters less than 40 characters.";
    } else {
        patientPhoneB.style.border = '1px solid #000000';
        document.getElementById("validpatientPhoneBh").innerHTML = "";
    }

    var name = document.getElementById("name");
    if (patientPhone.value == "") {
        invalid = true;
        name.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneAH").innerHTML = "Please enter a name ";
    } else if (!regName.test(name.value)) {
        invalid = true;
        name.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneAH").innerHTML = "Please enter less than 40 characters.";
    } else {
        name.style.border = '1px solid #000000';
        document.getElementById("validpatientPhoneAH").innerHTML = "";
    }


   if(!invalid){
   	  console.log("form valid");
   	  return true;
   }
   return false;
}