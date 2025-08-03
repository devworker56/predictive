<?php include '../includes/header.php'; ?>

    <section class="pricing-section py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Simple, Transparent Pricing</h2>
                <p class="lead text-muted">One plan with all the features you need</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-primary text-white py-4">
                            <h4 class="my-0 fw-normal text-center">Premium Plan</h4>
                        </div>
                        <div class="card-body p-4">
                            <h2 class="card-title pricing-card-title text-center">$99<small class="text-muted fw-light">/mo</small></h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 50 daily trading signals</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Real-time market sentiment analysis</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Time series forecasting models</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> News correlation alerts</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Email & SMS notifications</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 24/7 customer support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center mt-5" id="subscribe">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="text-center mb-4">Start Your Free 7-Day Trial</h3>
                            <p class="text-center text-muted mb-4">No credit card required. You'll only be charged after your trial ends.</p>
                            
                            <form action="/process-subscription.php" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="company" class="form-label">Company (Optional)</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Start Free Trial</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>