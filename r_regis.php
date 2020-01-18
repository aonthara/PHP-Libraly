<?php 
    include('include/connect.php');

    if(isset($_POST['btn_save'])) {

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $sex = $_POST['sex'];
    
    $sql = "INSERT INTO `user_tb` (`id`, `name`, `pass`, `mail`, `tel`, `sex`) VALUES (NULL, '".$name."', '".$pass."', '".$mail."', '".$tel."', '".$sex."');";
    
    
    $result = $conn->query($sql);

    if($result){
        header('location:login.php');
    } else {
        echo "Connect Failed";
    }


    }   

?>