<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background-color: #3b82f6;
        }
        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 24rem;
        }
        .error-box {
            background-color: #3b82f6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .browser-dots {
            background-color: white;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            padding: 0.5rem;
            display: flex;
            justify-content: flex-start;
            gap: 0.375rem;
        }
        .dot {
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
        }
        .dot-red { background-color: #ef4444; }
        .dot-yellow { background-color: #eab308; }
        .dot-green { background-color: #22c55e; }
        .error-code {
            color: #facc15;
            font-size: 6rem;
            font-weight: bold;
            margin: 1rem 0;
        }
        .decorative-line {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .line {
            width: 2rem;
            height: 0.25rem;
            background-color: white;
            border-radius: 0.25rem;
        }
        .dot-white {
            width: 0.25rem;
            height: 0.25rem;
            background-color: white;
            border-radius: 50%;
        }
        .message {
            color: #facc15;
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .refresh-button {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .refresh-button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="error-box">
                <div class="browser-dots">
                    <div class="dot dot-red"></div>
                    <div class="dot dot-yellow"></div>
                    <div class="dot dot-green"></div>
                </div>
                <h1 class="error-code">404</h1>
                <div class="decorative-line">
                    <div class="line"></div>
                    <div class="dot-white"></div>
                    <div class="dot-white"></div>
                    <div class="dot-white"></div>
                </div>
            </div>
            <p class="message">Looks like you've got lost....</p>
            <button class="refresh-button" onclick="location.reload()">Refresh it !</button>
        </div>
    </div>
</body>
</html>