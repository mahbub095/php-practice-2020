<?php
function isChecked($inputName,$value){
    // if (isset($inputName) && is_array($inputName) && in_array($value,$inputName)){
        if (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName])){
        echo "checked";
    }
}