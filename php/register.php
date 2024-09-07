<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        /* Centering the content using flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        /* CSS styles for the registration form container */
        .register-section {
            width: 600px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-section h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        /* Form layout using grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Three columns */
            gap: 15px; /* Space between columns */
        }

        .form-grid label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
        }

        .form-grid input,
        .form-grid select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Full-width inputs like password should span all columns */
        .full-width {
            grid-column: span 3; /* Span across all three columns */
        }

        .register-section input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #985b10;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .register-section input[type="submit"]:hover {
            background-color: #6b4710;
        }

        .register-section ul {
            text-align: left;
            font-size: 12px;
            color: #555;
            list-style: decimal inside;
            padding-left: 15px;
        }

        .register-section p {
            font-size: 12px;
            color: #555;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="register-section">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="form-grid">
                <div>
                    <label for="prefix">คำนำหน้า</label>
                    <select id="prefix" name="prefix" required>
                        <option value="" disabled selected>เลือกคำนำหน้า</option> <!-- Placeholder option -->
                        <option value="Mr">นาย</option>
                        <option value="Ms">นาง</option>
                        <option value="Mrs">นางสาว</option>
                    </select>
                </div>

                <div>
                    <label for="firstname">ชื่อ</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div>
                    <label for="lastname">นามสกุล</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div>
                    <label for="sex">เพศ</label>
                    <select id="sex" name="sex" required>
                        <option value="" disabled selected>เลือกเพศ</option> <!-- Placeholder option -->
                        <option value="Male">ชาย</option>
                        <option value="Female">หญิง</option>
                    </select>
                </div>

                <div>
                    <label for="dateofbirth">วันเกิด</label>
                    <input type="date" id="dateofbirth" name="dateofbirth" required>
                </div>

                <div>
                    <label for="citizenID">เลขบัตรประชาชน</label>
                    <input type="text" id="citizenID" name="citizenID" required placeholder="ระบุเลขบัตรประชาชน">
                </div>

                <div>
                    <label for="email">อีเมล์</label>
                    <input type="email" id="email" name="email" required placeholder="example@gamil.com">
                </div>

                <div>
                    <label for="tel">เบอร์โทรศัพท์</label>
                    <input type="tel" id="tel" name="tel" required>
                </div>

                <div class="full-width">
                    <label for="address">ที่อยู่</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="full-width">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" id="password" name="password" required placeholder="ระบุรหัสผ่าน">
                </div>

                <div class="full-width">
                    <label for="confirmPassword">ยืนยันรหัสผ่าน</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="ยืนยันรหัสผ่าน">
                </div>

                <div class="full-width">
                    <p>หมายเหคุ:</p>
                    <ul>
                    <li>รหัสผ่านต้องประกอบด้วยอักษรอย่างน้อย 8 ตัวอักษร</li>
                    <li>ต้องมีอักษรตัวพิมพ์เล็ก (a-z) ตัวพิมพ์ใหญ่ (A-Z) ตัวเลข (0-9) และอักขระพิเศษ</li>
                    <li>อักขระพิเศษประกอบด้วย (!,@,#,$,%,&,*,-,^)</li>
                    </ul>
                </div>

                <div class="full-width">
                    <input type="submit" value="Register">
                </div>
            </div>
        </form>
    </div>

    <script>
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        form.addEventListener('submit', function(event) {
            // Password validation
            const passwordValue = password.value;
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%&*^-]).{8,}$/;

            if (!passwordPattern.test(passwordValue)) {
                alert('Password does not meet the requirements.');
                event.preventDefault();
            }

            // Confirm password match
            if (passwordValue !== confirmPassword.value) {
                alert('Passwords do not match.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
