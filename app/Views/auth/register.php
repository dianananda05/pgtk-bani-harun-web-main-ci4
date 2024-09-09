<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Nunito Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4880FF;
        }

        .login-box {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 380px;
            padding: 40px;
            text-align: center;
        }

        .login-box h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #202224;
        }

        .login-box p {
            margin-bottom: 30px;
            color: #6b6b6b;
            font-size: 14px;
        }

        .login-box form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        .login-box label {
            align-self: flex-start;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .login-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #d0d0d0;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .checkbox-link {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
            color: #6b6b6b;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
        }

        .checkbox-container input[type="checkbox"] {
            margin: 0;
            margin-right: 8px;
            width: 16px;
            height: 16px;
        }

        .checkbox-container label {
            margin: 0;
            font-weight: normal;
        }

        .login-box button {
            background-color: #4880FF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .signin-link {
            font-size: 14px;
            text-align: center;
            width: 100%; /* Ensure the container takes full width */
            margin-top: 20px; /* Adjust top margin if needed */
        }

        @media screen and (max-width: 480px) {
            .login-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>REGISTRASI</h1>
        <p>Buat Akun Untuk Masuk ke Menu Dashboard</p>
        
        <form action="/auth/registerUser" method="post">
            <?= csrf_field() ?>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" required>

            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" required>
            
            <div class="checkbox-link">
                <div class="checkbox-container">
                    <input type="checkbox" id="showPassword">
                    <label for="showPassword">Show Password</label>
                </div>
            </div>
            
            <button type="submit">Sign Up</button>
            
            <div class="signin-link">
                Already have an account? <a href="/login">Sign In</a>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showPasswordCheckbox = document.getElementById('showPassword');
            const passwordInput = document.getElementById('password');

            showPasswordCheckbox.addEventListener('change', function() {
                passwordInput.type = this.checked ? 'text' : 'password';
            });
        });
    </script>
</body>
</html>