

<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="enquiryModalLabel">Product Enquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="enquiryForm">
          <!-- Name -->
          <div class="mb-3">
            <label for="enquiryName" class="form-label">Name</label>
            <input type="text" class="form-control" id="enquiryName" placeholder="Your Name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="enquiryEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="enquiryEmail" placeholder="you@example.com" required>
          </div>

          <!-- Message -->
          <div class="mb-3">
            <label for="enquiryMessage" class="form-label">Message</label>
            <textarea class="form-control" id="enquiryMessage" rows="4" placeholder="Your message here..."
              required></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary w-100">Submit Enquiry</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Enquery Modal  -->
<script>
  document.getElementById("enquiryForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("enquiryName").value.trim();
    const email = document.getElementById("enquiryEmail").value.trim();
    const message = document.getElementById("enquiryMessage").value.trim();

    const fullMessage = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;

    const phoneNumber = "+919650091622";
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${fullMessage}`;

    window.open(whatsappURL, "_blank");

    // Clear form
    this.reset();

    // Close modal (if using modal)
    const enquiryModal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
    if (enquiryModal) {
      enquiryModal.hide();
    }
  });
</script>



    <!-- Footer -->
    <footer class="pt-5 pb-4 bg-light text-dark" data-aos="fade-up" data-aos-delay="100">
      <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">

          <!-- Company Info -->
          <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
            <h5 class="text-uppercase fw-bold mb-4">Navchetana Agro Center Producer Company Limited</h5>
            <p>
              We are committed to promoting sustainable and organic farming practices. At Navchetana Agro Center, we
              provide high-quality organic fertilizers, natural plant care products, and eco-friendly agricultural
              solutions for a healthier future.
            </p>
          </div>

          <!-- Products -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Our Products</h6>
            <ul class="list-unstyled">
              <li><a href="#products" class="text-decoration-none text-dark">Organic Fertilizers</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Outdoor Plants</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Organic Manure</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Neem Oil</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Cow Dung Cake</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Neem Khali Cake</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Mustard Oil Cake</a></li>
            </ul>
          </div>

          <!-- Focus / Mission -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Our Focus</h6>
            <ul class="list-unstyled">
              <li><a href="#about" class="text-decoration-none text-dark">Organic Farming</a></li>
              <li><a href="#sustainability" class="text-decoration-none text-dark">Sustainability</a></li>
              <li><a href="#community" class="text-decoration-none text-dark">Farmer Empowerment</a></li>
              <li><a href="#quality" class="text-decoration-none text-dark">Quality Assurance</a></li>
              <li><a href="#contact" class="text-decoration-none text-dark">Contact Us</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="bi bi-geo-alt-fill me-2"></i> Village Sikhad, Mirzapur, Uttar Pradesh, India - 231306</p>
            <p><i class="bi bi-envelope-fill me-2"></i> singharun009@gmail.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i> +91 9650091622 || 9990044660 </p>
          </div>
        </div>

        <hr class="my-4" />

        <!-- Bottom Row -->
        <div class="row align-items-center text-center">
          <div class="col-md-6 mb-3 mb-md-0">
            <p class="mb-0">&copy; 2025 <strong>Navchetana Agro Center Producer Company Limited</strong>. All Rights
              Reserved.</p>
            <small>Designed by <a href="https://trade4export.com/" target="_blank"
                class="text-decoration-none fw-bold text-dark">Trade4Export</a></small>
          </div>

          <!-- Social Media -->
          <div class="col-md-6">
            <div class="d-flex justify-content-center justify-content-md-end gap-3">
              <a href="#" class="text-dark"><i class="bi bi-facebook fs-5"></i></a>
              <a href="#" class="text-dark"><i class="bi bi-instagram fs-5"></i></a>
              <a href="https://wa.me/918882377136" target="_blank" class="text-dark"><i
                  class="bi bi-whatsapp fs-5"></i></a>
              <a href="#" class="text-dark"><i class="bi bi-linkedin fs-5"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- send message on whatsapp -->
    <script>
      document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const message = document.getElementById("message").value.trim();

        const whatsappMessage = `Hello BS COMPUTERS,%0AName: ${name}%0APhone: ${phone}%0AMessage: ${message}`;
        const whatsappNumber = "919650091622"; // Replace with your WhatsApp number

        window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMessage}`, '_blank');
      });
    </script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>
</body>

</html>