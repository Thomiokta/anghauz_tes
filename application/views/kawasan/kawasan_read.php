
 <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kawasan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kawasan</a></li>
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
              <h3 class="card-title">Kawasan List</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <form role="form" >
        <table class="table">
	    <tr><td>Luas Kawasan</td><td><?php echo $luas_kawasan; ?> M<sup>2</sup></td></tr>
	    <tr><td>Negara</td><td><?php echo $negara; ?></td></tr>
	    <tr><td>Provinsi</td><td><?php echo $provinsi; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $kota; ?></td></tr>
	    <tr><td>Kecamatan</td><td><?php echo $kecamatan; ?></td></tr>
	    <tr><td>Maps</td><td><?php echo $maps; ?></td></tr>
	    <tr><td>Blok Kawasan</td><td><?php echo $blok_kawasan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kawasan') ?>" class="btn btn-default">Cancel</a></td></tr>
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