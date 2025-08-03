<?php include '../includes/header.php'; ?>

<section class="contact-section py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bold mb-4">Contact Us</h2>
                <p class="lead">Have questions about our AI Trading Signals? Get in touch with our team.</p>
                
                <div class="mt-5">
                    <div class="d-flex mb-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle me-4 flex-shrink-0">
                            <i class="fas fa-envelope fa-lg"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p class="text-muted mb-0">info@tradingsignals.example</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle me-4 flex-shrink-0">
                            <i class="fas fa-phone fa-lg"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p class="text-muted mb-0">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle me-4 flex-shrink-0">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                        </div>
                        <div>
                            <h5>Office</h5>
                            <p class="text-muted mb-0">123 Trading Street, Suite 456<br>New York, NY 10001</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Send us a message</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>