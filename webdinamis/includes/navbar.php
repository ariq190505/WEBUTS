<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="?page=home"><i class="fas fa-laptop-code"></i> Lumba </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? 'home') === 'home' ? 'active' : '' ?>" href="?page=home"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'about' ? 'active' : '' ?>" href="?page=about"><i class="fas fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'contact' ? 'active' : '' ?>" href="?page=contact"><i class="fas fa-envelope"></i> Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($_GET['page'] ?? '') === 'learn' ? 'active' : '' ?>" href="#" id="learnDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book-reader"></i> Belajar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="learnDropdown">
                        <li><a class="dropdown-item" href="?page=datatables"><i class="fas fa-table"></i> Datatables</a></li>
                        <li><a class="dropdown-item" href="?page=form"><i class="fas fa-list-alt"></i> Form</a></li>
                    </ul>
                </li>
                <!-- Dropdown Menu for Forms -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($_GET['page'] ?? '') === 'form' ? 'active' : '' ?>" href="#" id="formDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list-alt"></i> Form
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formDropdown">
                        <li><a class="dropdown-item" href="?page=contact"><i class="fas fa-envelope"></i> Contact Form</a></li>
                        <li><a class="dropdown-item" href="?page=feedback"><i class="fas fa-comment-dots"></i> Feedback Form</a></li>
                        <!-- Tambahkan form lain jika perlu -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2 bg-dark text-light border-secondary" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
