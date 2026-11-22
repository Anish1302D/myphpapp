
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anish Mogam | PHP</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 350px;
            padding: 40px;
            text-align: center;
            background: #1e293b;
            border-radius: 20px;
            border: 1px solid #334155;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #6366f1, #06b6d4);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            font-weight: bold;
        }

        h1 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .role {
            color: #94a3b8;
            margin-bottom: 25px;
        }

        .message {
            background: #0f172a;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            color: #cbd5e1;
        }

        .version {
            display: inline-block;
            padding: 6px 12px;
            background: #164e3b;
            color: #4ade80;
            border-radius: 20px;
            font-size: 12px;
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #64748b;
        }
    </style>
</head>

<body>

    <?php
        $name = "Anish Mogam";
        $version = "v0.1";
    ?>

    <div class="card">

        <div class="avatar">
            <?php echo "A"; ?>
        </div>

        <h1>
            <?php echo $name; ?>
        </h1>

        <p class="role">Computer Science Student & Developer</p>

        <div class="message">
            <?php
                echo "Hello World!";
            ?>
        </div>

        <span class="version">
            PHP Version <?php echo $version; ?>
        </span>

        <div class="footer">
            Built with PHP & HTML
        </div>

    </div>

</body>
</html>
