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
include 'connect.php';

$errorMessage = "";
$successMessage = "";
$role="user";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernamedk = mysqli_real_escape_string($conn, $_POST['username']); 
    $passworddk = mysqli_real_escape_string($conn, $_POST['password']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Check if any required field is empty
    if (empty($usernamedk) || empty($passworddk) || empty($fullname) || empty($phone) || empty($address)) {
        $errorMessage = "Vui lòng điền đầy đủ thông tin.";
    } else {
        // Check if the combination of username, email, and phone already exists
        $checkUsernameQuery = "SELECT * FROM users WHERE username = '$usernamedk' OR phone = '$phone'";
        $result = $conn->query($checkUsernameQuery);

        if ($result->num_rows > 0) {
            $errorMessage = "Thông tin đã được người khác đăng ký.";
        } else {
            // If the combination is unique, proceed with registration
            $sql = "INSERT INTO users (username, password, fullname, phone, address, role) VALUES ('$usernamedk', '$passworddk', '$fullname', '$phone', '$address','$role')";

            if ($conn->query($sql) === TRUE) {
                $successMessage = "Đăng ký thành công.";
            } else {
                $errorMessage = "Có lỗi xảy ra trong quá trình đăng ký. " . $conn->error;
            }
        }
    }
}

$conn->close();
?>


<style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            
        }

        .danhsach {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            padding-right: 50px;
        }

        #tencacmuc {
            background-color: #007bff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .noidung {
            margin-top: 20px;

        }

        h4 {
            text-align: center;
            margin: 20px 0;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        #btn_dk {
            width: 49%;
        }

        .message-container {
            margin-top: 20px;
            
        }

        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error-message {
            background-color: #f44336;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    #btn_dk_back {
        width: 49%;
        
    }

    
    </style>
<body>
    
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="danhsach">
                
                <div class="noidung container mt-3 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-md-12 m-0 p-0">
                            <h4>ĐĂNG KÍ</h4>
                            <form id="registrationForm" method="post" action="">
                                <div class="form-group">
                                    <label for="username">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Nhập tên đăng nhập" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Nhập mật khẩu" required>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Nhập họ tên" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="number" class="form-control" id="phone" name="phone"
                                                placeholder="Nhập số điện thoại" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Địa chỉ</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Nhập địa chỉ" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="terms" required>
                                    <label for="terms">Đồng ý với Điều Khoản của website</label>
                                </div>
                                <button type="button" id="btn_dk" class="btn btn-success"
                                    onclick="checkAgreement()">Đăng ký</button>
                                    <a type="button" id="btn_dk" class="btn btn-primary" href="dangnhap1.php">Đăng Nhập</a>
                            </form>
                        </div>
                    </div>
                    <!-- Display success or error message within the styled div -->
                    <div class="message-container">
                        <?php if (!empty($successMessage)) : ?>
                            <div class="success-message"><?php echo $successMessage; ?></div>
                        <?php elseif (!empty($errorMessage)) : ?>
                            <div class="error-message"><?php echo $errorMessage; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkAgreement() {
            var termsCheckbox = document.getElementById("terms");
            if (termsCheckbox.checked) {
                document.getElementById("registrationForm").submit();
            } else {
                alert("Vui lòng đồng ý với Điều Khoản của website.");
            }
        }
    </script>
</body>
</div>
</div>
