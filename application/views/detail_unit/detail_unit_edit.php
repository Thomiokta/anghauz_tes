
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Unit</h1>
                    </div>
 <div class="card shadow mb-4">

 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Detail Unit</h6>
         
</div>
       <div class="card-body">      
    <table class="table table-bordered table-striped " style="margin-bottom: 10px" id="tabel">
            
        </table>    </div> 
        </div>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Detail Unit Edit</h4>
              <a href="<?php echo site_url('detail_unit') ?>" type="button"  aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </a>
            </div>
            <div class="modal-body"> 
            <form  action="<?php echo $action; ?>" method="post">
                
	    <div class="form-group">
            <label for="int">Blok Kawasan <?php echo form_error('id_kawasan') ?></label>
            <select class="form-control" name="id_kawasan" id="id_kawasan" >
            <?php foreach ($get_kawasan as $kawasan) { ?>
              <option <?php echo $id_kawasan == $kawasan->id_kawasan ? 'selected="selected"' : '' ?> value="<?php echo $kawasan->id_kawasan;?>"><?php echo $kawasan->blok_kawasan;?></option>
            <?php } ?>
          </select>
        </div>
	    <div class="form-group">
            <label for="varchar">No Rumah <?php echo form_error('no_rumah') ?></label>
            <input type="text" class="form-control" name="no_rumah" id="no_rumah" placeholder="No Rumah" value="<?php echo $no_rumah; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="int">Luas Tanah <?php echo form_error('luas_tanah') ?></label>
            <input type="text" class="form-control" name="luas_tanah" id="luas_tanah" placeholder="Luas Tanah" value="<?php echo $luas_tanah; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="int">Luas Bangunan <?php echo form_error('luas_bangunan') ?></label>
            <input type="text" class="form-control" name="luas_bangunan" id="luas_bangunan" placeholder="Luas Bangunan" value="<?php echo $luas_bangunan; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="double">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="uang" placeholder="Harga" value="<?php echo $harga; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Terjual <?php echo form_error('tanggal_terjual') ?></label>
            <input type="date" class="form-control" name="tanggal_terjual" id="tanggal_terjual" placeholder="Tanggal Terjual" value="<?php echo $tanggal_terjual; ?>" required/>
        </div>
	   </div>
            <div class="modal-footer justify-content-between">
             <input type="hidden" name="id_detail_unit" value="<?php echo $id_detail_unit; ?>" /> 
	    <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('detail_unit') ?>" class="btn btn-default">Cancel</a></div>
	     
                
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
        
        $("#uang").inputmask({
            prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0
        });
    </script>