<nav class="navbar navbar-expand-lg sticky">
    <div class="container-fluid justify-content-between">
        <div class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2 py-3">
                        <a class="nav-link active montserrat-600" aria-current="page" href="#">WOMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PLUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ACCESSORIES</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex">
            <a class="navbar-brand " href="#"><img src="{{ asset('img/Logo.svg') }}" alt="Threaded logo" srcset=""></a>
        </div>
        <div class="d-flex">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link "  href="#"><i class='bx bx-user nav-icon' ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#"><i class='bx bx-shopping-bag nav-icon' ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#"><i class='bx bx-heart nav-icon' ></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#"><i class='bx bx-support nav-icon'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#"><i class='bx bx-search nav-icon'></i></a>
                </li>
                <li class="nav-item">
                    <div class="currency d-flex align-items-center justify-content-center gap-2">
                        <div class=""><img src="{{asset('img/US Flag.png')}}" alt="US Flag" srcset=""></div>
                        <div class="">USD $</div>
                        <i class='bx bx-chevron-down' ></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>