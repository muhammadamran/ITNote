<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="assets/img/logo/rskg.png">
            </div>
        </a>
        <a href="index.php" class="simple-text logo-normal">
            <b>BED MONITORING</b>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="fa fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <?php if ($_SESSION['role'] == 'superadmin') { ?>
                <li align="center"><b><font style="color: #b4b2af;">ADMINISTRATION SECTION</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                    <a href="index.php?m=user&s=user">
                        <i class="fa fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <hr>
                <li align="center"><b><font style="color: #b4b2af;">BRIDGING</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'bedmonitoring' ? 'active' : '' ?>">
                    <a href="index.php?m=bedmonitoring&s=bedmonitoring">
                        <i class="fa fa-clipboard"></i>
                        <p>Ketersediaan Kamar</p>
                    </a>
                </li>
                <hr>
                <li align="center"><b><font style="color: #b4b2af;">KODE</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'ruangan' ? 'active' : '' ?>">
                    <a href="index.php?m=ruangan&s=ruangan">
                        <i class="fa fa-list-alt"></i>
                        <p>Kode Ruangan</p>
                    </a>
                </li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'kelas' ? 'active' : '' ?>">
                    <a href="index.php?m=kelas&s=kelas">
                        <i class="fa fa-list-alt"></i>
                        <p>Kode Kelas</p>
                    </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['role'] == 'admin') { ?>
                <li align="center"><b><font style="color: #b4b2af;">ADMINISTRATION SECTION</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                    <a href="index.php?m=user&s=user">
                        <i class="fa fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <hr>
                <li align="center"><b><font style="color: #b4b2af;">BRIDGING</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'bedmonitoring' ? 'active' : '' ?>">
                    <a href="index.php?m=bedmonitoring&s=bedmonitoring">
                        <i class="fa fa-clipboard"></i>
                        <p>Ketersediaan Kamar</p>
                    </a>
                </li>
                <hr>
                <li align="center"><b><font style="color: #b4b2af;">KODE</font></b></li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'ruangan' ? 'active' : '' ?>">
                    <a href="index.php?m=ruangan&s=ruangan">
                        <i class="fa fa-list-alt"></i>
                        <p>Kode Ruangan</p>
                    </a>
                </li>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'kelas' ? 'active' : '' ?>">
                    <a href="index.php?m=kelas&s=kelas">
                        <i class="fa fa-list-alt"></i>
                        <p>Kode Kelas</p>
                    </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['role'] == 'user') { ?>
                <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'hasil_user' ? 'active' : '' ?>">
                    <a href="index.php?m=hasil_user&s=hasil_user">
                        <i class="fa fa-clipboard"></i>
                        <p>Hasil Kinerja Akhir</p>
                    </a>
                </li>
            <?php } ?>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>