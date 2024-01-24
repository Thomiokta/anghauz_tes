
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel"
        aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content ">
            <div class="modal-header bg-primary">
              <h4 class="modal-title"id="exampleModalLabel">Kawasan Input</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
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
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kawasan') ?>" class="btn btn-default">Cancel</a></div>
	     
                
             </form>
          </div> 
        </div> 
      </div> 

      