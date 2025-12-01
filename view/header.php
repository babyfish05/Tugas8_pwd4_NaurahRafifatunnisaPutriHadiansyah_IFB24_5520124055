<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f8;
        }

        .navbar {
            background: #ff3e83;
            padding: 15px 40px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .menu a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 30px 40px;
        }

        .btn {
            background: #ff3e83;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .card img {
            width: 55px;
            height: 55px;
            background: #dcdcdc;
            border-radius: 10px;
            margin-right: 15px;
        }

        .card-title {
            font-weight: bold;
            margin: 0;
        }

        .card-sub {
            font-size: 13px;
            color: gray;
        }

        .actions a {
            margin-left: 10px;
            color: #555;
        }

        .actions a:hover {
            color: #ff3e83;
        }
    </style>

</head>
<body>

<div class="navbar">
    <div class="logo">
        <b style="font-size: 22px;">🎵 Music Dashboard</b>
    </div>

    <div class="menu">
        <a href="index.php">Dashboard</a>
        <a href="#">Explore</a>
        <a href="#">Genres</a>
        <a href="#">Artist</a>
        <a href="#">Top Album</a>
    </div>

    <div class="profile">
        <i class="fa-solid fa-user"></i> Admin
    </div>
</div>

<div class="container">
