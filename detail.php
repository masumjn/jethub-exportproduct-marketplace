<?php include 'php/getFromSlug.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk - Jethub</title>
  <meta property="og:title" content="Produk - Jethub" />
  <meta name="twitter:title" content="Produk - Jethub" />
  <meta name="embedx:title" content="Produk - Jethub" />
  <link rel="icon" href="../images/logo-square.png" type="image/x-icon" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    /* for Navbar */
    .text-dark-blue {
      --bs-text-opacity: 1;
      --bs-dark-blue-rgb: 56, 89, 151;
      color: rgba(var(--bs-dark-blue-rgb), var(--bs-text-opacity)) !important
    }

    .btn-blue {
      --bs-btn-color: #ffffff;
      /* Text color */
      --bs-btn-bg: #385997;
      /* Primary background color */
      --bs-btn-border-color: #385997;
      /* Border color to match primary */

      /* Hover state */
      --bs-btn-hover-color: #ffffff;
      --bs-btn-hover-bg: #4b6ca8;
      /* Slightly lighter shade for hover */
      --bs-btn-hover-border-color: #4b6ca8;

      /* Focus state */
      --bs-btn-focus-shadow-rgb: 56, 89, 151;
      /* Lighter shade of primary color for focus outline */

      /* Active state */
      --bs-btn-active-color: #ffffff;
      --bs-btn-active-bg: #2d4c7a;
      /* Darker shade for active background */
      --bs-btn-active-border-color: #2d4c7a;
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.15);

      /* Disabled state */
      --bs-btn-disabled-color: #ffffff;
      --bs-btn-disabled-bg: #5979aa;
      /* Muted shade of primary color for disabled background */
      --bs-btn-disabled-border-color: #5979aa;
    }

    /* Transition on Hamburger */
    #change-burger {
      transition: transform 0.3s ease, opacity 0.2s ease;
    }

    .fa-bars {
      transform: rotate(0deg);
      opacity: 1;
    }

    .fa-xmark {
      transform: rotate(180deg);
      /* Rotate the "X" icon */
      opacity: 0;
      /* Start hidden */
    }

    #change-burger.fa-xmark {
      opacity: 1;
      /* Show the "X" icon on toggle */
    }

    /* for filter */
    .bg-primary-blue {
      --bs-bg-opacity: 1;
      --bs-primary-blue-rgb: 56, 89, 151;
      background-color: rgba(var(--bs-primary-blue-rgb), var(--bs-bg-opacity)) !important
    }

    /* for Footer */
    .bg-light-blue {
      --bs-bg-opacity: 1;
      --bs-light-blue-rgb: 217, 228, 247;
      background-color: rgba(var(--bs-light-blue-rgb), var(--bs-bg-opacity)) !important
    }

    .bg-dark-blue {
      --bs-bg-opacity: 1;
      --bs-dark-blue-rgb: 56, 89, 151;
      background-color: rgba(var(--bs-dark-blue-rgb), var(--bs-bg-opacity)) !important
    }

    .border-blue {
      --bs-border-opacity: 1;
      --bs-blue-rgb: 56, 89, 151;
      border-color: rgba(var(--bs-blue-rgb), var(--bs-border-opacity)) !important
    }

    /* input edit*/
    .form-control:focus {
      color: var(--bs-body-color);
      background-color: var(--bs-body-bg);
      border-color: #385997;
      outline: 0;
      box-shadow: 0 0 0 .25rem rgba(56, 89, 151, .25)
    }

    .form-control::placeholder {
      color: var(--bs-secondary-color);
      opacity: 0.6
    }

    /* text */
    .card-title {
      margin-bottom: var(--bs-card-title-spacer-y);
      color: var(--bs-card-title-color)
    }

    .text-primary-blue {
      --bs-text-opacity: 1;
      --bs-primary-rgb: 56, 89, 151;
      color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important
    }

    /* Button cart */
    .btn-outline-blue {
      --bs-btn-color: #385997;
      /* Primary text color */
      --bs-btn-border-color: #385997;
      /* Primary border color */
      --bs-btn-hover-color: #fff;
      /* Hover text color */
      --bs-btn-hover-bg: #385997;
      /* Hover background color */
      --bs-btn-hover-border-color: #385997;
      /* Hover border color */
      --bs-btn-focus-shadow-rgb: 56, 89, 151;
      /* Focus shadow color in RGB */
      --bs-btn-active-color: #fff;
      /* Active text color */
      --bs-btn-active-bg: #304d84;
      /* Active background color, slightly darker */
      --bs-btn-active-border-color: #304d84;
      /* Active border color, matching active background */
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      /* Active shadow */
      --bs-btn-disabled-color: #385997;
      /* Disabled text color */
      --bs-btn-disabled-bg: transparent;
      /* Disabled background, keeping outline */
      --bs-btn-disabled-border-color: #385997;
      /* Disabled border color */
      --bs-gradient: none;
      /* No gradient */
    }

    .btn-outline-blue.disabled,
    .btn-outline-blue:disabled {
      --bs-btn-disabled-color: #385997;
      --bs-btn-disabled-bg: #fff;
      --bs-btn-disabled-border-color: #385997;
      --bs-btn-disabled-opacity: 1;

      color: var(--bs-btn-disabled-color);
      pointer-events: none;
      background-color: var(--bs-btn-disabled-bg);
      border-color: var(--bs-btn-disabled-border-color);
      opacity: var(--bs-btn-disabled-opacity)
    }

    /* add custom button pagination */
    .btn.btn-outline-blue.btn-pagination {
      --bs-btn-border-color: #e6e6e6;
      --bs-btn-color: #000000;
    }

    .btn.btn-outline-blue.btn-pagination:disabled {
      border: none;
      --bs-btn-disabled-color: #5e5d5d;
    }


    /* pagination style */
    .pagination {
      --bs-link-color: #385997;
      --bs-border-color: #e0d9cd;
      --bs-link-hover-color: #284574;

      --bs-pagination-padding-x: 0.75rem;
      --bs-pagination-padding-y: 0.375rem;
      --bs-pagination-font-size: 1rem;
      --bs-pagination-color: var(--bs-link-color);
      --bs-pagination-bg: var(--bs-body-bg);
      --bs-pagination-border-width: var(--bs-border-width);
      --bs-pagination-border-color: var(--bs-border-color);
      --bs-pagination-border-radius: var(--bs-border-radius);
      --bs-pagination-hover-color: var(--bs-link-hover-color);
      --bs-pagination-hover-bg: var(--bs-tertiary-bg);
      --bs-pagination-hover-border-color: var(--bs-border-color);
      --bs-pagination-focus-color: var(--bs-link-hover-color);
      --bs-pagination-focus-bg: var(--bs-secondary-bg);
      --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(56, 89, 151, 0.25);
      --bs-pagination-active-color: #fff;
      --bs-pagination-active-bg: #0d6efd;
      --bs-pagination-active-border-color: #0d6efd;
      --bs-pagination-disabled-color: var(--bs-secondary-color);
      --bs-pagination-disabled-bg: var(--bs-secondary-bg);
      --bs-pagination-disabled-border-color: var(--bs-border-color);
      display: flex;
      padding-left: 0;
      list-style: none
    }


    /* transition on element side of merchant */
    .wrapper {
      box-sizing: content-box;
      height: 25px;
      display: flex;
    }

    .words {
      overflow: hidden;
    }

    /* .words:hover span {
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        } */

    .card.word:hover .wrapper .words span {
      transform: translateY(-100%);
      transition: all 0.3s ease-in-out;
    }

    .words span {
      display: block;
      height: 100%;
      /* color: #0e6ffc; */
      transform: translateY(0);
      transition: all 0.3s ease-in-out;
    }


    /* for Ratio on image products */
    .ratio-3x2 {
      --bs-aspect-ratio: 66.67%;
    }

    /* addition style button checkout */
    .checkoutButton.disable {
      cursor: not-allowed;
      /* Disabled state */
      color: #ffffff;
      background: #5979aa;
      /* Muted shade of primary color for disabled background */
      border-color: #5979aa;
    }

    /* custom tooltip */
    .custom-tooltip {
      --bs-tooltip-bg: #385997;
      /* Background color */
      --bs-tooltip-color: #ffffff;
      /* Text color */
      --bs-tooltip-border-radius: 10px;
      /* Rounded corners */
      --bs-tooltip-padding-y: 0.75rem;
      /* Vertical padding */
      --bs-tooltip-padding-x: 0.75rem;
      /* Horizontal padding */
      --bs-tooltip-opacity: 1;
      /* Full opacity */

      /* Custom margin for vertical spacing */
      margin-bottom: 1rem;
      /* Adds space below */
    }
  </style>

