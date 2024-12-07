
<style>
    .danhsach {
        margin-left: 20px;
    }
    
</style>
<div class="danhsach">
        <div id="tencacmuc">
            <i class="fa-solid fa-right-left"></i>
            <label>Liên hệ phản hồi</label>
        </div>
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "connect.php";
    // Retrieve user ID from the session
    $username = $_SESSION["username"];

    // Query to retrieve id_nd based on the username
    $userQuery = "SELECT id_nd FROM users WHERE username = '$username'";
    $result = $conn->query($userQuery);

    if ($result->num_rows > 0) {
        // Fetch the result
        $row = $result->fetch_assoc();
        $id_nd = $row["id_nd"];
        $noidung = $_POST["noidung"];
        // Insert data into the lienhe table
        $insertQuery = "INSERT INTO lienhe (id_nd, phanhoi) VALUES ('$id_nd', '$noidung')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Đã gửi phản hồi thành công!";
        } else {
            echo "Lỗi: " . $insertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Không tìm thấy thông tin người dùng.";
    }

        $conn->close();
    }

?>

        <div class="col-md-4 m-0 p-0 a">
        <form  method="post">
    <!-- Your existing form elements -->
    <label class="form-label">Nội dung</label>
    <div class="form-floating">
        <textarea name="noidung" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Nội dung phản hồi</label>
    </div>

    <button type="submit" name="themsanpham" class="btn btn-success">Gửi phản hồi</button>
</form>
                    </div>
                </div>
        </div>
    </div>
    