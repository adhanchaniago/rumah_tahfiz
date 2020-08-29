
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                  <!-- <a href="<?= base_url();?>c_admin/tambah_siswa" class="btn btn-primary fa fa-plus"> Tambah Data Siwa</a> -->
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Ayah</th>
                          <th>Pekerjaan Ayah</th>
                          <th>Nama Ibu</th>
                          <th>Pekerjaan ibu</th>
                          <th>alamat</th>
                          <th>Telepon</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $no=1;
                          foreach ($tb_walimurid as $key => $value):?>
                        <tr>
                          <td><?= $no++?></td>
                          <td><?= $value['nama_ayah']?></td>
                          <td><?= $value['pekerjaan_ayah']?></td>
                          <td><?= $value['nama_ibu']?></td>
                          <td><?= $value['pekerjaan_ibu']?></td>
                          <td><?= $value['alamat']?></td>
                          <td><?= $value['no_hp']?></td>
                        
                      
                 <td>
										<a href disabled="<?php echo base_url(); ?>c_admin/edit_siswa/<?php echo $value['id_walimurid']; ?>"class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
                    <a href disabled="<?php echo base_url(); ?>c_admin/delete_siswa/<?= $value['id_walimurid']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$value['nama_ayah'];?>');" class="btn btn-danger btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i> </a> 
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
        