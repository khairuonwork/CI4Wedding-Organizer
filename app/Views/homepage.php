<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
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

        /* Style for the sidebar */
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
            max-width: 600px; /* Max width for content */
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
        
        /* Button styles */
        .btn-primary {
            background-color: #000000; /* Black background for primary buttons */
            border: none; /* Remove border */
            color: #ffffff; /* White text for buttons */
        }

        .btn-primary:hover {
            background-color: #555555; /* Dark grey on hover */
        }
        
        .btn-secondary {
            background-color: #ffffff; /* White background for secondary button */
            border: 1px solid #000000; /* Black border for secondary button */
            color: #000000; /* Black text for button */
        }

        .btn-secondary:hover {
            background-color: #f0f0f0; /* Light grey on hover */
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
        <a href="<?= base_url('/capture') ?>">Capture</a>
        <a href="<?= base_url('/datatamu') ?>">List Tamu</a>
        <a href="<?= base_url('/rundown') ?>">Rundown</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/roles') ?>">Data Panitia</a>
        <a href="<?= base_url('/warning') ?>">Pesan Darurat</a>
    </div>

    <div class="main-content">
        <div class="content-container">
            <div class="text-center">
                <h1 class="display-4">Happy Wedding!</h1>
                <p class="lead">Please fill out the guest form below.</p>
            </div>

            <!-- success / error messages -->
            <div class="container mt-3">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
            </div>

            <div class="container mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        Buku Tamu
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/') ?>" method="post">
                            <!-- Nama Field -->
                            <div class="mb-3">
                                <label for="inputNama" class="form-label">Nama</label>
                                <input type="text" name="Nama" class="form-control" id="inputNama" placeholder="Masukkan Nama.." required>
                            </div>
                            <!-- Relasi Dropdown -->
                            <div class="mb-3">
                                <label for="inputRelasi" class="form-label">Relasi</label>
                                <select name="Relasi" class="form-control" id="inputRelasi" required>
                                    <option value="" disabled selected>Pilih Relasi...</option>
                                    <option value="Keluarga">Keluarga</option>
                                    <option value="Teman">Teman</option>
                                    <option value="Perusahaan">Perusahaan</option>
                                </select>
                            </div>
                            
                            <!-- Beri Pesan Section -->
                            <div class="mb-3">
                                <label for="inputPesan" class="form-label">Beri Pesan</label>
                                <textarea name="Pesan" class="form-control" id="inputPesan" rows="4" placeholder="Silahkan berikan pesan kepada pengantin.." required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-3 text-center">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
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