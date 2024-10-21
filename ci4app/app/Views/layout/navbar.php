<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Komik Apps BY RinasCode</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (session()->get('isLoggedIn')) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Login</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/komik">Komik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/people">People</a>
                </li>

                <?php if (session()->get('isLoggedIn')) : ?>
                    <!-- Tampilkan Logout jika user sudah login -->
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
