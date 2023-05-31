<?php
if (isset($_POST['submit'])) {
    $loginid = $_POST['email'];
    $loginpwd = $_POST['pwd'];
    // echo $loginid;
    // echo $loginpwd;
    // echo 'hello';
    // exit;
    require_once 'connection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email ='$loginid'");
        if ($sql) {
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            if (mysqli_num_rows($sql) !== 0) {
                $dbpwd = $row['password'];
                if ($loginpwd == $dbpwd) {
                    session_start();
                    $_SESSION['email'] = $row['email'];
                    header("location: home.php");
                    exit();
                } else {
                    header("location: index.php?error=invalidpassword");
                    exit();
                }
            } else {
                header("location: index.php?error=usernamedoesnotexist");
                exit();
            }
        } else {
            header("location: login.php?error=usernamedoesnotexist");
            exit();
        }
    }
}
