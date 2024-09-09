<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Styling for the background */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Nunito Sans';
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4880FF;
        }

        /* Ensuring that all form elements are aligned to the left */
        .login-box form {
            text-align: left; /* This ensures that all text inside the form is aligned to the left */
        }

        /* Label specific styling */
        .login-box label {
            display: block; /* Makes the label a block element, forcing it to occupy the full width */
            margin-bottom: 5px; /* Adds space below the label */
            font-weight: 600; /* Makes the label a bit bold */
        }

        /* Styling for the login box */
        .login-box {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 380px;
            padding: 40px;
            text-align: center;
        }

        /* Title styling */
        .login-box h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #202224;
        }

        /* Subtitle styling */
        .login-box p {
            margin-bottom: 30px;
            color: #6b6b6b;
            font-size: 14px;
        }

        /* Input field styling */
        .login-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #d0d0d0;
            border-radius: 8px;
            font-size: 14px;
        }

        /* Checkbox and link styling */
        .login-box .checkbox-link {
            display: flex;
            justify-content: space-between;
            align-items: left;
            margin-bottom: 20px;
            font-size: 12px;
            color: #6b6b6b;
        }

        .login-box .checkbox-link a {
            color: #4880FF;
            text-decoration: none;
        }

        /* Ensures that the checkbox and its label are in the same line */
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 8px; /* Adds a small gap between the checkbox and the label text */
        }

        /* Style for the checkbox */
        .checkbox-container input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }

        /* Ensures label text is properly aligned */
        .checkbox-container label {
            font-size: 14px;
            font-weight: normal;
        }

        /* Button styling */
        .login-box button {
            background-color: #4880FF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        /* Responsive adjustment */
        @media screen and (max-width: 480px) {
            .login-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h1>LOGIN</h1>
        <p>Masukkan Email dan Password Anda</p>
        
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" required>
            
            <div class="checkbox-link">
                <!-- Wrap checkbox and label in a container for proper alignment -->
                <div class="checkbox-container">
                    <input type="checkbox" id="showPassword">
                    <label for="showPassword">Show Password</label>
                </div>
                <a href="#">Forget Password?</a>
            </div>
            
            <button type="submit">Sign In</button>
        </form>

</body>
</html>
