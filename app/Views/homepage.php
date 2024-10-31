<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            display: flex;
            flex-direction: row;
            margin: 0;
            background-color: #ffffff;
            color: #000000;
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

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .content-container {
            max-width: 600px;
            width: 100%;
            background-color: #f8f9fa;
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 20px;
        }

        .card-header {
            background-color: #000000;
            color: #ffffff;
        }
        
        .btn-primary {
            background-color: #000000; 
            border: none; 
            color: #ffffff; 
        }

        .btn-primary:hover {
            background-color: #555555; 
        }
        
        .btn-secondary {
            background-color: #ffffff; 
            border: 1px solid #000000;
            color: #000000;
        }

        .btn-secondary:hover {
            background-color: #f0f0f0;
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

    <div class="main-content">
        <div class="content-container">
            <div class="text-center">
                <h1 class="display-4">Happy Wedding!</h1>
                <p class="lead">Please fill out the guest form below.</p>
            </div>

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
                            <div class="mb-3">
                                <label for="inputNama" class="form-label">Nama</label>
                                <input type="text" name="Nama" class="form-control" id="inputNama" placeholder="Masukkan Nama.." required>
                            </div>
                            <div class="mb-3">
                                <label for="inputRelasi" class="form-label">Relasi</label>
                                <select name="Relasi" class="form-control" id="inputRelasi" required>
                                    <option value="" disabled selected>Pilih Relasi...</option>
                                    <option value="Keluarga">Keluarga</option>
                                    <option value="Teman">Teman</option>
                                    <option value="Perusahaan">Perusahaan</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="inputPesan" class="form-label">Beri Pesan</label>
                                <textarea name="Pesan" class="form-control" id="inputPesan" rows="4" placeholder="Silahkan berikan pesan kepada pengantin.." required></textarea>
                            </div>

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
