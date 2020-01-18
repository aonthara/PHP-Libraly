<?php 

    session_start();
    include('include/connect.php');

    if(isset($_POST['btn_login'])) {

        $name = $_POST['name'];
        $pass = $conn->real_escape_string($_POST['pass']);
        
        $sql = " SELECT * FROM `user_tb` WHERE `name` = '".$name."' AND `pass` = '".$pass."' ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header('location:index.php');
        }else{
            echo 'Login failed';
        }
        

        // if($result){
        //     echo "Login Success";
        // } else {
        //     echo "Login Failed";
        // }



    }   

?>