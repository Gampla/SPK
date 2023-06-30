<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="http://localhost/praktikum_ci/assets/stisla/assets/css/style.css">
  <link rel="stylesheet" href="http://localhost/praktikum_ci/assets/stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
	
 <!-- Main Navbar -->
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">#Spiderman No Way Home CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Soul</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Sing2</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
			<li class="nav-item">
                <a class="nav-link" href="dashboard1.php" style="color:"white";"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                   <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                   </svg>
                   Home
                </a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="daftartayang.php" style="color=:"white";">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                   <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                   <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                   <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                   </svg>
                   Movies	
                 </a>
                 </li>
			<li class="nav-item">
				<a class="nav-link" href="auth-register.php" style="color=:"white";">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                Sign Up
				</a>
			</li>
        </ul>
      </nav>
	  
	   <!-- Main Sidebar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
              </li>
              <li class="menu-header">Pages</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                  <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                  <li><a href="auth-login.html">Login</a></li>
                  <li><a href="auth-register.html">Register</a></li>
                </ul>
              </li>
			   <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                  <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                  <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                </ul>
              </li>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
          <div class="row">
            <div class="col-lg-15 col-md-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
         
			<div class="container">
    		<div class="container-judul g-8 no-gu p-4">
    			<h3 style="font-family: 'Days One', sans-serif;">Tayang Hari Ini !</h3>
    		</div>	
			
			
    		<div class="row row-cols-1 row-cols-md-4 g-8 no-gu p-4 text-center">
    			<div class="col-3">
    				<div class="card h-100 shadow">
    					<a href="pembayaran.php">
    						<img src="https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_FMjpg_UX1000_.jpg" class="card-img-top" alt="..." height="440">
    					</a>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                          <div class="text-muted text-small">134 Sales</div>
    				</div>
					</div>
    			<div class="col-3">
    				<div class="card h-100 shadow">
    					<a href="pembayaran.php">
    						<img src="https://upload.wikimedia.org/wikipedia/id/8/87/Sing_2_poster.jpg" class="card-img-top" alt="..." height="440">
    					</a>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </div>
                          <div class="text-muted text-small">93 Sales</div>
    				</div>
    			</div>
    			<div class="col-3">
    				<div class="card h-100 shadow">
    					<a href="pembayaran.php">
    						<img src="https://i.ytimg.com/vi/KHm2Nx3IYBg/movieposter_en.jpg"
    						class="card-img-top" alt="..." height="440">
    						<link href="pembayaran.php">
    					</a>
						 <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
						  <div class="text-muted text-small">127 Sales</div>
                        </div>
    				</div>
    			<div class="col-3">
    				<div class="card h-100 shadow">
    					<a href="pembayaran.php">
    						<img src="https://m.media-amazon.com/images/M/MV5BOTU5NjVkN2YtNmFjZS00MzhjLWI0MGMtZjE3ZmE1OTc0ZjczXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" class="card-img-top" alt="..." height="440">
    						<link href="pembayaran.php">
    					</a>
                          <div class="product-review">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </div>
						  <div class="text-muted text-small">107 Sales</div>
                        </div>
    				</div>
				</div>
			</div>
		</div>
	</div>	

            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                  <h4>Top Countries</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="text-title mb-2">July</div>
                      <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/id.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">Indonesia</div>
                            <div class="text-small text-muted">3,282 <i class="fas fa-caret-down text-danger"></i></div>
                          </div>
                        </li>
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/my.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">Malaysia</div>
                            <div class="text-small text-muted">2,976 <i class="fas fa-caret-down text-danger"></i></div>
                          </div>
                        </li>
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/us.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">United States</div>
                            <div class="text-small text-muted">1,576 <i class="fas fa-caret-up text-success"></i></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6 mt-sm-0 mt-4">
                      <div class="text-title mb-2">August</div>
                      <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/id.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">Indonesia</div>
                            <div class="text-small text-muted">3,486 <i class="fas fa-caret-up text-success"></i></div>
                          </div>
                        </li>
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/ps.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">Palestine</div>
                            <div class="text-small text-muted">3,182 <i class="fas fa-caret-up text-success"></i></div>
                          </div>
                        </li>
                        <li class="media">
                          <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/de.svg" alt="image" width="40">
                          <div class="media-body ml-3">
                            <div class="media-title">Germany</div>
                            <div class="text-small text-muted">2,317 <i class="fas fa-caret-down text-danger"></i></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="container-judul g-8 no-gu p-4">
    			<h3 style="font-family: 'Days One', sans-serif;">Promo !</h3>
    		</div>
    		<div class="p-3 p-md-4 mb-5 text-black shadow" style="border-radius: 10px 10px 10px 10px; background-color: #bbedca ;">
    			<h1 style="font-family: 'Fredoka One', cursive;">DISCOUNT 15%</h1>
    			<p class="lead my-3" >
    				<h4>SETIAP PEMBELIAN 2 TIKET</h4>
    				Masa berlaku 9 Januari - 18 Januari
    			</p>
    		</div>
    	</div>
     	  

	<!-- FOOTER -->
      <footer class="main-footer">
	   <div class="m-0 text-center">
                        <h1><strong>O-Tikets</strong></h1>
                        <p>O-Tikets is a movie & event discovery with on-demand ticket order services. Now you can buy your tickets easily through O-Tikets!</p>
                    </div>  
                <div class="t-footer__text px-5">
                    <ul class="footer-nav text-center">
                        <li class="footer-item">
                            <a class="footer-link" href="termandconditions.php" style="color: #7771c9">Contact Us</a>
                        </li>
                        <li class="footer-item">
                            <a class="footer-link" href="termandconditions.php" style="color: #7771c9;">Term & Conditions</a>
                        </li>
                    </ul>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="http://localhost/praktikum_ci/assets/stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="http://localhost/praktikum_ci/assets/stisla/assets/js/scripts.js"></script>
  <script src="http://localhost/praktikum_ci/assets/stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
</body>
</html>
