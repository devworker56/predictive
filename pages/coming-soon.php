<?php include '../includes/header.php'; ?>

    <section class="coming-soon-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 100px; height: 100px;">
                        <i class="fas fa-clock fa-3x"></i>
                    </div>
                    <h1 class="fw-bold mb-4">Coming Soon</h1>
                    
                    <?php if (isset($_GET['existing']) && $_GET['existing'] == 1): ?>
                        <div class="alert alert-info mb-4">
                            <p>We already have your information on file. You'll be notified as soon as our service launches.</p>
                        </div>
                    <?php else: ?>
                        <p class="lead mb-4">Thank you for your interest in our AI Trading Signals service!</p>
                        <div class="alert alert-success mb-4">
                            <p>We've received your subscription request. Our team is currently finalizing the service to ensure the highest quality.</p>
                            <p class="mb-0">You'll receive an email notification as soon as we're ready to launch. We appreciate your patience!</p>
                        </div>
                    <?php endif; ?>
                    
                    <p class="text-muted">In the meantime, feel free to explore our <a href="/pages/how-it-works.php">How It Works</a> page to learn more about our technology.</p>
                    <a href="/" class="btn btn-primary mt-3">Back to Home</a>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>