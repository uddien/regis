<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ripple-button.css">
    <title>Registrasi</title>
    <style>       
        .card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 600px;
        padding: 20px;
        border-radius: 10px;
        background-color: <?php echo $bg_color; ?>;
        color: <?php echo $font_color; ?>;
        font-family: Arial, sans-serif;
        }       
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 class="info-title">HASIL REGISTRASI</h2>
        <div class="card">
            <div class="info-container">

                <div class="info-item">
                    <p class="label">Nama</p><p class="colon">:</p><p class="value"><?php echo $nama; ?></p>
                </div>  

                <div class="info-item">
                    <p class="label">Jenis Kelamin</p><p class="colon">:</p><p class="value"><?php echo $jenis_kelamin; ?></p>
                </div>

                <div class="info-item">
                    <p class="label">TTL</p><p class="colon">:</p><p class="value"><?php echo $tl; ?>, <?php echo $tgl_format; ?></p>
                </div>

                <div class="info-item">
                    <p class="label">Alamat</p><p class="colon">:</p><p class="value"><?php echo $alamat; ?></p>
                </div>

                <div class="info-item">
                    <p class="label">Email</p><p class="colon">:</p><p class="value"><?php echo $email; ?></p>
                </div>

                <div class="info-item">
                    <p class="label">No. HP</p><p class="colon">:</p><p class="value"><?php echo $no_hp; ?></p>
                </div>

                <div class="info-item">
                    <p class="label">Hobi</p><p class="colon">:</p><p class="value"><?php echo $hobi; ?></p>
                </div>

            </div>
            <img src="<?php echo $foto_dir; ?>" alt="Foto Diri" width="140" height="150">
        </div>
        <div class="button-area button-area-result">
            <a href="input.php"><button class="for_ripple btn" value="HOME" >HOME</button></a>
        </div>

    </div>
</body>
</html>