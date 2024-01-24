
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel"
        aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content ">
            <div class="modal-header bg-primary">
              <h4 class="modal-title"id="exampleModalLabel">Dokumen Input</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> 
            <form  action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                
	    <div class="form-group">
            <label for="varchar">Nama Dokumen <?php echo form_error('nama_dokumen') ?></label>
            <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" placeholder="Nama Dokumen" value="<?php echo $nama_dokumen; ?>" required/>
        </div>
	    <div class="form-group">
            <label for="varchar">Dokumen <?php echo form_error('dokumen') ?></label>
            <input type="file" class="form-control" name="dokumen" id="dokumen" placeholder="Dokumen" value="<?php echo $dokumen; ?>" required/>
        </div>
            <input type="hidden" name="id_detail_unit" value="<?php echo $id_detail_unit; ?>" required/>
	   </div>
            <div class="modal-footer justify-content-between">
             <input type="hidden" name="id_dokumen" value="<?php echo $id_dokumen; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dokumen') ?>" class="btn btn-default">Cancel</a></div>
	     
                
             </form>
          </div> 
        </div> 
      </div> 

      