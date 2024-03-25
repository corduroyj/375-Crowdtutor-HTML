<?php
session_start();

require "./dbinfo.inc";

try{
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    $formEmail = $_POST["email"];
    $_SESSION["email"] = $formEmail;

    $validation = "false";

    $stmt = $dbh->prepare("Select password, email FROM UserAccount WHERE email=:email");
    $stmt->bindParam(':email',$formEmail);
    $stmt->execute();

        if($stmt->rowCount() == 1) { 
            $data = $stmt->fetch();
            $db_password = $data["password"];
            //compare password to authenticate user
            if(strcmp($db_password, $_POST["password"]) == 0) {
                //User provided correct password
                $_SESSION["email"] = $data["email"];
                $validation = "true";
            }
        }
    
    //send user to login page with validation set
    header("Location: ../frontend/login.php?valid=$validation");
    exit();
} catch(PDOException $e){
    print "ERROR!". $e->getMessage() . "<br/>";
}

?>