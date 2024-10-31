<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            margin: 0;
            display: flex;
            background-color: #ffffff;
            color: #000000;
        }

        /* Sidebar Styling */
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
            font-size: 20px;
            color: white;
            display: block;
            transition: 0.3s;
            text-decoration: none;
        }

        /* Hamburger Icon */
        .hamburger {
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 15px;
            color: black;
        }

        /* Table Styling */
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

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="text-center mb-5">Pesan Darurat</h1>

        <!-- Add Warning Form -->
        <form action="/wedding/addWarning" method="post" class="form-row mb-3">
            <div class="col">
                <input type="text" name="pelaporwarning" class="form-control" placeholder="Pelapor Warning" required>
            </div>
            <div class="col">
                <input type="text" name="detailwarning" class="form-control" placeholder="Detail Warning" required>
            </div>
            <div class="col">
                <input type="text" name="statuswarning" class="form-control" placeholder="Status Warning" required>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

        <!-- Warning Table -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelapor</th>
                        <th>Detail</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($warning as $index => $item) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($item['pelapor_warning']) ?></td>
                            <td><?= esc($item['detail_warning']) ?></td>
                            <td><?= esc($item['status_warning']) ?></td>
                            <td>
                                <form action="/wedding/updateWarning/<?= $item['id_warning'] ?>" method="post" style="display: inline-block;">
                                    <input type="text" name="pelaporwarning" value="<?= esc($item['pelapor_warning']) ?>" required>
                                    <input type="text" name="detailwarning" value="<?= esc($item['detail_warning']) ?>" required>
                                    <input type="text" name="statuswarning" value="<?= esc($item['status_warning']) ?>" required>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                                <a href="/wedding/deleteWarning/<?= $item['id_warning'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
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
