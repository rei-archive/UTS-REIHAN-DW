<?php
session_start();
?>
<!-- Header -->
<header class="Headerbg">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./include/img/logo1.png" alt="Logo" height="50">
                <img src="./include/img/logo3.png" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=landing#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=produk#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=landing#tes1">Testi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=landing#aboutus">Tentang Kami</a>
                    </li>
                </ul>

                <?php
                // Periksa apakah session username ada
                if (isset($_SESSION['username'])) {
                    // Ambil nama pengguna dari session (jika ada) atau gunakan default
                    $username = isset($_SESSION['username']) ? $_SESSION['username'] : "Nama Pengguna";
                    ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $username; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="./config/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                } else {
                    // Jika session tidak ada, tampilkan tombol login
                    ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=login">
                                <button class="btnL btnL-G d-flex align-items-center rounded-pill px-4">
                                    <span class="me-2">LOGIN</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </button>
                            </a>
                        </li>
                    </ul>
                    <?php
                }
                ?>

            </div>
        </div>
    </nav>
</header>
<!-- end header -->