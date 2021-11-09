<?php

//validate first and last name field 
function validIName($iName){
    return !empty($iName);//whether name string is empty or not

}

//validate service list field
function validService($service){
    return $service == "none" || $service == "Leadership" || $service == "Managing Change" || $service == "Team Effectiveness" || $service == "morale" || $service == "Organizational Communication" ||  $service == "Constructive Climate";
}

//validate industry list field
function validIndustry($industry){
    return $industry == "none" || $industry == "consumer" || $industry == "financial" || $industry == "technology" || $industry == "media" || $industry == "communications" || $industry == "government";
}

//validate how you heard about us
function validHear($hear){
    return $hear == "none" || $hear == "face" || $hear == "person" || $hear == "web" || $hear == "other";
}

//validate consultation prefrence 
function validConsult($consult){
    return $consult == "One-on-one consulting" || $consult == "Group Format" || $consult == "Virtual" || $consult == "I'm not sure";
}

//validate email 
function validEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>