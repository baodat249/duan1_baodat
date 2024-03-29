<?php
session_start();
include "model/pdo.php";
include "model/user.php";
// include "model/contact.php";
include "view/header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {


        case 'login';
            if (isset($_POST['login']) && $_POST['login']) {
                $name_user = $_POST['name_user'];
                $password_user = $_POST['password_user'];
                $checkuser = checkuser($name_user, $password_user);
                if (is_array($checkuser)) {
                    $_SESSION['name_user'] = $checkuser;
                    // header("Location: home.php");
                    $thongbao = "LOGGED IN SUCCESSFULLY";
                } else {
                    $thongbao = 'LOGIN FAILED';
                }
            }
            include "view/login.php";
            break;


        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $name_user = $_POST['name_user'];
                $password_user = $_POST['password_user'];
                $phoneNumber_user = $_POST['phoneNumber_user'];
                $address_user = $_POST['address_user'];
                $email_user = $_POST['email_user'];
                if (strlen($password_user) < 8) {
                    $thongbao = "Mật khẩu phải trên 8 ký tự";
                } else if ($password_user != $repassword_user) {
                    $thongbao = "Mật khẩu không trùng khớp";
                } else {
                    insert_taikhoan($email_user, $password_user, $name_user,$address_user,$phoneNumber_user);
                    $thongbao = "Đăng ký thành công";
                }
            }
            include "view/dangky.php";
            break;

        case 'signup';

            if (isset($_POST['signup']) && ($_POST['signup'])) {
                $name_user = $_POST['name_user'];
                $password_user = $_POST['password_user'];
                $phoneNumber_user = $_POST['phoneNumber_user'];
                $address_user = $_POST['address_user'];
                $email_user = $_POST['email_user'];

                if (strlen($password_user) < 8) {
                    $thongbao = "Password must have 8 characters";
                } else if (strlen($phoneNumber_user) < 10) {
                    $thongbao = "Incorrect telephone number";
                } else if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email_user)) {
                    $thongbao = "Email không hợp lệ, vui lòng nhập lại.";
                } else {
                    insert_taikhoan($email_user, $password_user, $name_user, $phoneNumber_user, $address_user);
                    $thongbao = "Sign Up Success";
                }
            }

            include "view/signup.php";
            break;

        case 'forgotpass':
            if (isset($_POST['sendemail']) && ($_POST['sendemail'])) {
                $email_user = $_POST['email_user'];
                $checkemail = checkemail($email_user);
                if (is_array($checkemail)) {
                    $thongbao = "YOUR PASSWORD IS: " . $checkemail['password_user'];
                } else {
                    $thongbao = "EMAIL DOES NOT EXIST!";
                }
            }
            include "view/forgotpass.php";
            break;


        case 'logout':
            session_unset();
            include "view/home.php";
            break;

        case 'contact';
            include "view/contact.php";
            break;

        case 'about';
            include "view/about.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
