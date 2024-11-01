<?php
session_start();
if (!isset($_SESSION['login_time'])) {
    header('Location: lndex.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .session-info-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .session-info-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .session-info-container p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="session-info-container">
        <h2>Session Information</h2>
        <p>Login Time: <?php echo $_SESSION['login_time']; ?></p>
    </div>
</body>
</html>
