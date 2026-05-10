<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../assets/header.php");?>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php include("../assets/navbar1.php");?>
        <?php include("../assets/sidebar.php");?>
        <div class="app-main">
            <h1>Formulir Pendaftaran</h1>
        <p>Silahkan lengkapi data di bawah ini</p>
        
        <form action="proses_pendaftaran.php" method="post">
            <label>Nama Lengkap:</label><br>
            <input type="text" name="nama" required><br><br>
            
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>
            
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            
            <label>Alamat:</label><br>
            <textarea name="alamat" rows="4" cols="50"></textarea><br><br>
            
            <input type="submit" value="Daftar">
        </form>
        </div>
    </div>
    <?php include("../assets/footer.php");?>
    <?php include("../assets/script.php");?>
</body>
</html>