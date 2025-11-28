<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Navchetana Agro Center Producer Company Limited </title>
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
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-center text-white">
        <div class="container breadcrumb-content">
            <h1 class="fw-bold mb-3">Mustard Oil </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Mustard Oil</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumb Section -->

    <!-- products details -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left Side: Product Image -->
            <div class="col-md-6">
                <img src="assets/images/Mustard_Oil.jpg" class="img-fluid rounded" height="auto" width="100%" alt="Mustard Oil" />
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Pure Mustard Oil</h2>
                <p class="fw-semibold">
                    Our Mustard Oil is cold-pressed from premium mustard seeds, retaining all natural nutrients and flavor.
                    Perfect for:
                </p>
                <ul class="fw-semibold">
                    <li>Cooking traditional dishes with authentic taste</li>
                    <li>Natural massage oil for skin and hair health</li>
                    <li>Rich in antioxidants and essential fatty acids</li>
                </ul>
                <p class="fw-semibold">
                    Extracted using sustainable methods, our Mustard Oil ensures purity and quality, giving you a healthy and flavorful addition to your kitchen and wellness routine.
                </p>
                <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include('footer.php') ?>