<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .member-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-align: left;
        }
        .member-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?= esc($group) ?></h1> <!-- Menggunakan esc() untuk menghindari XSS -->
    <h2>Anggota Kelompok</h2>

    <?php foreach ($members as $member): ?>
        <div class="member-card">
        <img src="<?= base_url('uploads/' . esc($member['photo'])) ?>" alt="<?= esc($member['name']) ?>" class="member-photo">
            <div>
                <p><strong>NIM  :</strong> <?= esc($member['nim']) ?></p>
                <p><strong>Nama :</strong> <?= esc($member['name']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
