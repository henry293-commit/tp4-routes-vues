<header>
    <style>
        .navbar-custom {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            color: white;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }

        .navbar-custom .nav-link:hover {
            color: #f1c40f !important;
        }

        .navbar-custom .navbar-name {
            font-weight: bold;
            color: #ecf0f1;
            font-size: 16px;
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .navbar-custom .navbar-name::before {
            content: "👤 ";
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .navbar-name {
                display: none;
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/">Maison Dyna </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                ☰
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/apropos">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/packages">Packages</a>
                    </li>
                </ul>
                <div class="navbar-name">
                    Henry KALOTA DYNA MUKENDI
                </div>
            </div>
        </div>
    </nav>
</header>
