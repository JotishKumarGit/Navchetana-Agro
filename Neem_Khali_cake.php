<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navchetana Agro Center Producer Company Limited - Neem Khali Cake</title>

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

        .carousel-caption {
            position: absolute;
            top: 20%;
            transform: translateY(-20%);
            color: #fff;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
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
            <h1 class="fw-bold mb-3">Neem Khali Cake</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Neem Khali Cake</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Side: Product Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/images/Neem_Khali_cake.jpeg" height="auto" width="100%" class="img-fluid rounded" alt="Neem Khali Cake" />
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Organic Neem Khali Cake</h2>
                <p class="fw-semibold">
                    Our Neem Khali Cake is a natural byproduct of neem oil extraction, rich in nutrients and perfect for organic farming. It helps improve soil fertility and protects crops naturally.
                </p>
                <ul class="fw-semibold">
                    <li>Natural fertilizer for enhancing soil health</li>
                    <li>Acts as a natural pest repellent for crops</li>
                    <li>Boosts plant growth and productivity</li>
                </ul>
                <p class="fw-semibold">
                    Sourced sustainably from neem seed processing, our Neem Khali Cake provides an eco-friendly and chemical-free solution for your agricultural needs.
                </p>
                <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php') ?>

