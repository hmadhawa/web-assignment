<?php


if(isset($_POST['create'])){

 include "../db.php";
  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

        }

        $name  = validate($_POST['name']);
        $email = validate($_POST['email']);

        $user_data = 'name='.$name. '&email='.$email;

        if(empty($name)){
           header("Location: ../index.php?error=name is required&$user_data");
        }else if(empty($email)){
           header("Location: ../index.php?error=email is required&$user_data");
        }else {
         
            $sql =  "INSERT INTO users(name, email)
                     VALUES('$name', '$email')";

            $result = mysqli_query($conn, $sql );
            if($result){
               echo  "success";

            }else{

               header("Location: ../index.php?error=Unkown error occurred&$user_data");
            }

        }
 }