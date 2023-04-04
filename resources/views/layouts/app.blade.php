<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- Connexion Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('lang.login')</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="col-form-label">@lang('lang.email')</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">@lang('lang.password')</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger"
                        data-dismiss="modal">@lang('lang.close')</button>
                    <button type="submit" class="btn btn-outline-primary">@lang('lang.login')</button>
                </div>
                </form>
            </div>
        </div>
    </div>

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
                        @if (auth()->user()->isAdmin())
                            <li class="nav-item"><a class="nav-link" href="/create">@lang('lang.add_user')</a></li>
                            <li class="nav-item"><a class="nav-link" href="/etudiants">@lang('lang.user_list')</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" aria-current="page"
                                href="{{ route('forum.index') }}">@lang('lang.social_corner')</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="{{ route('etudiant.edit', ['etudiant' => auth()->user()->etudiant]) }}"
                                    class="dropdown-item" type="button">@lang('lang.modify_user')</a>
                                <a href="{{ route('etudiant.logout') }}" class="dropdown-item"
                                    type="button">@lang('lang.logout')</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@connexion">@lang('lang.login')</a>
                        </li>
                    @endif
                </ul>
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
                    <h5 class="mb-1 text-white">Heures d'ouvertures</h5>
                    <table class="table" style="border-color: #ffffff;">
                        <tbody>
                            <tr>
                                <td>@lang('lang.mon-fri')</td>
                                <td>7am - 10:30pm</td>
                            </tr>
                            <tr>
                                <td>@lang('lang.sat-sun')</td>
                                <td>7am - 6pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @php $locale = session()->get('locale'); @endphp
            <nav class="navbar navbar-light navbar-expand-lg mb-5">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bstarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="dropdown-item @if ($locale == 'en') bg-warning @endif"
                                    href="/lang/en"><img src="{{ asset('/img/flag/united-kingdom.png') }}">
                                    English</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item @if ($locale == 'fr') bg-warning @endif"
                                    href="/lang/fr"><img src="{{ asset('/img/flag/france.png') }}"> Français</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="text-center p-3 secondary-color">
            © 2023 Copyright:
            <a class="text-white" href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

{{-- fonction pour empecher le modal login de fermer quand il y a une erreur --}}
<script>
    $(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            var data = form.serialize();
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(response) {
                    // Redirect to the success page on successful login
                    window.location.href = '/etudiant';
                },
                error: function(xhr) {
                    // Show the error message inside the modal
                    var errorMessage = xhr.responseText;
                    var errorBubble = $(
                        '<div class="alert alert-danger" role="alert"></div>').html(
                        errorMessage);
                    $('#loginModal .modal-body').append(errorBubble);
                }
            });
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/e69611a5eb.js" crossorigin="anonymous"></script>

</html>
