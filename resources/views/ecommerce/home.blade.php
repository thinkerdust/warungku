@extends('master')

@section('contents')
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/assets/images/carousel/3.png" class="d-block w-100" alt="Carousel Image">
        </div>
        <div class="carousel-item">
        <img src="/assets/images/carousel/1.png" class="d-block w-100" alt="Carousel Image">
        </div>
        <div class="carousel-item">
        <img src="/assets/images/carousel/2.png" class="d-block w-100" alt="Carousel Image">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End Carousel -->

<!-- Contents -->
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="section-title">
                <h1>Produk Terlaris</h1>
            </div>
            <div class="row row-cols-md-4">
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua.jpg" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua-1.png" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua.jpg" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua.jpg" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua.jpg" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card border-0">
                        <img src="/assets/images/produk/aqua.jpg" class="card-img-top" alt="Produk" >
                        <div class="card-body">
                            <h5 class="card-title">Aqua 1500ML</h5>
                            <p class="card-text">Rp 50.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
 <!--End Contents  -->

 <!-- Login Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
 <!-- End Login Modal -->
@endsection