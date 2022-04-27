<?php
if (isset($_POST['addAccount'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $lname = validate($_POST['lname']);
    $fname = validate($_POST['fname']);
    $mname = validate($_POST['mname']);
    $address = validate($_POST['address']);
    $contactNo = validate($_POST['contactNo']);
    $bdaye = validate($_POST['bday']);
    $sex = validate($_POST['sex']);
    $email = validate($_POST['email']);
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    echo "$lname";
}
?>