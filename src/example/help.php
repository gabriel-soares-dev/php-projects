<?php

function welcome(){
    return 'boa tarde!';
}

function resumeText(){
    return 'text resume!';
}

function informationPerson($name, $age, $gender = '...'){
    return 'Your name is '.$name.' with '.$age.' years old.<br>'.'And the gender is '.$gender;
}