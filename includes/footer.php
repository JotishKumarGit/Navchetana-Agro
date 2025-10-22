<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4">
        <form id="enquiryForm">
          <div class="row g-3">

            <div class="col-md-6">
              <label for="name" class="form-label">Name*</label>
              <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-6">
              <label for="phone" class="form-label">Mobile Number*</label>
              <input type="tel" class="form-control" id="phone" placeholder="Your Mobile Number" required>
            </div>

            <div class="col-md-6">
              <label for="subject" class="form-label">Subject*</label>
              <input type="text" class="form-control" id="subject" placeholder="Subject" required>
            </div>

            <div class="col-12">
              <label for="message" class="form-label">Message*</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
            </div>

            <div class="col-12 text-center mt-4">
              <button type="submit" class="btn btn-success w-100">Send via WhatsApp</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- send enquiry on whatsapp -->
<script>
  document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Get form values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // WhatsApp message format
    const whatsappMessage = `Enquiry from BS COMPUTERS:%0A
*Name:* ${name}%0A
*Email:* ${email}%0A
*Mobile:* ${phone}%0A
*Subject:* ${subject}%0A
*Message:* ${message}`;

    // Your WhatsApp number (without + sign)
    const whatsappNumber = "918882377136";

    // Open WhatsApp
    window.open(`https://wa.me/${whatsappNumber}?text=${encodeURI(whatsappMessage)}`, '_blank');
  });
</script>

<!-- Footer -->
<footer class="pt-5 pb-4 bg-light text-dark" data-aos="fade-up" data-aos-delay="100">
  <div class="container text-center text-md-start">
    <div class="row text-center text-md-start">

      <!-- Company Info -->
      <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
        <h5 class="text-uppercase fw-bold mb-4">BS COMPUTERS</h5>
        <p>
          BS COMPUTERS is your trusted partner for all laptop and desktop parts, repairs, and IT accessories.
          From adapters to SSDs, we provide quality components and professional services with guaranteed support.
        </p>
      </div>

      <!-- Products -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Top Products</h6>
        <ul class="list-unstyled">
          <li><a href="#products" class="text-decoration-none text-dark">Laptop Adapter</a></li>
          <li><a href="#products" class="text-decoration-none text-dark">Laptop Cable</a></li>
          <li><a href="#products" class="text-decoration-none text-dark">Laptop Display</a></li>
          <li><a href="#products" class="text-decoration-none text-dark">Laptop Fan</a></li>
          <li><a href="#products" class="text-decoration-none text-dark">Laptop Keyboard</a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#about" class="text-decoration-none text-dark">About Us</a></li>
          <li><a href="#products" class="text-decoration-none text-dark">Products</a></li>
          <li><a href="#services" class="text-decoration-none text-dark">Services</a></li>
          <li><a href="#faq" class="text-decoration-none text-dark">FAQ</a></li>
          <li><a href="#contact" class="text-decoration-none text-dark">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
        <p><i class="bi bi-geo-alt-fill me-2"></i> F03, Sky Plaza, Sector 16B Rd, Bhangel, Noida, UP 201318</p>
        <p><i class="bi bi-envelope-fill me-2"></i> bscomputers04@gmail.com</p>
        <p><i class="bi bi-telephone-fill me-2"></i> +91 88823 77136</p>
        <p><i class="bi bi-clock-fill me-2"></i> Mon - Sat: 10:00 AM - 7:00 PM</p>
      </div>

    </div>

    <hr class="my-4" />

    <!-- Bottom Row -->
    <div class="row align-items-center text-center">
      <div class="col-md-6 mb-3 mb-md-0">
        <p class="mb-0">&copy; 2025 <strong>BS COMPUTERS</strong>. All Rights Reserved.</p>
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
  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();

    const whatsappMessage = `Hello BS COMPUTERS,%0AName: ${name}%0APhone: ${phone}%0AMessage: ${message}`;
    const whatsappNumber = "91XXXXXXXXXX"; // Replace with your WhatsApp number

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
