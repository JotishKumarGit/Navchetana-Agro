<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BS COMPUTERS - Contact Us Page</title>
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
            <h1 class="fw-bold mb-3">Contact Us </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumb Section -->

    <!-- contact us -->
    <div class="container contact-container">
        <div class="row">
            <!-- Left Side: Google Map -->
            <div class="col-md-6 mb-4 mb-md-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3502.761317657085!2d77.44718152457182!3d28.60693638524425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20Shiri%20Radha%20Sky%20Road%2C%20F03%2Csky%20Plaza%2C%20Sector%2016B%20Rd%2C%20Bhangel%2C%20Noida%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201318!5e0!3m2!1sen!2sin!4v1760506194029!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h3 class="mb-4">Contact Us</h3>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send via WhatsApp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact us -->

    <!-- footer -->
    <?php include('includes/footer.php') ?>