<header class="border-bottom">
    <div class="d-flex justify-content-between">
        
        <h1 class="fw-bold m-2 mb-5">DC Comic List - Admin Panel</h1>
        <nav class="navbar">
            <ul class="d-flex me-5">
                <li class="nav-item mx-4 navbar-nav ">
                    <a href=" {{ route("admin.home") }} " class="nav-link {{ str_starts_with(Route::currentRouteName(), "admin.home") ? 'active, fw-bold, text-primary' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item navbar-nav">
                    <a href=" {{ route("admin.comic.index") }} " class="nav-link {{ str_starts_with(Route::currentRouteName(), "admin.comic") ? 'active, fw-bold, text-primary' : '' }}">
                        Comics
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>