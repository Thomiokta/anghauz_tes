
 <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Unit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Detail Unit</a></li>
              <li class="breadcrumb-item active">Read</li>
            </ol>
          </div>
        </div>
      </div>
    </section> 
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail Unit List</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <form role="form" >
        <table class="table">
	    <tr><td>Blok Kawasan</td><td><?php echo $blok_kawasan; ?></td></tr>
	    <tr><td>No Rumah</td><td><?php echo $no_rumah; ?></td></tr>
	    <tr><td>Luas Tanah</td><td><?php echo $luas_tanah; ?> M<sup>2</sup></td></tr>
	    <tr><td>Luas Bangunan</td><td><?php echo $luas_bangunan; ?> M<sup>2</sup></td></tr>
	    <tr><td>Harga</td><td><?php echo $harga; ?></td></tr>
	    <tr><td>Tanggal Terjual</td><td><?php $tanggal_terjua = $this->Detail_unit_model->tgl_ind($tanggal_terjual); echo $tanggal_terjua ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('detail_unit') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
       
              </form>
             <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
    
    </section>
    <!-- /.content -->
  </div>