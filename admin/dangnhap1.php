<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Ảnh/logo_truong.png" type="image/x-icon">
    <title>Web Kinh Doanh Đồ Uống</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/BTL_trang_chu.css">
</head>



<?php
// Khai báo sử dụng session
session_start();
 
// Khai báo utf-8 để hiển thị được tiếng Việt
header('Content-Type: text/html; charset=UTF-8');

// Include database connection
include 'connect.php';

// Xử lý khi người dùng nhấn nút Đăng Nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $username = $_POST["login_username"];
    $password = $_POST["login_password"];

    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Kiểm tra quyền của người dùng
        $role = $row['role'];
        
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        if ($role == 'admin') {
           header("Location: index.php");
        } elseif ($role == 'user') {
             $originalUrl = "http://localhost/Bai_Tap_Thuc_Hanh/BTL-Nguy%E1%BB%85n%20Tu%E1%BA%A5n%20Vi%E1%BB%87t/BTL_ban_do_uong/admin/pages/index.php";
            $newUrl = str_replace('/admin/pages', '', $originalUrl);
            header("Location: $newUrl");
        }
        exit();
    } else {
        // Đăng nhập thất bại
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}
?>

<style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .col-md-6 {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            margin: 20px 0;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 15px;
        }

        #btn_dn {
            width: 49%;
        }

        .error-message {
            background-color: #f44336;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <h4>ĐĂNG NHẬP</h4>
            <form id="loginForm" method="post" action="">
                <div class="form-group">
                    <label for="login_username">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="login_username" name="login_username"
                        placeholder="Nhập tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <label for="login_password">Mật khẩu</label>
                    <input type="password" class="form-control" id="login_password" name="login_password"
                        placeholder="Nhập mật khẩu" required>
                </div>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($row) && empty($row)) {
                        echo '<div class="error-message">Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.</div>';
                    }
                ?>
                <a type="button" id="btn_dn" class="btn btn-success" href="dangky.php">Đăng Ký</a>
                <button type="submit" id="btn_dn" class="btn btn-primary">Đăng Nhập</button>
            </form>
        </div>
    </div>
</body>