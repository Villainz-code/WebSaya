<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">
    <?php include("../assets/navbar1.php"); ?>
    <?php include("../assets/sidebar.php");?>
    <div class="app-main">
        <div class="container"> 
        <form action="" method="post">
            <label for="usia">Masukkan Usia Anda:</label>
            <input type="number" id="usia" name="usia" required>
            <input type="submit" value="Cek Usia">
        </form>

        <?php
            if (isset($_POST['usia'])) {
            $usia = $_POST['usia'];
            echo "Usia Anda: " . $usia;
            if ($usia < 13) {
                $Kategori = "Anak-anak";
            } 
            elseif ($usia >= 13 && $usia < 18) {
                $Kategori = "Remaja";
            }
            elseif ($usia >= 18 && $usia < 60) {
                $Kategori = "Dewasa";
            } 
            else {
                $Kategori = "Lansia";
            }
            echo "Usia Anda: $usia tahun.";
            echo "<br>Anda termasuk kategori: $Kategori";
            }
        ?>
        </div>    
    </div>    
</div>
</body>
</html>