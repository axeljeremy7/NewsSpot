<?php
/*
  Represents the results of a validation
*/
class ValidationResult
{
   private $cssClassNameForm;
   private $cssClassNameP;
   private $errorMessage;
   private $isValid = true;

   // constructor

public function __construct($cssClassNameForm, $cssClassNameP, $errorMessage, $isValid) {
   $this->cssClassName = $cssClassNameForm;
   $this->cssClassName = $cssClassNameP;
   $this->errorMessage = $errorMessage;
   $this->isValid = $isValid;
}
// accessors
public function getCssClassNameForm() { return $this->cssClassNameForm; }
public function getCssClassNameP() { return $this->cssClassNameP; }
public function getErrorMessage() { return $this->errorMessage; }
public function isValid() { return $this->isValid; }
/*
  Static method used to check a querystring parameter
  and return a ValidationResult
*/
static public function checkParameter($queryName, $pattern,
                                      $errMsg) {
   $error = "";
   $errClassForm = "";
   $errClassP = "";
   $isValid = true;
   // first check if the parameter doesn't exist or is empty
   if (empty($_POST[$queryName])) {
      $error = "Empty field";
      $errClass = "form-control error";
      $errClassP="littlemessage";
      $isValid = false;
    }
    else {
    // now compare it against a regular expression

        $value = $_POST[$queryName];
         if ( ! preg_match($pattern, $value) ) {
            $error = $errMsg;
            $errClassForm = "form-control error";
            $errClassP="littlemessage";
            $isValid = false;
          }

    }
    return new ValidationResult($errClassForm, $errClassP, $error, $isValid);

  }

  static public function checkPassword2($queryName, $queryName2, $pattern,
                                      $errMsg) {
   $error = "";
   $errClassForm = "";
   $errClassP = "";
   $isValid = true;
   // first check if the parameter doesn't exist or is empty
   if (empty($_POST[$queryName])) {
      $error = "Empty field";
      $errClass = "form-control error";
      $errClassP="littlemessage";
      $isValid = false;
    }
    else {
    // now compare it against a regular expression

        $value = $_POST[$queryName];
        $value2 = $_POST[$queryName2];
         if ( ! preg_match($pattern, $value2) ) {
            $error = $errMsg;
            $errClassForm = "form-control error";
            $errClassP="littlemessage";
            $isValid = false;
          }else {
            if ($value2 == $value) {
              $isValid=true;
            }else {
              $error = "No match with your previous password";
              $errClassForm = "form-control error";
              $errClassP="littlemessage";
              $isValid = false;
            }
          }

    }
    return new ValidationResult($errClassForm, $errClassP, $error, $isValid);

  }

}
?>










