<?php
function connectdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "failed to connect to";
    }
}

if (isset($_POST["btn_submit"]) && $_POST['btn_submit']) {
    $email = $_POST['email'];
    $fullName = $_POST['fullname'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (email, full_name, message)
    VALUES ('$email', '$fullName', '$message')";

    if (connectdb()->query($sql) == true) {
        $result = 'Thông tin liên hệ của bạn đã được gửi!';
    } else {
        $result = 'bạn chưa nhập thông tin';
    }
}

//bat loi form 
if (!empty($_POST)) {
    $errors = [];
    // bat loi Email
    if (empty($_POST['email'])) {
        $errors['email']['required'] = 'Bắt buộc phải điền email';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email']['invaild'] = 'Email không đúng định dạng';
        }
    }
    // bat loi Fullname 
    if (empty($_POST['fullname'])) {
        $errors['fullname']['required'] = 'Bắt buộc phải nhập họ tên';
    } else {
        if (strlen($_POST['fullname']) < 5) {
            $errors['fullname']['min_length'] = 'Họ tên phải lớn hơn hoặc bằng 5 ký tự';
        }
    }
    //bat loi Message
    if (empty($_POST['message'])) {
        $errors['message']['required'] = 'Vui lòng nhập thông tin';
    } else {
        if (strlen($_POST['message']) < 15) {
            $errors['message']['min_length'] = 'Văn bản phải lớn hơn hoặc bằng 15 ký tự';
        }
    }
    if (count($errors) > 0) {
        unset($result);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="font/fontawesome-free-6.5.1-web/css/all.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/cont.css">
</head>
<style>
    .colform {
        position: absolute;
        width: 380px;
        margin: 85px 0px 50px 60px;
    }

    iframe {
        display: flex;
        margin: auto;
        justify-content: center;
        align-items: center;
        margin-top: 300px;
        margin-bottom: 150px;
        border-radius: 12px;
        width: 800px;
    }
</style>

<body>
    <div class="main">
        <!-- container -->
        <div class="Container_contact">
            <div class="banner">
                <div class="img">
                    <img id="img" onclick="changeImage()" src="IMG/banner/1.png" alt="">
                </div>
            </div>
            <div class="content">
                <!-- Img -->
                <div class="content_img">
                    <div class="content_img-wrapper content_img--one">
                        <img href="#" src="IMG/NEW ARRIVALS/about1.jpg" alt="">
                    </div>
                    <div class="content_img-wrapper content_img--two">
                        <img href="#" src="IMG/NEW ARRIVALS/about2.jpg" alt="">
                    </div>
                </div>
                <!-- Document -->
                <div class="doc">
                    <div class="doc_headline">
                        <p>Please send us feedback</p>
                    </div>
                    <div class="doc_headline_hello">
                        <div class="doc_headline_hello--hd">
                            <p>Looking forward to receiving your comments!</p>
                        </div>
                        <div class="doc_headline_hello--address">
                            <div class="Address">Address</div>
                            <p>69 Nguyen Thi Dang</p>
                        </div>
                        <div class="doc_headline_hello--Email">
                            <div class="Email">Email</div>
                            <P>forever21@gmail.com</P>
                        </div>
                        <div class="doc_headline_hello--Hotline">
                            <div class="Hotline">Hotline</div>
                            <p>1-213-463-9173</p>
                        </div>
                    </div>
                    <div></div>
                    <div class="colform">
                        <form method="post" action="index.php?act=contact" id="my_from">
                            <div class="row">
                                <p>Email Address</p>
                                <input type="text" name="email" placeholder="Enter emaill address" id="email" class="form-control">
                                <?php echo !empty($errors['email']['required']) ? '<div class="output">' . $errors['email']['required'] . '</div>' : ''; ?>
                                <?php echo !empty($errors['email']['invaild']) ? '<div class="output">' . $errors['email']['invaild'] . '</div>' : ''; ?>
                            </div>
                            <div class="row">
                                <p>Name</p>
                                <input type="text" name="fullname" placeholder="Enter Name" id="name" class="form-control">
                                <?php echo !empty($errors['fullname']['required']) ? '<div class="output"">' . $errors['fullname']['required'] . '</p>' : ''; ?>
                                <?php echo !empty($errors['fullname']['min_length']) ? '<div class="output"">' . $errors['fullname']['min_length'] . '</div>' : ''; ?>
                            </div>
                            <div class="row">
                                <p>Content</p>
                                <textarea type="text" name="message" placeholder="Enter note" id="message" class="form-control"></textarea>
                                <?php echo !empty($errors['message']['required']) ? '<div class="output"">' . $errors['message']['required'] . '</div>' : ''; ?>
                                <?php echo !empty($errors['message']['min_length']) ? '<div class="output"">' . $errors['message']['min_length'] . '</div>' : ''; ?>
                            </div>

                            <?php
                            if (isset($result)) {
                                echo '<div class="result">' . $result . '</div>';
                            }
                            ?>
                            <div class="btn">
                                <input name="btn_submit" type="submit" value="Send It">
                            </div>
                            <div class="doc_bot">
                                <p>Send to you,Your contributions are our motivation to become better! Once you send us a message, we will reply to you as soon as possible.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- footer -->
        </div>
        <div class="right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250740.0954564345!2d106.47072669453128!3d10.901736700000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8f6de2998d3%3A0x386cf371269cefa8!2sDIMO%20SPORT%20-%20Shop%20Th%E1%BB%9Di%20Trang%20Th%E1%BB%83%20Thao!5e0!3m2!1svi!2s!4v1711644100038!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <script src="main.js"></script>
    </div>
</body>

</html>