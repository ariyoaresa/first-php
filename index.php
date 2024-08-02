<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .hero {
            margin-bottom: 20px;
        }
        .hero h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .hero p {
            margin: 10px 0 20px;
            font-size: 1.2em;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
        }
        .cta-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1>Welcome to Our Landing Page</h1>
            <p>Your journey to a better experience starts here.</p>
        </div>
        <a href="contact.php" class="cta-button">Contact Us</a>
    </div>
</body>
</html>
