<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navchetana Agro Center Producer Company Limited - Outdoor Plants</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <style>
        .breadcrumb-section {
            background: #198754;
            padding: 50px 0;
        }

        .breadcrumb-section h1 {
            color: #fff;
        }

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
</head>

<body>

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-center">
        <div class="container breadcrumb-content">
            <h1 class="fw-bold mb-3">Outdoor Plants</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Outdoor Plants</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Side: Product Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/images/Outdoor_plants.jpeg" class="img-fluid rounded" alt="Outdoor Plants" />
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Beautiful Outdoor Plants</h2>
                <p class="fw-semibold">
                    Our collection of Outdoor Plants includes a variety of flowering and foliage plants that enhance gardens, patios, and balconies. Perfect for creating a vibrant and natural outdoor space.
                </p>
                <ul class="fw-semibold">
                    <li>Easy to grow and maintain</li>
                    <li>Enhances aesthetics of gardens and outdoor spaces</li>
                    <li>Provides fresh air and natural beauty</li>
                </ul>
                <p class="fw-semibold">
                    Sourced sustainably and grown with care, our outdoor plants are healthy, robust, and ready to thrive in your garden or balcony.
                </p>
                <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>

  