<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #a0d8ef, #3d7c91); 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 450px;
            padding: 40px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .container:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .container:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 400px;
            height: 400px;
            background: rgba(61, 124, 145, 0.15); 
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            animation: rotate 10s infinite linear;
        }

        @keyframes rotate {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        h1 {
            position: relative;
            margin-bottom: 20px;
            color: #3d7c91; 
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #3d7c91; 
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
            z-index: 2;
            margin-left: -15px;
        }

        input:focus {
            border-color: #2a4d4f; 
            outline: none;
            box-shadow: 0 0 8px rgba(42, 77, 79, 0.5);
        }

        button {
            width: 480px;
            height: 50px;
            background-color: #3d7c91; 
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-left: -15px;
            transition: background-color 0.3s, transform 0.3s;
            z-index: 2;
            position: relative;
            overflow: hidden;
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: transform 0.8s ease;
            transform: scale(0);
            z-index: 0;
        }

        button:hover::before {
            transform: scale(1);
        }

        button:hover {
            background-color: #2a4d4f; 
            transform: translateY(-3px);
        }

        .error-messages {
            color: #d9534f;
            margin-top: 30px;
            font-size: 14px;
            margin-left: -25px;
            z-index: 2;
            position: relative;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 30px;
            }
            button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        @yield('content')
        <div class="error-messages" style="display: none;">Xəta mesajı burada görünəcək.</div>
    </div>
</body>
</html>
