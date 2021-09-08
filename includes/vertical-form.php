
<form class="OTMForm vertical-form">
  <div class="input-wrapper mb-1 position-relative">
    <i class="fas fa-user position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <input class="form-control" type="text" name="from" placeholder="Full Name*" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper mb-1 position-relative">
    <i class="fas fa-envelope position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <input class="form-control" type="email" name="sender" placeholder="Email Address*" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper mb-1 position-relative">
    <i class="fas fa-phone position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <input class="form-control" type="text" name="phone" placeholder="Phone Number*" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper">
    <textarea class="form-control mb-1" name="msg"></textarea>
    <input class="d-none" name="your-url" type="text" tabindex="-1" autocomplete="off" />
    <button class="btn btn-secondary btn-block mx-auto" type="submit" title="Click to Submit">Send Message</button>
  </div><!--/.input-wrapper-->
  <div class="alert alert-success mt-2 d-none" role="alert">
    Your Message Has been Successfully Sent. Looking forward to speaking with you soon.
  </div><!--/.alert-success-->
  <div class="alert alert-danger mt-2 d-none" role="alert">
    Your Message Has Not been sent. Try again later.
  </div><!--/.alert-danger-->
</form>
