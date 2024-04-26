<?php include 'header.php';?>
    <div class="m-3 col-md-4 col-md-offset-4">
        <?php
        if(isset($_POST['email']) ) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            /**
             * các bạn có thể kiểm tra dữ liệu trước khi lưu vào sesssion
             * Kiểm tra định dạng email
             * Mã hóa mật khẩu ..vv..
             **/
            // lưu vào sesssion
            session_start();
//            $_SESSION['login'] = ['email' => $email,'password' => $password];
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "demo_db";

            // Create connection
//            $conn = new mysqli($servername, $username, $password, $dbname);
//
//            // Check connection
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            }
//            echo "Connected successfully";

//            $conn = mysqli_connect("localhost", "root", "", "demo_db");
            $conn = new PDO("mysql:host=localhost;dbname=demo_db;", "root", "");
//            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//            $sql = "INSERT INTO users VALUES(NULL, 'phatnt@gmail.com', '123456')";
//            $sql = "UPDATE users SET password = '999999' WHERE email = 'phatnt@gmail.com'";
//            $sql = "DELETE FROM users WHERE email = 'phatnt@gmail.com'";
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
//            $query = mysqli_query($conn, $sql);
            $stmp = $conn->prepare($sql);
            $stmp->execute([
                    ":email" => $email,
                    ":password" =>$password
            ]);
            $query = $stmp->fetch();
            print_r($query);
            die();
//            if (mysqli_num_rows($query) == 1) {
//                // duyệt dữ liệu để trả về dạng mảng
//                $user = mysqli_fetch_assoc($query);
//                // lưu vào session
//                $_SESSION['login'] = $user;
////                $_SESSION['login'] = 1;
//                // chuyển hướng sang trang profile.php
//                header('location: profile.php');
//            }
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include 'footer.php';?>