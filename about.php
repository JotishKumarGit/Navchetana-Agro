<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BS COMPUTERS - About Page</title>
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
            <h1 class="fw-bold mb-3">About Us </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumb Section -->

    <!-- about us -->
    <section class="about-section">
        <div class="container">
            <div class="content">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="assets/images/Laptop-chip-level-repairing.jpg"
                        alt="BS Computer - Laptop and Computer Repair Experts" height="auto" class="about-img" />
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <h3 class="about-title mb-4 animate__animated animate__fadeInUp">
                        BS Computer: Your Trusted Tech Partner for Over 5 Years
                    </h3>
                    <p class="about-text animate__animated animate__fadeInUp animate__delay-1s">
                        For over 15 years, <span class="highlight">BS Computer</span> has
                        been Faridabad's trusted expert for professional computer and
                        laptop repair, dedicated to providing reliable solutions and
                        ensuring customer satisfaction.
                    </p>
                    <p class="about-text animate__animated animate__fadeInUp animate__delay-2s">
                        Our skilled technicians handle all hardware solutions, from
                        complex component repairs to supplying and installing high-quality
                        parts—like keyboards, mice, and screens—for all major brands.
                    </p>
                    <p class="about-text animate__animated animate__fadeInUp animate__delay-3s">
                        We also provide complete software support for all versions of
                        Windows. We pride ourselves on offering fast, transparent, and
                        customer-focused service to give you peace of mind.
                    </p>
                    <a href="#contact" class="btn btn-black mt-3 animate__animated animate__fadeInUp animate__delay-4s">Get in
                        Touch</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us  -->



    <!-- footer -->
    <?php include('includes/footer.php') ?>