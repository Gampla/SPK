<!-- Main Navbar -->
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
           </ul>
        </form>
        <ul class="navbar-nav navbar-right">
			<!--<li class="nav-item">
                <a class="nav-link" href="daftartayang.php" style="color=:"white";">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                   <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                   <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                   <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                   </svg>
                   Movies	
                 </a>
                 </li>-->
                 <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('auth/logout');?>" style="color=:"white";">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                Logout
				</a>
			</li>
        </ul>
      </nav>