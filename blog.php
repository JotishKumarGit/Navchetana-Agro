<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BS COMPUTERS - Blog Page</title>
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
            <h1 class="fw-bold mb-3">Blog </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumb Section -->

    <!-- start blog -->
    <section id="blog" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Latest Blogs</h2>
                <p class="text-muted">Stay updated with the latest from BS COMPUTERS</p>
            </div>

            <div class="row g-4">

                <!-- Blog Post 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="assets/images/Laptop-battery.jpg" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">5 Signs Your Laptop Needs a New Battery</h5>
                            <p class="card-text text-muted">Learn how to detect battery issues early and avoid system failures.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="assets/images/Laptop-cable.jpg" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Top 10 Laptop Accessories in 2025</h5>
                            <p class="card-text text-muted">From coolers to docking stations, these tools can boost your productivity.
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="assets/images/Laptop-display.jpg" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">Desktop vs Laptop: Which is Better for You?</h5>
                            <p class="card-text text-muted">We break down performance, price, and use-case to help you choose.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end blog -->

    <!-- footer -->
    <?php include('includes/footer.php') ?>