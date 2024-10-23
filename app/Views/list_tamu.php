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
            background-color: #ffffff; /* White background */
            color: #000000; /* Black text color */
            position: relative;
        }
        h1, h2 {
            color: #000000; /* Black text for headers */
        }
        thead {
            background-color: #000000; /* Black background for thead */
            color: white; /* White text for thead */
        }
        .table {
            border: 1px solid #000000; /* Black border for table */
        }
        .table th, .table td {
            border: 1px solid #000000; /* Black border for table cells */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa; /* Light grey for odd rows */
        }
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff; /* White for even rows */
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
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="mySidebar">
        <a href="<?= base_url('/capture') ?>">Photo</a>
        <a href="<?= base_url('/list_tamu') ?>">List Tamu</a>
        <a href="<?= base_url('/rundown') ?>">Rundown</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/') ?>">Next Feature</a>
    </div>
    
    <div class="container mt-5">
        <h1 class="text-center mb-5">Daftar Kehadiran Tamu</h1>
        
        <!-- Tamu yang sudah hadir -->
        <h2 class="mb-3">Tamu yang sudah hadir</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Relasi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example data, replace with actual values from your backend -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Teman</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Keluarga</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tamu yang belum hadir -->
        <h2 class="mt-5 mb-3">Tamu yang belum hadir</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Relasi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example data, replace with actual values from your backend -->
                    <tr>
                        <td>1</td>
                        <td>Michael Lee</td>
                        <td>Perusahaan</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Susan Wong</td>
                        <td>Teman</td>
                    </tr>
                </tbody>
            </table>
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
