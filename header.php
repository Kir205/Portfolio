<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        .navbar {
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-align: center;
            padding: 0 20px;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar a:hover { background-color: #444; color: #fff; }
        body { color: white; text-align: center; padding-top: 100px; font-family: Arial, sans-serif; }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="aboutme.php">About Me</a>
        <a href="achievements.php">Achievements</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </div>
