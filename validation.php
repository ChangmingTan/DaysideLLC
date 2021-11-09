<?php
function validForm(){
    return validName(trim($_POST['sName'])) && (validPhone(trim($_POST['sPhone']))||
    validEmail(trim($_POST['sEmail'])));
}
//validate name field 
function validName($name){
    return !empty($name);//whether name string is empty or not

}

//validate phone number field
function validPhone($phone){
    return !empty($phone);//checks if phone field is empty or not
}
function validEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>