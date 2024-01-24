     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Unit</h1>
                    </div>
 <div class="card shadow mb-4">

 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Detail Unit</h6>
         
</div>
       <div class="card-body">      
    <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#modal-default">
                                        <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Create"></i>
                                    </a>

        <table class="table table-bordered table-striped " style="margin-bottom: 10px" id="tabel">
            <thead><tr>
                <th>No</th>
		<th>Blok Kawasan</th>
		<th>No Rumah</th>
		<th>Luas Tanah</th>
		<th>Luas Bangunan</th>
		<th>Harga</th>
		<th>Tanggal Terjual</th>
		<th>Action</th>
            </tr></thead><tbody><?php
            foreach ($detail_unit_data as $detail_unit)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $detail_unit->blok_kawasan ?></td>
			<td class="table_data" data-row_id="<?php echo $detail_unit->id_detail_unit ?>" data-column_name="no_rumah" contenteditable><?php echo $detail_unit->no_rumah ?></td>
			<td><?php echo $detail_unit->luas_tanah ?> M<sup>2</sup></td>
			<td><?php echo $detail_unit->luas_bangunan ?> M<sup>2</sup></td>
			<td><?php echo $detail_unit->harga ?></td>
			<td><?php $tanggal_terjual = $this->Detail_unit_model->tgl_ind($detail_unit->tanggal_terjual); echo $tanggal_terjual ?></td>
			<td style="text-align:center; min-width: 110px;"  >
				<?php 
                echo anchor(site_url('Dokumen/direct/'.$detail_unit->id_detail_unit),'<i class="fas fa-file"></i>','class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Dokumen"');
				echo anchor(site_url('detail_unit/read/'.$detail_unit->id_detail_unit),'<i class="fas fa-eye"></i>','class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Read"'); 
				echo anchor(site_url('detail_unit/update/'.$detail_unit->id_detail_unit),'<i class="fas fa-edit"></i>','class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"'); 
				echo anchor(site_url('detail_unit/delete/'.$detail_unit->id_detail_unit),'<i class="fas fa-trash"></i>','class="btn btn-danger btn-circle alert_notif" data-toggle="tooltip" data-placement="top" title="Delete"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?></tbody>
        </table>  
          </div> 
        </div>
        
 <?php $this->load->view('Detail_unit/detail_unit_add')?> 
 <script src="<?php echo base_url()?>asset/vendor/jquery/jquery-3.7.1.min.js"></script>
 <script>
$(document).ready(function(){  
 $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>Detail_unit/live_update",
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