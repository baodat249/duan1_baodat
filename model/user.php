<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM user ORDER BY id_user DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email_user, $password_user, $name_user,$phoneNumber_user,$address_user)
{
    $sql = "INSERT INTO user(email_user,password_user,name_user,phoneNumber_user,address_user) VALUES('$email_user','$password_user','$name_user','$phoneNumber_user','$address_user')";
    pdo_execute($sql);
}

function checkuser($name_user, $password_user)
{
    $sql = "SELECT * FROM user WHERE name_user='" . $name_user . "' AND password_user='" . $password_user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email_user)
{
    $sql = "SELECT * FROM user WHERE email_user='" . $email_user . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}



function loadone_taikhoan($id_user)
{
    $sql = "SELECT * FROM user WHERE id_user=" . $id_user;
    $tk = pdo_query_one($sql);
    return $tk;
}