</head>

<body>

  <!-- Header -->
  <header class="position-relative w-100 bg-white text-secondary py-2 shadow-sm navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <nav class="container-lg d-flex align-items-center justify-content-between px-4 py-1">
      <div class="d-flex align-items-center justify-content-between w-auto">
        <a class="d-flex align-items-center text-dark fw-semibold text-decoration-none" href="https://jethub-jatim.com" aria-label="Jethub">
          <img src="../images/nav-logo.png" alt="Jer Basuki Mawa Beya" class="me-3" height="60px" />
          <button class="btn btn-blue btn-sm px-4 text-white fw-semibold" style="border-radius: 20rem;">Jethub</button>
        </a>
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarMenu"
        aria-controls="navbarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span><i class="fa-solid fa-bars" id="change-burger"></i></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse w-auto mt-0" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item my-auto py-3">
            <a href="../" class="text-decoration-none me-4 text-dark fw-semibold">Beranda</a>
          </li>
          <li class="nav-item my-auto py-3">
            <a href="../produk" class="text-decoration-none me-4 text-dark-blue fw-semibold">Produk</a>
          </li>
          <li class="nav-item my-auto py-3">
            <a href="../tentang-kami" class="text-decoration-none text-dark fw-semibold">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  <!-- Main Content -->
  <div class="container mt-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none text-dark-blue fw-semibold" href="../produk">Produk</a></li>
        <li class="breadcrumb-item active text-dark fw-semibold" id="breadcrumb-item"></li>
      </ol>
    </nav>

    <div class="row">
      <!-- Product Details and Description -->
      <?php if ($barang): ?>
        <div class="col-lg-8">
          <h1 class="fw-bold"><?php echo htmlspecialchars($barang['name']); ?></h1>

          <!-- Description and Specifications -->
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title fw-bold">Deskripsi Barang</h5>
              <p class="card-text">
                <?php echo htmlspecialchars($barang['description']); ?>
              </p>

              <h5 class="mt-4 fw-bold">Spesifikasi</h5>
              <ul class="list-unstyled">
                
                <li class="my-3">
                  <button type="button" disabled
                    class="btn btn-outline-blue rounded-circle me-1 btn-sm border-2 py-1">
                    <i class="fa-solid fa-check fa-lg"></i>
                  </button>
                  <span>
                    Lorem ipsum dolor sit amet
                  </span>
                </li>

                <li class="my-3">
                  <button type="button" disabled
                    class="btn btn-outline-blue rounded-circle me-1 btn-sm border-2 py-1">
                    <i class="fa-solid fa-check fa-lg"></i>
                  </button>
                  <span>
                    Lorem ipsum dolor sit amet
                  </span>
                </li>

                <li class="my-3">
                  <button type="button" disabled
                    class="btn btn-outline-blue rounded-circle me-1 btn-sm border-2 py-1">
                    <i class="fa-solid fa-check fa-lg"></i>
                  </button>
                  <span>
                    Lorem ipsum dolor sit amet
                  </span>
                </li>

                <li class="my-3">
                  <button type="button" disabled
                    class="btn btn-outline-blue rounded-circle me-1 btn-sm border-2 py-1">
                    <i class="fa-solid fa-check fa-lg"></i>
                  </button>
                  <span>
                    Lorem ipsum dolor sit amet
                  </span>
                </li>

                <li class="my-3">
                  <button type="button" disabled
                    class="btn btn-outline-blue rounded-circle me-1 btn-sm border-2 py-1">
                    <i class="fa-solid fa-check fa-lg"></i>
                  </button>
                  <span>
                    Lorem ipsum dolor sit amet
                  </span>
                </li>

              </ul>
            </div>
          </div>

          <!-- Shop Section -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="../images/merchant.png" class="me-2" alt="Store Image" height="40px">
                <div>
                  <span class="fw-bold fs-5"><?php echo htmlspecialchars($barang['shop']); ?></span><br>
                  <span class="fw-semibold"><?php echo htmlspecialchars($barang['regency']); ?></span><br>
                </div>
              </div>
            </div>
          </div>


          <!-- Review Section -->
          <div class="card">
            <div class="card-body">
              <h5 class="fw-bold">Review</h5>
              <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/50" class="rounded-circle me-2" alt="User Image">
                <div>
                  <span class="fw-bold">Nama Pengguna</span><br>
                  <span class="text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </span>
                </div>
              </div>
              <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat mattis maximus. Donec volutpat, ligula et volutpat commodo, enim nulla pharetra velit, id rhoncus tellus dui commodo dui. Phasellus vel elit accumsan, tincidunt sem eget, cursus enim.
              </p>
            </div>
          </div>
        </div>

        <!-- Product Image and Purchase Options -->
        <div class="col-lg-4">
          <div class="card">
            <img src="../images/produk/<?php echo htmlspecialchars($barang['img']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($barang['name']); ?>">
            <div class="card-body">
              <!-- Thumbnail Images Carousel -->
              <div id="thumbnailCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active w-25">
                    <img src="https://via.placeholder.com/75" class="d-block" alt="Thumbnail 1">
                  </div>
                  <div class="carousel-item w-25">
                    <img src="https://via.placeholder.com/75" class="d-block" alt="Thumbnail 2">
                  </div>
                  <div class="carousel-item w-25">
                    <img src="https://via.placeholder.com/75" class="d-block" alt="Thumbnail 3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#thumbnailCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#thumbnailCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
              </div>

              <!-- Product Quantity and Price -->
              <div class="mt-4">
                <h5 class="fw-bold">Atur jumlah</h5>
                <div class="d-flex align-items-center mb-3">
                  <img src="https://via.placeholder.com/50" class="me-2" alt="Product Thumbnail">
                  <span>Lorem Ipsum Dolor sit Amet</span>
                </div>
                <div class="d-flex align-items-center">
                  <button class="btn btn-outline-secondary">-</button>
                  <input type="text" class="form-control text-center mx-2" style="width: 50px;" value="2" readonly>
                  <button class="btn btn-outline-secondary">+</button>
                  <span class="ms-3">Stok: 200</span>
                </div>
              </div>

              <div class="d-flex justify-content-between mt-4">
                <h4 class="text-primary-blue fw-bold">Rp 120.000</h4>
                <button class="btn btn-blue">Beli Langsung</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>


