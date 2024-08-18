<!-- resources/views/partials/sidebar.blade.php -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    Posts
                </a>
            </li>
        </ul>
    </div>
</nav>
