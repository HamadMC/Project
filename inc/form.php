<?php

$FirstName =   $_POST['FirstName'];
$LastName  =   $_POST['LastName'];
$Email     =   $_POST['Email'];

$Error = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'EmailError' => '',
];

if (isset($_POST['sunmit'])) {

    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);

    $sql = "INSERT INTO users(FirstName, LastName, Email)
            VALUES ('$FirstName', '$LastName', '$Email')";
            
    if(empty($FirstName)){
        $Error['FirstNameError'] = 'يرجى ادخال الاسم الاول';
    }elseif(empty($LastName)){
        $Error['LastNameError'] = 'يرجى ادخال الاسم الاخير';
    }elseif(empty($Email)){
        $Error['EmailError'] = 'يرجى ادخال الايميل';
    }elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $Error['EmailError'] = 'يرجى ادخال ايميل صحيح';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }       
}