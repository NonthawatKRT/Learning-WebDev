<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Centering the content using flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            margin: 0;
            background-color: #f4f4f4;
        }

        /* CSS styles for the login section */
        .login-section {
            width: 400px; /* Increased width */
            padding: 30px; /* Increased padding */
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-section h2 {
            margin-bottom: 25px;
            color: #333;
        }

        .login-section label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .login-section input[type="text"],
        .login-section input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-section input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #985b10;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-section input[type="submit"]:hover {
            background-color: #6b4710;
        }

        /* Flexbox for positioning forgot-password and register links */
        .login-section .link-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .login-section a {
            color: black;
            text-decoration: none;
        }

        .login-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-section">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="citizenID">เลขบัตรประชาชน</label>
            <input type="text" id="citizenID" name="citizenID" placeholder="ระบุเลขรหัสประชาชน 13 หลัก" required>

            <label for="password">รหัสผ่าน</label>
            <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>

            <!-- Flexbox for Forgot Password and Register -->
            <div class="link-container">
                <div class="register">
                    <a href="register.php">สมัครสมาชิก</a>
                </div>
                <div class="forgot-password">
                    <a href="forgot_password.php">ลืมรหัสผ่าน?</a>
                </div>
            </div>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
