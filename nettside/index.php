
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sveiv - Markerless Motion Capture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SVEIV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#technology">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How It Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#use-cases">Use Cases</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container fade-in">
            <h1 class="display-4">Markerless Motion Capture for the Masses</h1>
            <p class="lead">3D analysis available for everyone. Capture and analyze movement without the need for expensive hardware.</p>
            <a href="#contact" class="btn btn-primary">Get in Touch</a>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 slide-in-left">
                    <h2>About Sveiv</h2>
                    <p>Sveiv is a sports-tech company dedicated to making 3D motion analysis accessible to everyone. Our innovative markerless motion capture technology allows athletes, coaches, and enthusiasts to analyze movement with unprecedented ease and accuracy. We believe that by removing the barriers of expensive hardware and complex setups, we can unlock the full potential of human performance.</p>
                </div>
                <div class="col-lg-6 slide-in-right">
                    <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                        <i class="fas fa-robot" style="font-size: 8rem; color: var(--primary-color);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="technology" class="py-5 bg-dark">
        <div class="container">
            <h2 class="text-center mb-5">Our Technology</h2>
            <div class="row">
                <div class="col-md-4 fade-in">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="fas fa-brain"></i></div>
                        <h5>AI-Powered Engine</h5>
                        <p>Our system uses advanced neural networks to accurately detect and track human motion from standard video footage.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="transition-delay: 200ms;">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="fas fa-cubes"></i></div>
                        <h5>Real-time 3D Reconstruction</h5>
                        <p>We generate a precise 3D model of the movement, providing in-depth biomechanical data without any markers.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="transition-delay: 400ms;">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="fas fa-cloud"></i></div>
                        <h5>Cloud-Based Platform</h5>
                        <p>Access, analyze, and share your motion data from anywhere in the world through our secure cloud platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">How It Works</h2>
            <div class="row text-center">
                <div class="col-md-4 slide-in-left">
                    <div class="process-step">
                        <div class="process-number">1</div>
                        <h5>Record</h5>
                        <p>Capture video of the movement using any standard camera - even your smartphone.</p>
                    </div>
                </div>
                <div class="col-md-4 slide-in-left" style="transition-delay: 200ms;">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h5>Upload</h5>
                        <p>Upload the video file to the Sveiv cloud platform through our secure web interface.</p>
                    </div>
                </div>
                <div class="col-md-4 slide-in-left" style="transition-delay: 400ms;">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h5>Analyze</h5>
                        <p>Our AI processes the video and provides you with a detailed 3D biomechanical analysis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="use-cases" class="py-5 bg-dark">
        <div class="container">
            <h2 class="text-center mb-5">Who Can Benefit?</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 fade-in">
                    <div class="feature-card">
                        <h5><i class="fas fa-running me-2"></i> Athletes</h5>
                        <p>Optimize your technique, prevent injuries, and track your progress with detailed performance metrics.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in" style="transition-delay: 200ms;">
                    <div class="feature-card">
                        <h5><i class="fas fa-whistle me-2"></i> Coaches</h5>
                        <p>Gain objective insights into your athletes' movements to provide more effective, data-driven coaching.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in" style="transition-delay: 400ms;">
                    <div class="feature-card">
                        <h5><i class="fas fa-heartbeat me-2"></i> Physiotherapists</h5>
                        <p>Assess patient recovery, quantify movement patterns, and design more effective rehabilitation programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-6 slide-in-left">
                    <div class="testimonial-card">
                        <p>"Sveiv has completely changed the way I analyze my performance. The data is incredibly detailed and easy to understand. I've seen a significant improvement in my technique in just a few weeks."</p>
                        <p class="author">- Alex Johnson, Pro Athlete</p>
                    </div>
                </div>
                <div class="col-md-6 slide-in-right">
                    <div class="testimonial-card">
                        <p>"As a coach, having access to this level of biomechanical data is a game-changer. It allows me to provide targeted feedback to my athletes that is backed by real numbers. Highly recommended."</p>
                        <p class="author">- Maria Rodriguez, Head Coach</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-8 mx-auto fade-in">
                    <form id="contact-form" action="contact.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    <div id="form-messages" class="mt-3"></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center py-3">
        <div class="container">
            <p>&copy; 2025 Sveiv. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
