<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Papaya Fresh Gallery Surabaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>

  <!-- Navbar -->
  <?php include('partials/header.php'); ?>

  <!-- Image Slider Section -->
  <section id="image-slider" class="mb-5 position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/img/pict1.png" class="d-block w-100 slider-img" alt="Slide 1" />
        </div>
        <div class="carousel-item">
          <img src="public/img/2.jpg" class="d-block w-100 slider-img" alt="Slide 2" />
        </div>
        <div class="carousel-item">
          <img src="public/img/3.jpg" class="d-block w-100 slider-img" alt="Slide 3" />
        </div>
      </div>
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">
        <h1>Happier Life in Indonesia</h1>
        <p>Papaya Fresh Gallery Surabaya – Supermarket bernuansa Jepang</p>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="py-5" id="about">
    <div class="container">
      <h2 class="section-title mb-3">Who are we ?</h2>
      <p>Papaya Fresh Gallery Surabaya berdiri sejak 11 Juni 1995. Bergerak di bidang Supermarket dengan mengutamakan kebudayaan Jepang. Papaya Fresh Gallery memiliki beberapa cabang di Indonesia yaitu Jakarta, Bandung, Surabaya dan Bali. Papaya Fresh Gallery di Surabaya memiliki 3 cabang antara lain Darmo Permai, Margorejo dan Pakuwon City</p>
      <p></p>
    </div>
  </section>

  <!-- Services -->
  <?php include('partials/services.php'); ?>
  <!-- Membership -->
  <?php include('partials/membership.php'); ?>
  <!-- Career -->
  <?php include('partials/career.php'); ?>
  <!-- Branches -->
  <?php include('partials/branches.php'); ?>
  <!-- Contact -->
  <?php include('partials/contact.php'); ?>
  <!-- Footer -->
  <?php include('partials/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const faders = document.querySelectorAll('.fade-in-section');

      const appearOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
      };

      const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
          } else {
            entry.target.classList.remove('is-visible');
          }
        });
      }, appearOptions);

      faders.forEach(fader => {
        appearOnScroll.observe(fader);
      });
    });
  </script>
</body>

</html>