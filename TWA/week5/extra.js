  var name = document.getElementById("name");
    if (validText.test(name.value)){
        invalid = false;
        name.style.border = '1px solid #000000';
        document.getElementById("validName").innerHTML = "";
    }
    else {
        invalid = true;
        name.style.border = '1px solid #ff0000';
        document.getElementById("validName").innerHTML = "Please enter alpha characters or hyphen, up to 40 characters."
    }

    var kinaddress = document.getElementById("kinaddress");
    if (validAddress.test(kinaddress.value)){
        invalid = false;
        kinaddress.style.border = '1px solid #000000';
        document.getElementById("validKinAddress").innerHTML = "";
    }
    else {
        invalid = true;
        kinaddress.style.border = '1px solid #ff0000';
        document.getElementById("validKinAddress").innerHTML = "Please enter a valid street address";
    }

    var kinPhoneAH = document.getElementById("kinPhoneAH");
    if (validPhoneNumber.test(kinPhoneAH.value)){
        invalid = false;
        kinPhoneAH.style.border = '1px solid #000000';
        document.getElementById("validkinPhoneAH").innerHTML = "";
    }
    else {
        invalid = true;
        kinPhoneAH.style.border = '1px solid #ff0000';
        document.getElementById("validkinPhoneAH").innerHTML = "Please enter a valid phone number: 10 digits";
    }

    var kinPhoneBH = document.getElementById("kinPhoneBH");
    if (validPhoneNumber.test(kinPhoneBH.value)){
        invalid = false;
        kinPhoneBH.style.border = '1px solid #000000';
        document.getElementById("validkinPhoneBH").innerHTML = "";
    }
    else {
        invalid = true;
        kinPhoneBH.style.border = '1px solid #ff0000';
        document.getElementById("validkinPhoneBH").innerHTML = "Please enter a valid phone number: 10 digits";
    }

    var relation = document.getElementById("relation");
    if (text.test(relation.value)){
        invalid = false;
        relation.style.border = '1px solid #000000';
        document.getElementById("validRelation").innerHTML = "";
    }
    else {
        invalid = true;
        relation.style.border = '1px solid #ff0000';
        document.getElementById("validRelation").innerHTML = "Please enter a valid name";
    }