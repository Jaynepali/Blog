<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Application - React Js</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}"> <!-- Your custom styles -->
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Blog Application</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#portfolio">Blogs</a></li>
                @if(Auth::user())
                  <li class="nav-item"><a class="nav-link" href="{{ route('/home') }}">Dashboard</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center py-5">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading mb-0">Welcome to the Blog Application</h1>
        <p class="masthead-subheading font-weight-light mb-0">A place to share your thoughts and stories</p>
    </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Blog Posts</h2>
        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Posts Grid -->
        <div class="row">
            @forelse($posts as $post)
                <div class="col-md-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <h5 class="card-title text-dark">{{ $post->title }}</h5>
                            <p class="card-text text-secondary">{{ Str::limit($post->description, 100) }}</p>
                        </div>
                        <div class="card-footer text-center bg-white border-0">
                            <a href=" {{ url("/posts/view/{$post->id}") }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No blog posts available at the moment.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-dark text-center text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Footer Location -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Sydney, Australia<br />1001</p>
            </div>
            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Made by Myself</h4>
                <p class="lead mb-0">Crafting the best user experience for you.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright Section -->
<div class="copyright py-4 text-center text-white bg-dark">
    <div class="container"><small>Copyright &copy; Your Website 2024</small></div>
</div>

<!-- Bootstrap core JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
