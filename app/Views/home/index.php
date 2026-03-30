<section class="hero">
    <div class="hero-content">
        <h2><?= Security::esc($data['title']); ?></h2>
        <p class="lead"><?= Security::esc($data['description']); ?></p>
        <a href="#" class="btn btn-primary">Get Started</a>
    </div>
</section>

<section class="features-grid">
    <div class="feature-card">
        <h3>Secure Routing</h3>
        <p>All traffic funneled through public/index.php. Application logic is hidden from direct access.</p>
    </div>
    <div class="feature-card">
        <h3>CSRF & XSS Protection</h3>
        <p>Built in token generator and <code>esc()</code> helper to sanitize data automatically before rendering.</p>
    </div>
    <div class="feature-card">
        <h3>PDO Database Wrapper</h3>
        <p>Pre-configured Database class utilizing PDO prepared statements to prevent SQL injections securely.</p>
    </div>
</section>

<section class="cta">
    <div class="cta-content">
        <h2>Ready to get started?</h2>
        <p>Create your account today and experience the benefits of SparkMobile.</p>
        <a href="#" class="btn btn-primary">Get Started</a>
    </div>
</section>
