<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
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
            font-size: 25px;
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
        .carousel-container {
            width: 90%;
            max-width: 900px;
            overflow: hidden;
            background-color: white;
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        h1 {
            color: #000000;
            text-align: center;
        }
        .table {
            width: 100%;
            table-layout: fixed;
            text-align: center;
        }
        .table th, .table td {
            border: 1px solid #000000;
            padding: 30px; 
            font-size: 1.3em; /* Font Size */
            vertical-align: middle;
        }
        .carousel-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

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

    <div class="carousel-container">
        <h1 class="text-center mb-5">Pesan-pesan Tamu</h1>
        <div class="carousel-inner" id="carouselInner">
            <table class="table table-bordered table-striped">
                <tbody>
                    <?php 
                    $count = 0;
                    if (!empty($pesan)) {
                        foreach ($pesan as $index => $message) {
                            if ($count % 5 == 0) echo '<tr>';
                            echo '<td>' . esc($message['pesan_tamu']) . '</td>';
                            $count++;
                            if ($count % 5 == 0) echo '</tr>';
                        }
                    }
                    // 5x5
                    while ($count < 25) {
                        if ($count % 5 == 0) echo '<tr>';
                        echo '<td></td>';
                        $count++;
                        if ($count % 5 == 0) echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            sidebar.style.left = (sidebar.style.left === "0px") ? "-250px" : "0px";
        }
    </script>
</body>
</html>
