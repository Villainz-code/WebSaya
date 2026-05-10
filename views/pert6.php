<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../assets/header.php");?>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 450px;
            margin: 40px auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #222;
        }

        .deskripsi {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .pilihan {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .pilihan input {
            margin-right: 8px;
        }

        .pilihan label {
            margin: 0;
            font-weight: normal;
        }

        button {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            background-color: #007bff;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .reset {
            background-color: #dc3545;
            margin-left: 8px;
        }

        .reset:hover {
            background-color: #a71d2a;
        }
    </style>
</head>

<body   class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php include("../assets/navbar1.php");?>
        <?php include("../assets/sidebar.php");?>
        <div class="app-main">
            <div class="container">
                <h1>Formulir Registrasi</h1>
            <p class="deskripsi">Silakan isi data di bawah ini untuk melakukan pendaftaran</p>

            <form action="proses-pendaftaran.php" method="post">

                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                </div>

                <!-- Username -->
                <div class="form-group">
                    <label for="NIM">NIM :</label>
                    <input type="text" id="NIM" name="NIM" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="form-group">
                    <label>Jenis Kelamin :</label>
                    <div class="pilihan">
                        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">
                        <label for="laki">Laki-laki</label>
                    </div>
                    <div class="pilihan">
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>

                <!-- Minat -->
                <div class="form-group">
                    <label>Minat :</label>
                    <div class="pilihan">
                        <input type="checkbox" id="web" name="minat[]" value="Web">
                        <label for="web">Pemrograman Web</label>
                    </div>
                    <div class="pilihan">
                        <input type="checkbox" id="mobile" name="minat[]" value="Mobile">
                        <label for="mobile">Aplikasi Mobile</label>
                    </div>
                    <div class="pilihan">
                        <input type="checkbox" id="data" name="minat[]" value="Data">
                        <label for="data">Data Science</label>
                    </div>
                    <div class="pilihan">
                        <input type="checkbox" id="ai" name="minat[]" value="AI">
                        <label for="ai">Kecerdasan Buatan</label>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea id="alamat" name="alamat" rows="3"></textarea>
                </div>

                <!-- Tombol Submit & Reset -->
                <button type="submit">Daftar</button>
                <button type="reset" class="reset">Reset</button>
            </form>
            </div>
        </div>
    </div>
    <?php include("../assets/footer.php");?>
    <?php include("../assets/script.php");?>
</body>

</html>