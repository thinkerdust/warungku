<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/assets/images/logo-bg.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mx-auto">
        <li class="nav-item {{ $nav =='home' ? 'active':'' }}">
            <a class="nav-link" href="{{ route('home') }}">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Promo</a>
        </li>
        <li class="nav-item dropdown {{ $nav =='product' ? 'active':'' }}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produk
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('food') }}">Makanan</a>
            <a class="dropdown-item" href="{{ route('drink') }}">Minuman</a>
            <a class="dropdown-item" href="{{ route('household') }}">Alat Rumah Tangga</a>
            </div>
        </li>
        <li class="nav-item {{ $nav =='contact' ? 'active':'' }}">
            <a class="nav-link" href="{{ route('contact') }}"> <i class="fa fa-phone"></i> Hubungi Kami</a>
        </li>
        
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('laravue') }}"><i class="fa fa-user"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link bts-search" data-toggle="modal" data-target="#SearchModal"><i class="fa fa-search"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->

 <!-- Login Modal -->
 <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">LOGIN</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body login-form">
            <form>
                <div class="avatar">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email Address : </label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Password : </label>
                    <input type="password" class="form-control" id="recipient-name">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Log In</button>
            <h5> OR </h5>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Register</button>
        </div>
        </div>
    </div>
</div> -->
 <!-- End Login Modal -->

 <!-- Search Modal -->
<div class="modal fade" id="SearchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form class="form-inline my-2 my-lg-0">
                    <input type="text" class="form-control mr-sm-2 search-form" placeholder="Cari Barang Mu Disini!">
                    <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
 <!-- End Search Modal -->