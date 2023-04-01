<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../social/css/styles.css" rel="stylesheet" />
    <link href="../social/css/social.css" rel="stylesheet" />

</head>


<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg primary-color">
        <div class="container px-1">
            <a class="navbar-brand" href="/"><img src="/img/logoCollege.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-square-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-bell"></i></a>
                        </li>
                        {{-- Dropdown utilisateur --}}
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="#" class="dropdown-item" type="button">Profil</a>
                                <a href="{{ route('etudiant.edit', ['etudiant' => auth()->user()->etudiant]) }}"
                                    class="dropdown-item" type="button">Modifier mon compte</a>
                                <a href="{{ route('etudiant.logout') }}" class="dropdown-item"
                                    type="button">Déconnexion</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@connexion">Connexion</a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer-->
    <footer class="third-color">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3 text-white">Citation du jour</h5>
                    <p>
                        "La communication est le ciment qui maintient les relations unies et florissantes. Elle est
                        comme une pluie fine qui arrose les âmes et les esprits, nourrissant les racines de l'empathie
                        et de la compréhension. Sans une communication claire et ouverte, les ponts entre les personnes
                        peuvent s'effondrer, laissant place à la méfiance, aux malentendus et à la solitude."
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3 text-white">Liens</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">Réglements</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">Les enseignants</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">Les étudiants</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-white">Heures d'ouvertures</h5>
                    <table class="table" style="border-color: #ffffff;">
                        <tbody>
                            <tr>
                                <td>Lun - Ven:</td>
                                <td>7am - 10:30pm</td>
                            </tr>
                            <tr>
                                <td>Sam - Dim:</td>
                                <td>7am - 6pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3 secondary-color">
            © 2023 Copyright:
            <a class="text-white" href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

<script src="../social/js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/e69611a5eb.js" crossorigin="anonymous"></script>

</html>
