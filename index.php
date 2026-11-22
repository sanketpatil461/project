
<?php
$website_name = "My First PHP Website";
$message = "Welcome to my website!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $website_name; ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #1e293b;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #334155;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 40px 20px;
            text-align: center;
            background: white;
            border-radius: 10px;
        }

        h2 {
            color: #2563eb;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        button {
            margin-top: 25px;
            padding: 12px 25px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        footer {
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
        }
    </style>
</head>

<body>

    <header>
        <h1><?php echo $website_name; ?></h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="container">
        <h2><?php echo $message; ?></h2>

        <p>
            This is my first PHP website.
            I am learning PHP, HTML, CSS and web development.
        </p>

        <button onclick="alert('Hello! Welcome to my website.')">
            Click Here
        </button>

        <div id="about" style="margin-top:40px;">
            <h2>About Us</h2>
            <p>We are learning and building simple web applications using PHP.</p>
        </div>

        <div id="contact" style="margin-top:40px;">
            <h2>Contact Us</h2>
            <p>Email: admin@example.com</p>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My First PHP Website. All Rights Reserved.</p>
    </footer>

</body>
</html>

