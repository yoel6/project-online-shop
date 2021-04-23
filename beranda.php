<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="FortAwesome-Font-Awesome-d79d85c/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>HAYMALE</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand font-weight-bold text-white " href="#"> HAYMALE</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Branda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Reseller <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Bantuan <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button href="#" class="btn btn-light"><i class="fas fa-search"></i></button>
          <div class="icon mt-2 p-2 ">
            <h5>
              <i class="fas fa-cart-plus ml-3 mr-3 text-white"></i>
              <i class="fas fa-envelope mr-3 text-white"></i>
              <i class="fas fa-bell mr-3 text-white"></i>
              <i class="fas fa-sign-in-alt mr-3 text-white"></i>
            </h5>
          </div>
        </form>
       </div>
     </div>
  </nav>
<div class="row mt-5 no-gutters">
  <br>
  <br>
  <div class=" p-4 ">
  <br>
          <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
              <div class="carousel-item active" style="height: 400px">
                <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
              </div>
              <div class="carousel-item" style="height: 400px">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item" style="height: 400px">
                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span style="height: 350px" class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span style="height: 350px" class="sr-only">Next</span>
            </a>
          </div>
    <h4 class="text-center font-wight-bold m-4">PRODUK TERBARU</h4>
    <div class="row no-gutters ml-3 p-5">
      <?php for ($i=0; $i < 10 ; $i++) { ?>
        <div class="card mr-4 ml-4 p-4 mt-4 card animate__animated animate__backInLeft" style="width: 18rem;">
          <img class="card-img-top" src="img/kamera.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Detail</button>
             <a href="#" class="btn btn-dark">Beli</a>
          </div>
        </div>
          <?php } ?>
    </div>
</div>
<div class="col-md-5 col-sm-6 ">
  
</div>
<div class="  no-gutters ml-5 col-md-2 col-sm-6">
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link text-dark" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only ">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link text-dark" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>

<!-- Modal -->
</div>
<br>  
<br>  
    <footer class="site-footer ">
      <div class="container">
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">Yoel Chandra Eka Paksi</a>.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-whatsapp"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  <!-- Site footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php for ($i=0; $i < 10 ; $i++) { ?>
    <br>
  <?php }?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5  class="modal-title" id="exampleModalLabel">Detail Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
            <div class="row"> 
            <div class="col-md-5"> 
               <img class="card-img-top" src="img/headphone.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7"> 
              <table class="table table-borderless">
                  <tr>  
                      <th>Nama Produk</th>
                      <td>handphone</td>
                  </tr>
                  <tr>  
                      <th>Harga</th>
                      <td>Rp.100.000</td>
                  </tr>
                  <tr>  
                      <th>Rating</th>
                      <td><i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="far fa-star"></i>
                      </td>
                  </tr>
                  <tr>  
                      <th>Deskripsi</th>
                      <td>handphone</td>
                  </tr>  
              </table>
            </div>
      </div>
    </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Beli</button>
      </div>
  </div>
</div>

  </body>
</html>