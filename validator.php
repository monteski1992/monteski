<?php

class validator{
    //property
   private $erros = [];


    //methods
    public function validateEmpty($value, $fieldName) {
        if(empty($value)) {
            if($fieldName == "fullName") {
                $this->errors[$fieldName]  = "pls enter fullname";        
         } elseif($fieldName == "email") {
                $this->errors[$fieldName] = "pls enter email";                          
         }  elseif($fieldName == "pwd"){
            $this->errors[$fieldName] = "pls enter password";        
         } elseif ($fieldName == "confirmpwd") {
            $this->errors[$fieldName] = "pls enter password";
         }else {
            $this->errors[$fieldName] = "fild is required";
         }
        }

    }
// to check if there are errors
}public function hasErros(){
    return !empty($this->errors);
}
public function getErrors(){
    return 
}




