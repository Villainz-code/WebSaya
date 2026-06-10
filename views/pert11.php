<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 11 - Cek Usia</title>
    <?php include("../assets/header.php");?>
    <style>
        .container {
            padding: 30px;
            max-width: 600px;
            background: white;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .container form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .container label {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .container input[type="number"],
        .container input[type="submit"] {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .container input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f3ff;
            border-left: 4px solid #2196F3;
            border-radius: 4px;
        }
    </style>
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
            echo "<div class='result'>";
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
            echo "<br>Usia Anda: $usia tahun.";
            echo "<br>Anda termasuk kategori: <strong>$Kategori</strong>";
            echo "</div>";
            }
        ?>
</div>    
</div>    
</div>

    <?php include("../assets/footer.php");?>
    <?php include("../assets/script.php");?>
</body>
</html>