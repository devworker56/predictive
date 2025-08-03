<?php include '../includes/header.php'; ?>

<section class="how-it-works-section py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How Our AI Trading Signals Work</h2>
            <p class="lead text-muted">A three-step process to generate predictive trading signals</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">1</div>
                        <h4>Data Collection</h4>
                        <p class="text-muted">Our system aggregates data from multiple sources including market feeds, news APIs, and social media platforms in real-time.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">2</div>
                        <h4>AI Analysis</h4>
                        <p class="text-muted">Multiple AI models process the data to identify patterns, sentiment trends, and potential correlations between events and price movements.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">3</div>
                        <h4>Signal Generation</h4>
                        <p class="text-muted">The system combines all analyses to generate trading signals with confidence scores and recommended entry/exit points.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 bg-light">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Technology Stack</h4>
                        <div class="row text-center">
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-robot fa-2x text-primary"></i>
                                    <div class="small mt-2">NLP</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-network-wired fa-2x text-primary"></i>
                                    <div class="small mt-2">Neural Nets</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-chart-bar fa-2x text-primary"></i>
                                    <div class="small mt-2">TS Analysis</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-cloud fa-2x text-primary"></i>
                                    <div class="small mt-2">Cloud</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-database fa-2x text-primary"></i>
                                    <div class="small mt-2">Big Data</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="tech-icon bg-white p-3 rounded shadow-sm">
                                    <i class="fas fa-bolt fa-2x text-primary"></i>
                                    <div class="small mt-2">Real-time</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.step-number {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
}
.tech-icon {
    transition: transform 0.3s ease;
}
.tech-icon:hover {
    transform: translateY(-5px);
}
</style>

<?php include '../includes/footer.php'; ?>