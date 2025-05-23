<!-- ======= Top Bar ======= -->
<div class="container-xxl bg-white p-0">
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <<a href="<?= base_url() ?>" class="d-flex align-items-center text-center">
                <img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="Icon"
                    style="height: 70px; width: auto; object-fit: contain;">
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#fasilitas" class="nav-item nav-link">Fasilitas</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                        <a href="#property" class="nav-item nav-link">Tipe Rumah</a>
                        <a href="#cta" class="nav-item nav-link">Kontak</a>
                        <a href="#galeri" class="nav-item nav-link">Galeri</a>
                    </div>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->