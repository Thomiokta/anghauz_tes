     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dokumen</h1>
                    </div>
 <div class="card shadow mb-4">

 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Dokumen List</h6>
         
</div>
       <div class="card-body">      
    <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#modal-default">
                                        <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Create"></i>
                                    </a>
                <a href="<?php echo base_url()?>Detail_unit" class="btn btn-warning btn-circle" ><i class="fas fa-share fa-flip-horizontal" title="Back"></i></a>

        <table class="table table-bordered table-striped " style="margin-bottom: 10px" id="tabel">
            <thead><tr>
                <th>No</th>
		<th>Nama Dokumen</th>
		<th>Action</th>
            </tr></thead><tbody><?php
            foreach ($dokumen_data as $dokumen)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><a href="<?php echo base_url();?>asset/dokumen/<?php echo $dokumen->dokumen ?>" target='_blank'><?php echo $dokumen->nama_dokumen ?></a></td>
			<td style="text-align:center; min-width: 110px;"  >
				<?php 
				echo anchor(site_url('dokumen/delete/'.$dokumen->id_dokumen),'<i class="fas fa-trash"></i>','class="btn btn-danger btn-circle alert_notif" data-toggle="tooltip" data-placement="top" title="Delete"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?></tbody>
        </table>  
          </div> 
        </div>
        
 <?php $this->load->view('Dokumen/dokumen_add')?> 
 <script src="<?php echo base_url()?>asset/vendor/jquery/jquery-3.7.1.min.js"></script>
 <script>
$(document).ready(function(){  
 $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>Dokumen/live_update",
      method:"POST",
      data:{id:id, table_column:table_column, value:value},
      success:function(data)
      {
        Swal.fire({
  icon: 'success',
  title: 'Edit Success ',
  showConfirmButton: false,
  timer: 1000
}) 
        load_data();
      }
    })
  });
 

});
</script>