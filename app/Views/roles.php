<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles Panitia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            display: flex;
            flex-direction: row;
            margin: 0;
            background-color: #ffffff; /* White background */
            color: #000000; /* Black text color */
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
        <h1 class="text-center mb-5">Daftar Panitia</h1>

        <form action="/wedding/addPanitia" method="post" class="form-row">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="col">
                <input type="text" name="tugas" class="form-control" placeholder="Tugas" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tugas</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($panitia as $index => $item) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($item['nama_panitia']) ?></td>
                            <td><?= esc($item['tugas_panitia']) ?></td>
                            <td>
                                <form action="/wedding/updatePanitia/<?= $item['id_panitia'] ?>" method="post" style="display: inline-block;">
                                    <input type="text" name="nama" value="<?= esc($item['nama_panitia']) ?>" required>
                                    <input type="text" name="tugas" value="<?= esc($item['tugas_panitia']) ?>" required>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                                <a href="/wedding/deletePanitia/<?= $item['id_panitia'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
                sidebar.style.left = "-250px"; 
            } else {
                sidebar.style.left = "0px";
            }
        }
    </script>
</body>
</html>
