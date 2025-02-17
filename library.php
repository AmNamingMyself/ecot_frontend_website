
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #2d3748;
        }

        .container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: bounce 2s infinite;
        }

        .message {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #4a5568;
        }

        .construction-icon {
            font-size: 5rem;
            margin-bottom: 2rem;
            display: inline-block;
            animation: rotate 3s infinite linear;
        }

        .progress-bar {
            width: 100%;
            height: 20px;
            background-color: #edf2f7;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .progress {
            width: 30%;
            height: 100%;
            background: linear-gradient(90deg, #4299e1, #667eea);
            border-radius: 10px;
            animation: progress 2s ease-in-out infinite alternate;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes progress {
            from {
                width: 30%;
            }
            to {
                width: 70%;
            }
        }

        .contact {
            background-color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        .contact a {
            color: #4299e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact a:hover {
            color: #2b6cb0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="construction-icon">🏗️</div>
        <h1>Under Construction</h1>
        <div class="message">
            We're working hard to build something amazing! Our team is crafting a beautiful new website that will be worth the wait.
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    
    </div>
</body>
</html>