<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<!-- <div class="title_left">
                <h3>Data Siswa</h3>
              </div> -->


		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data Siswa </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
										class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Settings 1</a>
									</li>
									<li><a href="#">Settings 2</a>
									</li>
								</ul>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');?></strong>
					</div>
					<?php endif;?>
					<!-- aler hapus data -->
					<?php if ($this->session->flashdata('error')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('error');?></strong>
					</div>
					<?php endif; ?>

					<a href="<?= base_url();?>c_admin/tambah_siswa" class="btn btn-primary fa fa-plus"> Tambah Data Siwa</a>
					<div class="x_content">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>No induk</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tgl lhr</th>
									<th>Alamat</th>
									<th>Status</th>
									<th>Telepon</th>
									<th>Foto</th>
									<th>Details Siswa</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
                          $no=1;
                          foreach ($tb_siswa as $key => $value):?>
								<tr>
									<td><?= $no++?></td>
									<td><?= $value['no_induk']?></td>
									<td><?= $value['nama']?></td>
									<td><?= $value['jenis_kelamin']?></td>
									<td><?= $value['tgl_lahir']?></td>
									<td><?= $value['alamat']?></td>
									<td><?= $value['status']?></td>
									<td><?= $value['no_hp']?></td>

									<td>
										<button type="button" class="btn btn-warning btn-xs " onclick="show_photo('<?=$value['id_siswa']?>')">Klik foto </button>
                 					 </td>
                				    <td>
								    <a href="<?php echo base_url(); ?>c_admin/details_siswa/<?php echo $value['id_siswa']; ?>"
											class="btn btn-success btn-xs"> <i class="fa fa-search-plus"> Details</i> </a>
							        </td>
				     		
							  	    <td>
									<a href="<?php echo base_url(); ?>c_admin/edit_siswa/<?php echo $value['id_siswa']; ?>"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
										<a href="<?php echo base_url(); ?>c_admin/delete_siswa/<?= $value['id_siswa']; ?>"
											onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$value['nama'];?>');"
											class="btn btn-danger btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i
												class="fa fa-trash"></i> </a>
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<!-- modal photo -->
<div class="modal fade" id="modal-photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Foto</h5>
			</div>
			<div class="modal-body">
				<div class="form-group" id="photo-here">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
	function show_photo(id) { 
		$.ajax({
			type: "POST",
			url: "<?=base_url()?>c_admin/photo_check",
			data: {id:id},
			dataType: "JSON",
			success: function (response) {
				$("#photo-here").html(`
					<img style="width: 560px;height: 300px; border-radius:50%"
						src="<?=base_url();?>uploads/original_image/`+response.image+`">`);
				$("#modal-photo").modal("show");
			}
		});
	 }
</script>