<?php else: ?>
  <!-- <p>Product not found.</p> -->
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <!-- Image Placeholder -->
        <div class="mb-0">
          <img src="../images/empty-sack.png" alt="No results found" class="img-fluid" style="max-width: 350px;">
        </div>
        <!-- Title -->
        <h3 class="fw-bold text-primary-blue">Produk yang kamu cari, tidak ada !</h3>
        <!-- Subtitle -->
        <p class="text-muted">
          Periksa kembali url produk anda. Coba kembali ke halaman Produk!
        </p>
      </div>
    </div>
    <a class="text-decoration-none text-dark-blue fw-semibold" href="../produk">
      <button class="btn btn-blue rounded-3">Kembali</button>
    </a>
  </div>
<?php endif; ?>

<!-- Footer -->
<footer class="py-5 mt-5 bg-light-blue">
  <div class="container px-4 px-md-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <!-- Logo Image -->
      <div class="col mt-5">
        <img src="images/logo-horizontal.png" alt="JetHub Hor" class="img-fluid mb-4" />
      </div>
      <!-- Contact Information -->
      <div class="col">
        <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
          Kontak Kami
        </h4>
        <p class="mb-1">Bagian JET-HUB</p>
        <p class="mb-1">Lantai 2, Gedung Baru</p>
        <p class="mb-1">(+62) 811-3221-2000</p>
      </div>
      <!-- Placeholder for Additional Contact Links -->
      <div class="col">
        <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
          Kontak Kami
        </h4>
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
        </ul>
      </div>
      <!-- Placeholder for More Contact Links -->
      <div class="col">
        <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
          Kontak Kami
        </h4>
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
          <li>Lorem ipsum dolor</li>
        </ul>
      </div>
    </div>
    <!-- Horizontal Line -->
    <hr class="my-5 border-3 border-blue" />
    <!-- Social Media Section -->
    <div class="d-flex align-items-center justify-content-center">
      <h4 class="fw-bold fs-4 text-dark-blue me-4 mt-1">
        Social Media
      </h4>
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
            <!-- <iconify-icon icon="mdi:facebook" class="fs-5"></iconify-icon> -->
            <i class="fa-brands fa-facebook fs-4"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
            <!-- <iconify-icon icon="mdi:instagram" class="fs-5"></iconify-icon> -->
            <i class="fa-brands fa-instagram fs-4"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
            <!-- <iconify-icon icon="mdi:twitter" class="fs-5"></iconify-icon> -->
            <i class="fa-brands fa-x-twitter fs-4"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
            <!-- <iconify-icon icon="tabler:world" class="fs-5"></iconify-icon> -->
            <i class="fa-solid fa-globe fs-4"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
            <!-- <iconify-icon icon="mdi:youtube" class="fs-5"></iconify-icon> -->
            <i class="fa-brands fa-youtube fs-4"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<div class="bg-dark-blue text-white text-center py-3">
  <p class="mb-0">Copyright 2024 Jethub All Rights Reserved</p>
</div>




<!-- FontAwesome icon -->
<script src="https://kit.fontawesome.com/2406124756.js" crossorigin="anonymous"></script>

<!-- Bootsrap and Popper JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->

<!-- Local Script -->
<script src="../build/assets/another-script.js"></script>

<!-- for show Midtrans -->
<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript"
  src="https://app.sandbox.midtrans.com/snap/snap.js"
  data-client-key="SB-Mid-client-fDTBCBfOXu5dqqXj"></script>

<script>
  const breadcrumbItem = document.getElementById('breadcrumb-item');
  const fullText = "<?php echo htmlspecialchars($barang['name'] ?? ''); ?>";
  const shortText = fullText.length > 35 ? fullText.substring(0, 35) + '...' : fullText;

  // Initially display the short text
  breadcrumbItem.textContent = shortText;

  // Change to full text on hover
  breadcrumbItem.addEventListener('mouseenter', function() {
    breadcrumbItem.textContent = fullText;
  });

  // Revert to short text when hover ends
  breadcrumbItem.addEventListener('mouseleave', function() {
    breadcrumbItem.textContent = shortText;
  });
</script>
</body>

</html>