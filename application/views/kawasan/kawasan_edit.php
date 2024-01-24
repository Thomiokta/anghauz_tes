
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kawasan</h1>
                    </div>
 <div class="card shadow mb-4">

 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Kawasan List</h6>
         
</div>
       <div class="card-body">      
    <table class="table table-bordered table-striped " style="margin-bottom: 10px" id="tabel">
            
        </table>    </div> 
        </div>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Kawasan Edit</h4>
              <a href="<?php echo site_url('kawasan') ?>" type="button"  aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </a>
            </div>
            <div class="modal-body"> 
            <form  action="<?php echo $action; ?>" method="post">
                
	    <div class="form-group">
            <label for="int">Luas Kawasan <?php echo form_error('luas_kawasan') ?></label>
            <input type="text" class="form-control" name="luas_kawasan" id="luas_kawasan" placeholder="Luas Kawasan" value="<?php echo $luas_kawasan; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="varchar">Negara <?php echo form_error('negara') ?></label>
            <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" value="<?php echo $negara; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="varchar">Provinsi <?php echo form_error('provinsi') ?></label>
            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $provinsi; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="varchar">Kota <?php echo form_error('kota') ?></label>
            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $kota; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="int">Kecamatan <?php echo form_error('kecamatan') ?></label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="maps">Maps <?php echo form_error('maps') ?></label>
            <textarea class="form-control" rows="3" name="maps" id="maps" placeholder="Maps"><?php echo $maps; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Blok Kawasan <?php echo form_error('blok_kawasan') ?></label>
            <input type="text" class="form-control" name="blok_kawasan" id="blok_kawasan" placeholder="Blok Kawasan" value="<?php echo $blok_kawasan; ?>" required/>
        </div>
	   </div>
            <div class="modal-footer justify-content-between">
             <input type="hidden" name="id_kawasan" value="<?php echo $id_kawasan; ?>" /> 
	    <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kawasan') ?>" class="btn btn-default">Cancel</a></div>
	     
                
             </form>
          </div> 
        </div> 
      </div> 

      <script type="text/javascript">
    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#modal-default").modal({backdrop: 'static', 'show':true}); 
    }
</script> 