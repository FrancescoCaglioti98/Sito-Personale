<nav class="navbar navbar-expand-sm navbar-light bg-light">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <i class="bi bi-house"></i>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="side_menu">
            <ul class="ms-auto navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link {{ Route::is( 'index' ) ? 'disabled' : 'active' }}" href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is( 'projects' ) ? 'disabled' : 'active' }}" href="{{ route('projects') }}">Progetti</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is( 'about_me' ) ? 'disabled' : 'active' }}" href="{{ route('about_me') }}">About Me</a>
                </li>

            </ul>
            
        </div>
    </div>
</nav>
