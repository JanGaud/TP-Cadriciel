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
            <a class="navbar-brand" href="/"><object style="pointer-events: none;" data="/img/logoCollege.svg"
                    width="auto" height="80">
                </object>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forum.index') }}">
                                <i class="fa-solid fa-school"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forum.create') }}"><i
                                    class="fa-solid fa-square-plus"></i></a>
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
                    <h5 class="mb-3 text-white">@lang('lang.quote_title')</h5>
                    <p>
                        "@lang('lang.quote')"
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3 text-white">@lang('lang.links')</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">@lang('lang.rules')</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">@lang('lang.link_teachers')</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: whitesmoke;">@lang('lang.link_students')</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-white">@lang('lang.opening_hours')</h5>
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
        @php $locale = session()->get('locale'); @endphp
        <nav class="navbar navbar-light navbar-expand-lg mb-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item lang-item">
                            <a class="dropdown-item @if ($locale == 'en') lang-link @endif"
                                href="/lang/en"><img src="{{ asset('/img/flag/united-kingdom.png') }}">
                                English</a>
                        </li>
                        <li class="nav-item lang-item">
                            <a class="dropdown-item @if ($locale == 'fr') lang-link @endif"
                                href="/lang/fr"><img src="{{ asset('/img/flag/france.png') }}"> Français</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center p-3 secondary-color">
            © 2023 Copyright:
            <a class="text-white" href="https://www.cmaisonneuve.qc.ca/">@lang('lang.copyright')</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

<script>
    var currentURL = window.location.href;
    var links = document.querySelectorAll('.nav-link');
    for (var i = 0; i < links.length; i++) {
        if (links[i].href === currentURL) {
            links[i].classList.add('active');
        }
    }
</script>

<script src="../social/js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/e69611a5eb.js" crossorigin="anonymous"></script>

</html>
