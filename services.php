<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BS COMPUTERS - Services Page</title>
    <!-- bootstrap icnos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <style>
        .carousel-caption {
            position: absolute;
            top: 20%;
            transform: translateY(-20%);
            color: #fff;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* carousel css */
        .carousel-caption.custom-caption {
            background-color: rgba(0, 0, 0, 0.5);
            /* semi-transparent black */
            padding: 20px;
            border-radius: 10px;
            bottom: 50%;
            transform: translateY(50%);
            left: 50%;
            transform: translate(-50%, 50%);
            text-align: center;
            width: 80%;
        }

        .carousel-caption.custom-caption h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        .carousel-caption.custom-caption p {
            font-size: 1.25rem;
            font-weight: 600;
            color: #f8f9fa;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }
    </style>

    <style>
        .product-card {
            border: 1px solid #eaeaea;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }
    </style>

    <style>
        .contact-container {
            padding: 50px 0;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        iframe {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border: none;
            border-radius: 8px;
        }

        .faq-section {
            padding: 50px 15px;
        }

        .faq-title {
            text-align: center;
            margin-bottom: 40px;
        }
    </style>

</head>

<body>

    <!-- header -->
    <?php include('includes/header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-center text-white">
        <div class="container breadcrumb-content">
            <h1 class="fw-bold mb-3">Services </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumb Section -->

  <!-- services  -->
  <section class="py-5 bg-white">
    <div class="container">
      <h2 class="text-center mb-5">Our Services</h2>
      <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-tools fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Laptop & PC Repair</h5>
              <p class="card-text text-muted">
                Fast and reliable repair services for laptops and desktops of
                all brands.
              </p>
            </div>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-hdd-fill fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Data Recovery</h5>
              <p class="card-text text-muted">
                Recover lost or corrupted data from hard drives, SSDs, or USB
                devices.
              </p>
            </div>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-shield-lock fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Virus Removal</h5>
              <p class="card-text text-muted">
                Complete removal of viruses, malware, and spyware without data
                loss.
              </p>
            </div>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-pc-display-horizontal fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Display Replacement</h5>
              <p class="card-text text-muted">
                Broken screen? We replace laptop and desktop displays with
                genuine parts.
              </p>
            </div>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-cpu-fill fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Chip-Level Repair</h5>
              <p class="card-text text-muted">
                Advanced repair for motherboard and other hardware-level
                issues.
              </p>
            </div>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body">
              <div class="mb-3">
                <i class="bi bi-battery-charging fs-1 text-dark"></i>
              </div>
              <h5 class="card-title fw-bold">Battery & Power Solutions</h5>
              <p class="card-text text-muted">
                Original battery replacements, chargers, and power jack
                repairs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end services  -->

    <!-- footer -->
    <?php include('includes/footer.php') ?>
    