<!-- ======= Footer ======= -->
<div class="container-fluid bg-dark text-white-50 footer pt-3 mt-4 wow fadeIn" data-wow-delay="0.1s">
    <!-- Copyright -->
    <div class="container border-top border-secondary pt-3">
        <div class="row">
            <div class="col-md-12 text-center text-white-50 small">
                &copy; <a class="text-white" href="https://grahaantasenasakti.com"><?= $site['namaweb'] ?></a>, All
                Rights
                Reserved.
            </div>
        </div>
    </div>
    <br>
</div>
<br>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/estate/lib/wow/wow.min.js"></script>
<script src="<?= base_url() ?>/assets/estate/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>/assets/estate/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>/assets/estate/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url() ?>/assets/estate/js/main.js"></script>

<!-- JavaScript Navigasi -->
<!-- <script>
const previewImages = document.querySelectorAll('.preview-img');
const previewImageEl = document.getElementById('previewImage');
let currentIndex = 0;

function showImage(index) {
    if (index >= 0 && index < previewImages.length) {
        const imgSrc = previewImages[index].getAttribute('data-img');
        previewImageEl.src = imgSrc;
        currentIndex = index;
    }
}

previewImages.forEach((img, index) => {
    img.addEventListener('click', () => {
        showImage(index);
    });
});

document.getElementById('prevImage').addEventListener('click', () => {
    const newIndex = (currentIndex - 1 + previewImages.length) % previewImages.length;
    showImage(newIndex);
});

document.getElementById('nextImage').addEventListener('click', () => {
    const newIndex = (currentIndex + 1) % previewImages.length;
    showImage(newIndex);
});

// Optional: keyboard arrow navigation
document.addEventListener('keydown', function(e) {
    if (document.getElementById('imagePreviewModal').classList.contains('show')) {
        if (e.key === 'ArrowLeft') {
            document.getElementById('prevImage').click();
        } else if (e.key === 'ArrowRight') {
            document.getElementById('nextImage').click();
        } else if (e.key === 'Escape') {
            const modalEl = bootstrap.Modal.getInstance(document.getElementById('imagePreviewModal'));
            modalEl.hide();
        }
    }
});
</script> -->
<script>
    $(document).ready(function(){
        $(".testimonial-carousel").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000, // waktu per slide (ms)
            autoplayHoverPause: true,
            items: 1,
            nav: false,       // Matikan tombol navigasi
            dots: false       // Jika ingin menghilangkan dots juga
        });
    });
</script>
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offset = 40; // tinggi navbar
            const bodyRect = document.body.getBoundingClientRect().top;
            const elementRect = target.getBoundingClientRect().top;
            const elementPosition = elementRect - bodyRect;
            const offsetPosition = elementPosition - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }
    });
});
</script>

<!-- <script>
$(document).ready(function(){
    $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            992: { items: 3 }
        }
    });
});
</script> -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>