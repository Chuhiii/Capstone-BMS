<?php

$action  = $_REQUEST['action'];

if(!empty($action)){
    require_once 'partials/accountFunction.php';
    $obj=new Account();  //call object in the partials/accountFunction.php

}

// adding user action

if($action=='newAccount' && !empty($_POST)){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $bday = $_POST['bday'];
    $sex = $_POST['sex'];
    $userPhoto = $_POST['userPhoto'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $u_no=(!empty($_POST['userID']))? $_POST['userID']: "";

    $imagename="";
    if(!empty($photo['name'])){
        $imagename=$obj->uploadPhoto($userPhoto);
        $u_no=[
            'u_lname'=>$lname,
            'u_fname'=>$fname,
            'u_mname'=>$mname,
            'u_address'=>$address,
            'u_contact_no'=>$lcontact_no,
            'u_bday'=>$bday,
            'u_sex'=>$sex,
            'u_Photo'=>$userPhoto,
            'u_email'=>$email,
            'u_uname'=>$uname,
            'u_password'=>$password,
        ];
    } else{
        $u_no=[
            'u_lname'=>$lname,
            'u_fname'=>$fname,
            'u_mname'=>$mname,
            'u_address'=>$address,
            'u_contact_no'=>$lcontact_no,
            'u_bday'=>$bday,
            'u_sex'=>$sex,
            'u_email'=>$email,
            'u_uname'=>$uname,
            'u_password'=>$password,
        ];
    }
        $u_no=$obj->add($u_no);

        if(!empty($u_no)){
            $player=$obj->getRow('id',  $u_no);
            echo json_encode($player);
            exit(); 
        }
    }
?>