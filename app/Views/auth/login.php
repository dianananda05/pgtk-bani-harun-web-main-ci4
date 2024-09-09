<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            width: 380px; /* Consistent width with the register form */
            padding: 40px;
            box-sizing: border-box;
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

        .input-container {
            width: 100%;
            max-width: 300px; /* Consistent max-width with the register form */
            margin: 0 auto;
            text-align: left;
        }

        .input-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
        }

        .input-container input {
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
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #6b6b6b;
            margin-bottom: 20px;
            max-width: 300px; /* Consistent max-width with the register form */
            margin-left: auto;
            margin-right: auto;
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
            font-size: 14px;
            font-weight: normal;
        }

        .checkbox-link a {
            color: #4880FF;
            text-decoration: none;
        }

        .login-box button {
            background-color: #4880FF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            max-width: 300px; /* Consistent max-width with the register form */
            font-size: 16px;
            cursor: pointer;
        }

        @media screen and (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>LOGIN</h1>
        <p>Masukkan Email dan Password Anda</p>
        
        <form>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>
            </div>
            
            <div class="checkbox-link">
                <div class="checkbox-container">
                    <input type="checkbox" id="showPassword">
                    <label for="showPassword">Show Password</label>
                </div>
                <a href="#">Forget Password?</a>
            </div>
            
            <button type="submit">Sign In</button>
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
