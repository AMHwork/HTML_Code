/*
Student ID: 18061765
Name: Austin Hua
Class: Thursday 3-5pm

refereneces:
http://stackoverflow.com/questions/3968049/regex-allow-a-string-to-only-contain-numbers-0-9-and-limit-length-to-45
http://stackoverflow.com/questions/12183223/regular-expression-to-allow-only-numbers-in-range-1-20
http://stackoverflow.com/questions/5465375/javascript-date-regex-dd-mm-yyyy

*/
function validate (form) {

    var text = /^[a-zA-Z]+$/;
    var validText =  /^[a-zA-Z-]{1,40}$/;
    var validAddress = /[^a-zA-Z0-9]/;
    var validPostcode = /^\d{4}$/;
    var validPhoneNumber = /^\d{10}$/;
    var validDoB = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/
    var validCardNo = /^[1-9]$|^0[1-9]$|^1[0-9]$|^20$/;
    var validExpiry = /^((0[1-9])|(1[0-2]))\/(\d{4})$/;
    var validNumber = /^[0-9]+$/;

    var ms = document.getElementById("Ms");
    var miss = document.getElementById("Miss");
    var mr = document.getElementById("Mr");
    var mrs = document.getElementById("Mrs");
    var other = document.getElementById("other")
    var yesExcess = document.getElementById("yesExcess");
    var noExcess = document.getElementById("noExcess");
    var yesInsurance = document.getElementById("yesInsurance");
    var noInsurance = document.getElementById("noInsurance");

    var genderCheck = false;
    var excessCheck = false;
    var insuranceCheck = false;
    var surnameCheck = false;
    var givenCheck = false;
    var previousCheck = false;
    var dobCheck = false;
    var countryCheck = false;
    var addressCheck = false;
    var postcodeCheck = false;
    var patientPhoneAHCheck = false;
    var patientPhoneBHCheck = false;
    var medicareCheck = false;
    var cardIDCheck = false;
    var fundCheck = false;
    var membership = false;
    var expireDateCheck = false;


    if(ms.checked == false && miss.checked == false 
        && mr.checked == false && mrs.checked == false 
        && other.checked == false){
        genderCheck = false;
        document.getElementById("validGender").innerHTML = "Please choose a Gender"
    }
    else {
        genderCheck = true;
        document.getElementById('validGender').style.display = 'none';
    }

    if (yesExcess.checked == false && noExcess.checked == false){
        excessCheck = false;
        document.getElementById("validExcessRadio").innerHTML = "Please choose an Excess"
    }
    else {
        excessCheck = false;
        document.getElementById('validExcessRadio').style.display = 'none';
    }

    if (yesInsurance.checked == false && noInsurance.checked == false){
        insuranceCheck = true;
        document.getElementById("validInsuranceRadio").innerHTML = "Please confirm Insurance"
    }
    else {
        insurancCheck = false;
        document.getElementById('validInsuranceRadio').style.display = 'none';
    }



	var surname = document.getElementById("surname");
    if (validText.test(surname.value)){
        surnameCheck = true;
        surname.style.border = '1px solid #000000'; 
        document.getElementById("validSurname").innerHTML = " ";
    }
    else {
        surnameCheck = false;
        surname.style.border = '1px solid #ff0000';
        document.getElementById("validSurname").innerHTML = "Please enter alpha characters or hyphen, up to 40 characters."
    }

    var given = document.getElementById("given");
    if (validText.test(given.value)){
        givenCheck = true;
        given.style.border = '1px solid #000000'; 
        document.getElementById("validGiven").innerHTML = "";
    }
    else {
        givenCheck = false;
        given.style.border = '1px solid #ff0000';
        document.getElementById("validGiven").innerHTML = "Please enter alpha characters or hyphen, up to 40 characters."
    }

    var previous = document.getElementById("previous");
    if (validText.test(previous.value)){
        previousCheck = true;
        previous.style.border = '1px solid #000000'; 
        document.getElementById("validPrevious").innerHTML = "";
    }
    else {
        previousCheck = false;
        previous.style.border = '1px solid #ff0000';
        document.getElementById("validPrevious").innerHTML = "Please enter alpha characters or hyphen, up to 40 characters."
    }


    var dob = document.getElementById("dob");
    if (validDoB.test(dob.value)){
        dobCheck = true;
        dob.style.border = '1px solid #000000'; 
        document.getElementById("validDoB").innerHTML = "";
    }
    else {
        dobCheck = false;
        dob.style.border = '1px solid #ff0000';
        document.getElementById("validDoB").innerHTML = "Please enter a valid date of birth: DD/MM/YYYY"
    }

    var country = document.getElementById("country");
    if (text.test(country.value)){
        countryCheck = true;
        country.style.border = '1px solid #000000'; 
        document.getElementById("validCountry").innerHTML = "";
    }
    else {
        countryCheck = false;
        country.style.border = '1px solid #ff0000';
        document.getElementById("validCountry").innerHTML = "Please enter a valid Country: Only characters"
    }

    var address = document.getElementById("address");
    if (validAddress.test(address.value)){
        addressCheck = true;
        address.style.border = '1px solid #000000'; 
        document.getElementById("validAddress").innerHTML = "";
    }
    else {
        addressCheck = false;
        address.style.border = '1px solid #ff0000';
        document.getElementById("validAddress").innerHTML = "Please enter a valid street address";
    }

    var postcode = document.getElementById("postcode");
    if (validPostcode.test(postcode.value)){
        postcodeCheck = true;
        postcode.style.border = '1px solid #000000'; 
        document.getElementById("validPostcode").innerHTML = "";
    }
    else {
        postcodeCheck = false;
        postcode.style.border = '1px solid #ff0000';
        document.getElementById("validPostcode").innerHTML = "Please enter a valid postcode: 4 digits";
    }

    var patientPhoneAH = document.getElementById("patientPhoneAH");
    if (validPhoneNumber.test(patientPhoneAH.value)){
        patientPhoneAHCheck = true;
        patientPhoneAH.style.border = '1px solid #000000'; 
        document.getElementById("validpatientPhoneAH").innerHTML = "";
    }
    else {
        patientPhoneAHCheck = false;
        patientPhoneAH.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneAH").innerHTML = "Please enter a valid phone number: 10 digits";
    }

    var patientPhoneBH = document.getElementById("patientPhoneBH");
    if (validPhoneNumber.test(patientPhoneBH.value)){
        patientPhoneBHCheck = true;
        patientPhoneBH.style.border = '1px solid #000000'; 
        document.getElementById("validpatientPhoneBH").innerHTML = "";
    }
    else {
        patientPhoneBHCheck = false;
        patientPhoneBH.style.border = '1px solid #ff0000';
        document.getElementById("validpatientPhoneBH").innerHTML = "Please enter a valid phone number: 10 digits";
        
    }

    var medicare = document.getElementById("medicare");
    if (validPhoneNumber.test(medicare.value)){
        medicareCheck = true;
        medicare.style.border = '1px solid #000000'; 
        document.getElementById("validMedicare").innerHTML = "";
    }
    else {
        medicareCheck = false;
        medicare.style.border = '1px solid #ff0000';
        document.getElementById("validMedicare").innerHTML = "Please enter a valid Medicare Number: 10 digits";
    }

    var cardID = document.getElementById("cardID");
    if (validCardNo.test(cardID.value)){
        cardIDCheck = true;
        cardID.style.border = '1px solid #000000'; 
        document.getElementById("validcardID").innerHTML = "";
    }
    else {
        cardIDCheck = false;
        cardID.style.border = '1px solid #ff0000';
        document.getElementById("validcardID").innerHTML = "Please enter a valid cardID: a number from 1-20";
    }

    var fund = document.getElementById("fund");
    if (text.test(fund.value)){
        fundCheck = true;
        fund.style.border = '1px solid #000000'; 
        document.getElementById("validFund").innerHTML = "";
    }
    else {
        fundCheck = false;
        fund.style.border = '1px solid #ff0000';
        document.getElementById("validFund").innerHTML = "Please enter a fund: characters only";
    }

    var membership = document.getElementById("membership");
    if (validNumber.test(membership.value)){
        membershipCheck = true;
        membership.style.border = '1px solid #000000'; 
        document.getElementById("validMemberShip").innerHTML = "";
    }
    else {
        membershipCheck = false;
        membership.style.border = '1px solid #ff0000';
        document.getElementById("validMemberShip").innerHTML = "Please enter a valid cardID: a number from 1-20";
    }

    var expireDate = document.getElementById("expireDate");
    if (validExpiry.test(expireDate.value)){
        expireDateCheck = true;
        expireDate.style.border = '1px solid #000000'; 
        document.getElementById("validExpireDate").innerHTML = "";
    }
    else {
        expireDateCheck = false;
        expireDate.style.border = '1px solid #ff0000';
        document.getElementById("validExpireDate").innerHTML = "Please enter a valid Expiry Date: MM/YYYY";
    }

    
   if(genderCheck == true && 
    excessCheck == true && 
    insuranceCheck == true &&
    surnameCheck == true && 
    givenCheck == true && 
    previousCheck == true &&
    dobCheck == true && 
    countryCheck == true && 
    addressCheck == true &&
      postcodeCheck == true && 
      patientPhoneAHCheck == true && 
      patientPhoneBHCheck == true &&
      medicareCheck == true && 
      fundCheck == true &&
      membershipCheck == true &&
      cardIDCheck == true && expireDateCheck == true){
   	 
      if (noInsurance.checked == true){
         document.getElementById('insuranceForm').disabled = true;
      }
   	  return true;
   }
   return false;
}

