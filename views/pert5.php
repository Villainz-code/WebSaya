<!DOCTYPE html>
<html lang="en">
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include("../assets/header.php");?>
    <style>
    .navbar {
        position: sticky;
        top: 0;
        background-color: whitesmoke;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
    }

    .navbar-brand{
        font-size: 20px;
        color:rgb(124, 139, 171);
        font-weight: bold;
        text-decoration: none;
    }

    .my-navbar-nav {
        display: flex;
        align-items: center;
        gap: 4px;
        list-style: none;
    }

    .my-nav-item {
        overflow: hidden;
        border: 1px solid transparent;
        border-radius: 6px;
        background-color: aliceblue ;
    }

    .my-nav-link {
        display: block;
        color: black;
        text-decoration: none;
        padding: 10px;
        transition: all 0.2s;
    }

    .my-nav-link:hover {
        color: rgb(69, 69, 69);
        background-color: rgb(240, 248, 255);
    }

    </style>
</html>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php include("../assets/navbar1.php");?>
        <?php include("../assets/sidebar.php");?>
        <div class="app-main">
            <nav class="navbar">
                <a class="navbar-brand" href="#">WebSaya.</a>

                <ul class="my-navbar-nav">
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/main.php">Home</a></li>
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/pert2.php">pert2</a></li>
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/pert3.php">pert3</a></li>
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/pert4.php">pert4</a></li>
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/pert5.php">pert5</a></li>
                    <li class="my-nav-item"><a class="my-nav-link" href="../views/pert6.php">pert6</a></li>
                </ul>
            </nav>
            <h1>Ini adalah halaman Pert5</h1>
        </div>
    </div>
    <?php include("../assets/footer.php");?>
    <?php include("../assets/script.php");?>
</body>
</html>