<!-- Section: Header -->
<section id="home" class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Temukan <span class="text-primary">Rumah Impian</span>
                Kebahagiaan Keluarga</h1>
            <p class="animated fadeIn mb-4 pb-2">Rumah bukan sekadar tempat tinggal, tapi tempat tumbuhnya cinta dan
                kenangan indah. Kami hadir untuk membantu Anda menemukan hunian terbaik yang nyaman, aman, dan sesuai
                kebutuhan keluarga.</p>
            <a href="#fasilitas" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <?php foreach ($slider as $s): ?>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="<?= base_url('assets/upload/image/' . $s['gambar']) ?>" alt="">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Section: Call to Action -->
<section id="cta1" class="container-xxl py-4" style="background-color: #00B98E;">
    <div class="container">
        <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
            <div class="row g-4 align-items-center">
                <!-- Gambar -->
                <div class="col-lg-3 col-md-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="<?= base_url() ?>/assets/estate/img/call-to-action.jpg"
                        alt="call to action" style="max-height: 100px; object-fit: cover;">
                </div>

                <!-- Konten -->
                <div class="col-lg-7 col-md-8 wow fadeIn" data-wow-delay="0.5s">
                    <div class="mb-2">
                        <h4 class="mb-2">Hubungi Tim Kami</h4>
                        <p class="mb-3 small ">Kami siap membantu Anda mendapatkan hunian impian.
                            Konsultasikan kebutuhan properti Anda sekarang juga bersama tim profesional kami.</p>
                    </div>
                    <a href="https://wa.me/<?= esc($site['hp']) ?>" target="_blank"
                        class="btn btn-light btn-sm px-3 me-2"><i class="fa fa-phone-alt me-1"></i>Whatsapp</a>
                    <a href="mailto:<?= esc($site['email']) ?>" target="_blank" class="btn btn-dark btn-sm px-3"><i
                            class="fa fa-calendar-alt me-1"></i>Email</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Fasilitas -->
<section id="fasilitas" class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Fasilitas</h1>
            <p>Dapatkan berbagai kemudahan yang kami tawarkan hanya untuk Anda!</p>
        </div>
        <div class="row g-4">
            <?php foreach ($fasilitas as $item) : ?>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="javascript:void(0)">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="<?= base_url('assets/upload/image/' . $item['gambar']) ?>"
                                style="width: 45px; height: 45px;" alt="Icon">
                        </div>
                        <h6><?= esc($item['judul_fasilitas']) ?></h6>
                        <p><?= esc($item['keterangan']) ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Section: About -->
<section id="about" class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="<?= base_url() ?>/assets/estate/img/about.jpg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">#1 Hunian Terbaik</h1>
                <p class="mb-4"><?= $konfigurasi['tentang'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Call to Action -->
<section id="cta2" class="container-xxl py-4" style="background-color: #00B98E;">
    <div class="container">
        <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
            <div class="row g-4 align-items-center">
                <!-- Gambar -->
                <div class="col-lg-3 col-md-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="<?= base_url() ?>/assets/estate/img/call-to-action.jpg"
                        alt="call to action" style="max-height: 100px; object-fit: cover;">
                </div>

                <!-- Konten -->
                <div class="col-lg-7 col-md-8 wow fadeIn" data-wow-delay="0.5s">
                    <div class="mb-2">
                        <h4 class="mb-2">Hubungi Tim Kami</h4>
                        <p class="mb-3 small ">Kami siap membantu Anda mendapatkan hunian impian.
                            Konsultasikan kebutuhan properti Anda sekarang juga bersama tim profesional kami.</p>
                    </div>
                    <a href="#" class="btn btn-light btn-sm px-3 me-2"><i class="fa fa-phone-alt me-1"></i>Whatsapp</a>
                    <a href="#" class="btn btn-dark btn-sm px-3"><i class="fa fa-calendar-alt me-1"></i>Email</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Property List -->
<section id="property" class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-12">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Tipe Hunian</h1>
                    <p>Kami menyediakan berbagai pilihan tipe hunian yang dirancang untuk memenuhi kebutuhan dan gaya
                        hidup Anda.</p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <?php foreach ($property as $property): ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="javascript:void(0)"><img class="img-fluid d-block mx-auto"
                                        src="<?= base_url('assets/upload/image/' . $property['gambar']) ?>" alt=""></a>
                                <div
                                    class="bg-white rounded-bottom text-primary position-absolute end-0 top-0 mx-4 pt-1 px-3">
                                    Type <?= esc($property['tipe']) ?></div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">Rp <?= number_format($property['harga'], 0, ',', '.') ?>
                                </h5>
                                <a class="d-block h5 mb-2 d-flex border-top"
                                    href="javascript:void(0)"><?= esc($property['judul']) ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- KPR -->
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">Fasilitas KPR</h1>
                <p class="mb-4">Kami juga menyediakan informasi mengenai fasilitas Kredit Pemilikan Rumah (KPR) untuk
                    membantu Anda memiliki hunian impian.</p>
                <div class="text-center bg-light p-5 rounded shadow-sm">
                    <img class="img-fluid rounded shadow" src="<?= base_url('assets/upload/image/kpr.jpg') ?>"
                        alt="Fasilitas KPR" style="cursor: pointer; max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Contact -->
<section id="cta" class="container-xxl py-4">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Google Maps -->
                <div class="col-12 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ratio ratio-4x3">
                        <iframe src="<?= $site['google_map'] ?>" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-12 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center mx-auto mb-5 text-white p-5 rounded" style="background-color: #00B98E;">
                        <h1 class="mb-3">Hubungi Kami</h1>
                        <p class="mb-1"><?= $site['alamat'] ?></p>
                        <p class="mb-1"><i class="fa fa-phone-alt me-2"></i><?= $site['telepon'] ?></p>
                        <p class="mb-3"><i class="fa fa-envelope me-2"></i><?= $site['email'] ?></p>
                        <div class="d-flex justify-content-center gap-3">
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="<?= $site['nama_facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle"
                                href="<?= $site['nama_instagram'] ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Struktur Organisasi -->
            <div class="row g-4">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center bg-light p-5 rounded">
                        <img class="img-fluid rounded shadow" src="<?= base_url('assets/upload/image/struktur.png') ?>"
                            alt="Struktur Organisasi" style="cursor: pointer; max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Galery Start -->
<section id="galeri" class="container-xxl py-5">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($galeri as $g): ?>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded"
                                src="<?= base_url('assets/upload/image/' . $g['gambar']) ?>"
                                style="width: auto; height: auto; object-fit:cover;">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <?php foreach ($video as $v) { ?>
            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/<?= $v['video'] ?>" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $v['judul'] ?></h5>
                        <p class="card-text"><?= $v['keterangan'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
</section>
<!-- Galery End -->

<!-- Modal Preview Gambar -->
<!-- <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-labelledby="imagePreviewModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark text-white border-0 rounded-3">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body text-center position-relative"> -->

                <!-- Tombol Navigasi -->
                <!-- <button id="prevImage" class="modal-navigation-btn modal-navigation-left">
                    &larr;
                </button>
                <button id="nextImage" class="modal-navigation-btn modal-navigation-right">
                    &rarr;
                </button> -->

                <!-- Gambar Preview -->
                <!-- <img id="previewImage" src="" alt="Preview" class="img-fluid rounded w-100"
                    style="max-height: 90vh; object-fit: contain;">

            </div>
        </div>
    </div>
    <br>
</div>
<br> -->
<!-- Galeri End -->