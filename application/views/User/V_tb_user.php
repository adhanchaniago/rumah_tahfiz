
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
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

                  <a href="<?= base_url();?>c_user/tambah_hafalan" class="btn btn-primary fa fa-plus"> Tambah Setoran Hafalan</a>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No induk</th>
                          <th>Nama</th>            
                          <th>Status</th>
                          <th>Audio</th>
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
                       
                          
                        
         
                 <td>
										<a href="<?php echo base_url(); ?>c_admin/edit_siswa/<?= $value['id_siswa']; ?>"class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
                    <a href="<?php echo base_url(); ?>c_admin/delete_siswa/<?= $value['id_siswa']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$value['nama'];?>');" class="btn btn-danger btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i> </a> 
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
        