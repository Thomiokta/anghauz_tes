     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kawasan</h1>
                    </div>
 <div class="card shadow mb-4">

 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Kawasan List</h6>
         
</div>
       <div class="card-body">      
    <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#modal-default">
                                        <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Create"></i>
                                    </a>

        <table class="table table-bordered table-striped " style="margin-bottom: 10px" id="tabel">
            <thead><tr>
                <th>No</th>
		<th>Luas Kawasan</th>
		<th>Negara</th>
		<th>Provinsi</th>
		<th>Kota</th>
		<th>Kecamatan</th>
		<th>Maps</th>
		<th>Blok Kawasan</th>
		<th>Action</th>
            </tr></thead><tbody><?php
            foreach ($kawasan_data as $kawasan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $kawasan->luas_kawasan ?> M<sup>2</sup></td>
			<td class="table_data" data-row_id="<?php echo $kawasan->id_kawasan ?>" data-column_name="negara" contenteditable><?php echo $kawasan->negara ?></td>
			<td class="table_data" data-row_id="<?php echo $kawasan->id_kawasan ?>" data-column_name="provinsi" contenteditable><?php echo $kawasan->provinsi ?></td>
			<td class="table_data" data-row_id="<?php echo $kawasan->id_kawasan ?>" data-column_name="kota" contenteditable><?php echo $kawasan->kota ?></td>
			<td class="table_data" data-row_id="<?php echo $kawasan->id_kawasan ?>" data-column_name="kecamatan" contenteditable><?php echo $kawasan->kecamatan ?></td>
			<td><?php echo anchor($kawasan->maps,'<i class="fas fa-map-pin"></i>','class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Maps" target="blank"');?></td>
			<td class="table_data" data-row_id="<?php echo $kawasan->id_kawasan ?>" data-column_name="blok_kawasan" contenteditable><?php echo $kawasan->blok_kawasan ?></td>
			<td style="text-align:center; min-width: 110px;"  >
				<?php 
				echo anchor(site_url('kawasan/read/'.$kawasan->id_kawasan),'<i class="fas fa-eye"></i>','class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Read"'); 
				echo anchor(site_url('kawasan/update/'.$kawasan->id_kawasan),'<i class="fas fa-edit"></i>','class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"'); 
				echo anchor(site_url('kawasan/delete/'.$kawasan->id_kawasan),'<i class="fas fa-trash"></i>','class="btn btn-danger btn-circle alert_notif" data-toggle="tooltip" data-placement="top" title="Delete"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?></tbody>
        </table>  
          </div> 
        </div>
        
 <?php $this->load->view('Kawasan/kawasan_add')?> 
 <script src="<?php echo base_url()?>asset/vendor/jquery/jquery-3.7.1.min.js"></script>
 <script>
$(document).ready(function(){  
 $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>Kawasan/live_update",
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