<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #000000, #ffffff);
            color: #000000;
            padding-top: 40px;
            margin: 0;
            position: relative;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #000;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .hamburger {
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 2;
            color: black;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding-top: 40px;
        }
        .left-pic img {
            max-width: 100%;
            height: 500px;
        }
        .right-text {
            max-width: 30%;
        }
        .content-wrapper {
            padding-top: 210px;
        }
        .about-container {
            margin: 40px auto 60px;
            padding: 20px;
            max-width: 800px;
            text-align: center;
            background-color: #f5f5f5;
            border: 2px solid #000;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        h1, h2 {
            font-family: 'Playfair Display', serif;
            color: #333;
        }
        p {
            font-family: 'Open Sans', sans-serif;
            color: #555;
            line-height: 1.6;
        }
        .card-deck {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .card {
            width: 120px;
            padding: 10px;
            text-align: center;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 5px;
        }
        .card-title {
            font-size: 0.9rem;
            margin-bottom: 2px;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            font-size: 0.8rem;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="mySidebar">
        <a href="<?= base_url('/') ?>">Form Tamu</a>
        <a href="<?= base_url('/capture') ?>">Capture</a>
        <a href="<?= base_url('/datatamu') ?>">List Tamu</a>
        <a href="<?= base_url('/rundown') ?>">Rundown</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/roles') ?>">Data Panitia</a>
        <a href="<?= base_url('/warning') ?>">Pesan Darurat</a>
        <a href="<?= base_url('/pesan') ?>">Pesan Tamu</a>
    </div>

    <div class="container">
        <div class="left-pic">
            <img src="/about-pic.jpg" alt="About Pic">
        </div>
        <div class="right-text">
            <h1>Happy Wedding!</h1>
            <p>Welcome to our special day. We are thrilled to celebrate this beautiful journey with our cherished family and friends. 
            Let’s create unforgettable memories together!</p>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="about-container">
            <h2>About This Wedding Application</h2>
            <p>This application is designed for a minimalist wedding experience focused on family and close friends. The application aims to make organizing the wedding as smooth as possible for everyone involved.</p>
            <p>We believe in celebrating love and connection in a simple yet meaningful way, providing a platform that focuses on what's truly important: bringing family together in an intimate setting. Welcome to a wedding experience centered on joy, simplicity, and loved ones!</p>
        </div>
    </div>

    <div class="card-deck">
        <div class="card">
            <img src="/daffa.png" class="card-img-top" alt="Daffa">
            <div class="card-body">
                <h5 class="card-title">223443007</h5>
                <p class="card-text">Daffa Khairul Ammar</p>
            </div>
        </div>
        <div class="card">
            <img src="/mika.png" class="card-img-top" alt="Emika">
            <div class="card-body">
                <h5 class="card-title">223443010</h5>
                <p class="card-text">Emika Difani T. Barus</p>
            </div>
        </div>
        <div class="card">
            <img src="/gefira.png" class="card-img-top" alt="Gheffira">
            <div class="card-body">
                <h5 class="card-title">223443011</h5>
                <p class="card-text">Gheffira Putri Nur F</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle Sidebar Function
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            sidebar.style.left = sidebar.style.left === "0px" ? "-250px" : "0px";
        }
    </script>
</body>
</html>
