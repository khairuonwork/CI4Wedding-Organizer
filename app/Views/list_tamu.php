<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            flex-direction: row;
            margin: 0;
            position: relative;
        }
        /* Sidebar */
        .sidebar {
            height: 100%; /* Full-height */
            width: 250px; /* Width of the sidebar */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */ 
            top: 0; /* Stay at the top */
            left: -250px; /* Initially hidden */
            background-color: #000; /* Black background */
            overflow-x: hidden; /* Disable horizontal scroll */
            transition: 0.5s; /* Transition effect */
            padding-top: 60px; /* Place the menu below the top */
        }

        .sidebar a {
            padding: 10px 15px; /* Padding for links */
            text-decoration: none; /* No underline */
            font-size: 25px; /* Larger font size */
            color: white; /* White text */
            display: block; /* Make links appear below each other */
            transition: 0.3s; /* Transition effect for hover */
        }

        .sidebar a:hover {
            background-color: #575757; /* Darker background on hover */
        }
          /* Hamburger menu button */
          .hamburger {
            font-size: 30px; /* Size of the hamburger icon */
            cursor: pointer; /* Pointer cursor on hover */
            position: absolute; /* Position it at the top right */
            top: 15px; /* Distance from top */
            right: 15px; /* Distance from right */
            z-index: 2; /* Sit above sidebar */
            color: black; /* Black color for hamburger */
        }
        h1 {
            color: #000000;
        }
        thead {
            background-color: #000000;
            color: white;
        }
        .table {
            border: 1px solid #000000;
        }
        .table th, .table td {
            border: 1px solid #000000;
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
    <div class="container mt-5">
        <h1 class="text-center mb-5">Daftar Kehadiran Tamu</h1>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Tamu</th>
                        <th>Relasi Tamu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($datatamu)) : ?>
                        <?php foreach ($datatamu as $tamu) : ?>
                            <tr>
                                <td><?= esc($tamu['nama_tamu']) ?></td>
                                <td><?= esc($tamu['relasi_tamu']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr><td colspan="2">No guests found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            if (sidebar.style.left === "0px") {
                sidebar.style.left = "-250px"; 
            } else {
                sidebar.style.left = "0px"; 
            }
        }
    </script>
</body>
</html>
