<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

// print_r( $_SESSION['paymentCard']);
// echo $_POST['cardDate'];
// echo $_POST['name'];
// echo $_POST['cvv'];
// echo $_POST['cardnumber'];

$cardNameMsg = $cardNumberMsg = $expDateMsg = $cvvMsg = ''; 
$oldCardName = $oldCardNumber = $oldExpDate = $oldCvv = ''; 
$isValidForm = true; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    if (isset($_POST['name'])) { 
        $oldCardName = $_POST['name']; 
        if (strlen($_POST['name']) < 5) { 
            $_SESSION['wrongName'] = "Invalid card name"; 
            $isValidForm = false; 
        } 
    } 
 
    if (isset($_POST['cardNumber'])) { 
        $oldCardNumber = $_POST['cardNumber']; 
        if (!validateCreditCard($_POST['cardNumber'])) { 
            $_SESSION['wrongNumber'] = "Invalid card number"; 
            $isValidForm = false; 
        } 
 
    } 
 
    if (isset($_POST['cardDate'])) { 
        $oldExpDate = $_POST['cardDate']; 
        if (strlen($_POST['cardDate']) !== 5) { 
            $_SESSION['wrongDate'] = "Invalid Expire Date"; 
            $isValidForm = false; 
        } 
    } 
 
    if (isset($_POST['cvv'])) { 
        $oldCvv = $_POST['cvv']; 
        if (strlen($_POST['cvv']) !== 3) { 
            $_SESSION['wrongCVV'] = "Invalid CVV number"; 
            $isValidForm = false; 
        } 
    } 
    if ($isValidForm) {  
        if(isset($_SESSION['paymentCard'][0][2])){
            foreach ($_SESSION['paymentCard'] as $key => $value) {
                orderFood($value[0], intval($_SESSION['userid']), intval($value[1]), intval($value[2]), $value[3], $value[4], $value[5]);
                $_SESSION['paymentCard'] = '';
                header('Location: /order');
            }
            header('Location: /order');
        }
    } else{
        header('Location: /checkout');
    }
} 
 
function validateCreditCard($creditCardNumber) 
{ 
    // Remove any spaces or non-numeric characters from the credit card number 
    $cleanedNumber = preg_replace('/\D/', '', $creditCardNumber); 
 
    // Check if the credit card number is exactly 16 digits 
    if (strlen($cleanedNumber) !== 16) { 
        return false; 
    } 
 
    // Reverse the credit card number 
    $reversedNumber = strrev($cleanedNumber); 
 
    // Initialize variables for the Luhn algorithm calculation 
    $sum = 0; 
    $double = false; 
 
    // Loop through each digit of the reversed credit card number 
    for ($i = 0; $i < strlen($reversedNumber); $i++) { 
        $digit = intval($reversedNumber[$i]); 
 
        // Double every second digit starting from the right (from index 0) 
        if ($double) { 
            $digit *= 2; 
            // If the doubled digit is greater than 9, subtract 9 from it 
            if ($digit > 9) { 
                $digit -= 9; 
            } 
        } 
 
        // Add the digit to the sum 
        $sum += $digit; 
 
        // Toggle the 'double' flag for the next iteration 
        $double = !$double; 
    } 
 
    // If the sum is divisible by 10, the credit card number is valid 
    return $sum % 10 === 0; 
}