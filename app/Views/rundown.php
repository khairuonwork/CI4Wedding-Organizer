<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rundown Pernikahan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Overall body styling */
        body {
            padding-top: 40px;
            display: flex;
            flex-direction: row;
            margin: 0;
            background-color: #ffffff; /* White background */
            color: #000000; /* Black text color */
            position: relative;
        }

        /* Sidebar styles */
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

        /* Main content styling */
        .main-content {
            flex: 1; /* Allow the main content to take the available space */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; /* Padding for spacing */
        }

        /* Inner container for centering */
        .content-container {
            max-width: 800px; /* Max width for content */
            width: 100%; /* Allow full width within max */
            background-color: #f8f9fa; /* Light grey background for content */
            border: 1px solid #000000; /* Black border */
            border-radius: 5px; /* Rounded corners */
            padding: 20px; /* Padding for content */
        }

        /* Card header style */
        .card-header {
            background-color: #000000; /* Black background for card header */
            color: #ffffff; /* White text for card header */
        }

        /* Table header style */
        .thead-dark th {
            background-color: #000; /* Black background for table header */
            color: #ffffff; /* White text for table header */
        }
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="mySidebar">
    <a href="<?= base_url('/capture') ?>">Capture</a>
        <a href="<?= base_url('/datatamu') ?>">List Tamu</a>
        <a href="<?= base_url('/rundown') ?>">Rundown</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/roles') ?>">Data Panitia</a>
        <a href="<?= base_url('/warning') ?>">Pesan Darurat</a>
    </div>

    <div class="main-content">
        <div class="content-container">
            <h1 class="text-center mb-5">Rundown Pernikahan</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Waktu</th>
                            <th>Acara</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08:00 - 09:00</td>
                            <td>Kedatangan Tamu</td>
                            <td>Para tamu mulai datang dan mengisi buku tamu</td>
                        </tr>
                        <tr>
                            <td>09:00 - 10:00</td>
                            <td>Akad Nikah</td>
                            <td>Prosesi akad nikah berlangsung, dipimpin oleh penghulu</td>
                        </tr>
                        <tr>
                            <td>10:00 - 10:30</td>
                            <td>Foto Bersama</td>
                            <td>Sesi foto bersama pasangan pengantin dan keluarga</td>
                        </tr>
                        <tr>
                            <td>10:30 - 11:30</td>
                            <td>Resepsi</td>
                            <td>Tamu undangan menikmati hidangan resepsi dan hiburan</td>
                        </tr>
                        <tr>
                            <td>11:30 - 12:00</td>
                            <td>Games dan Hiburan</td>
                            <td>Berbagai acara games dan hiburan untuk memeriahkan suasana</td>
                        </tr>
                        <tr>
                            <td>12:00 - 13:00</td>
                            <td>Penutupan Acara</td>
                            <td>Ucapan terima kasih dan salam perpisahan dari pasangan pengantin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to toggle sidebar visibility
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            if (sidebar.style.left === "0px") {
                sidebar.style.left = "-250px"; // Hide the sidebar
            } else {
                sidebar.style.left = "0px"; // Show the sidebar
            }
        }
    </script>
</body>
</html>
