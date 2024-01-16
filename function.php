<?php 
include("db_config.php");
if(isset($_POST['login_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //sql condition
 
    $login_sql = "SELECT * FROM user WHERE username = '".$username."' OR Email = '".$username."'";
    $result = mysqli_query($conn, $login_sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password === $row["Password"]){
            header("Location:Default.php");
        }else{
            ?>
        <script>
            alert(" Wrong Password");
        </script>
    <?php
        }       
    }
    else{
        ?>
        <script>
            alert("User Not Registered ");
        </script>
    <?php
    }
}


?>