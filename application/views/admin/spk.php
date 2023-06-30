
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Hasil</h1>
          </div>
		  
        <section class="section">
          <div class="section-header">
		<div class="container-fluid">
			<button class="btn btn-sm-6 btn-primary" data-toggle="modal"
			data-target="#spk">Tambah Data</button>
		</div>
		</div>
		<div class="section-header">
		<div class="container-fluid">
		<table class="table table-bordered">
			<tr>
				<th>NO</th>
				<th>SCORE A</th>
				<th>SCORE B</th>
				<th>SCORE C</th>
				<th>SCORE D</th>
			</tr>
		</section></section>

			<tr>
				<td></td>	
				<td></td>	
				<td></td>	
				<td></td>	
				<td></td>	
			</tr>
		
			
		</table>
		</div>
		</div>
		</div>
		
		<!-- Modal -->
	<div class="modal fade" id="spk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA</h5>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
		
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Kualitas</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>Asal Produsen</label>
				<input type="text" name="" class="form-control">
			</div>
			<div class="form-group">
				<label>QTY</label>
				<input type="text" name="" class="form-control">
			</div>
	  </div>
      <div class="modal-footer">
	  <a href="<?php echo base_url('admin/spk')?>"><div class="btn btn-danger">Kembali</div></a>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
	  
	  </form>
	  
    </div>
  </div>
  