function testExcess() {

    var excess = document.getElementById("excess");
    var syntax = /^[1-9]\d*$/;
    var empty = /^$/;
    var error = false;

    if (syntax.test(excess.value)){ 
       error = false;
       document.getElementById('validExcess').innerHTML = " " ;
    }
    else if (empty.test(excess.value)){
       error = true;
       excess.style.border = '1px solid #ff0000';
       document.getElementById('validExcess').innerHTML = "Please enter a valid Excess Number: Whole Number";
    }
    else {
       error = true;
       excess.style.border = '1px solid #ff0000';
       document.getElementById('validExcess').innerHTML = "Please enter a valid Excess Number: Whole Number";
    }
    error = false;
        
}

function testState() {

    var state = document.getElementById("state");
    var syntax = /^[a-zA-Z]+$/;
    var empty = /^$/;
    var error = false;

    if (syntax.test(state.value)){ 
       error = false;
       document.getElementById('validState').innerHTML = " " ;
    }
    else if (empty.test(state.value)){
       error = true;
       state.style.border = '1px solid #ff0000';
       document.getElementById('validState').innerHTML = "Please enter a valid State: Only Characters";
    }
    else {
       error = true;
       state.style.border = '1px solid #ff0000';
       document.getElementById('validState').innerHTML = "Please enter a valid State: Only Characters";
    }
    error = false;
        
}

function testReset() {


}



function showOther(){

   document.getElementById('Other').style.display = 'inline-block';
}
function hideOther(){

    document.getElementById('Other').style.display = 'none';
}



function showExcess(){

    document.getElementById('parentExcess').style.display = 'inline-block';

}
function hideExcess(){

    document.getElementById('parentExcess').style.display = 'none';
}



function showInsurance() {
    
    document.getElementById('insuranceForm').style.display = 'inline-block';
    document.getElementById('insuranceForm').style.border = '1px solid #6495ED';
    document.getElementById('insuranceForm').style.padding = '0px';
    document.getElementById('insuranceForm').style.marginLeft = '5px';

}
function hideInsurance (){

    document.getElementById('insuranceForm').style.display = 'none';
}


function toggleState(){

    var aus = document.getElementById("country");

    if (aus.value == "Australia" || aus.value == "australia"){
         document.getElementById('parentState').style.display = 'inline-block';
    }
    else {
         document.getElementById('parentState').style.display = 'none';
    }

}









