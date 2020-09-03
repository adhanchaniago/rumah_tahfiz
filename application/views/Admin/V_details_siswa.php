     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Details</h3>
            </div>
            
            </div>
            <div class="clearfix"></div>
            
            
            <div class="row">
              <div class="col-md-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Details Siswa </h2>
                          <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <a href="<?=base_url();?>c_admin/v_tb_siswa" class="btn btn-primary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                    <br />
                    <form class="form-horizontal form-label-left input_mask" action="" method="POST" enctype="multipart/form-data">
          <!-- <div class="col-md"> -->

          <?php foreach ($details_siswa as $key => $value) :?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No induk</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_induk" value="<?=$value['no_induk']?>" class="form-control" placeholder="" required>
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama" value="<?=$value['nama']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="jenis_kelamin" value="<?=$value['jenis_kelamin']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="tgl_lahir" value="<?=$value['tgl_lahir']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="alamat" value="<?=$value['alamat']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="status" value="<?=$value['status']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_hp" value="<?=$value['no_hp']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                   
                  <div class="x_title">
                    <h2> Orang Tua Siswa </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- <form class="form-horizontal form-label-left input_mask" action="<?=base_url();?>c_admin/save_walimurid" method="POST" enctype="multipart/form-data">  -->
          
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ayah</label>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                              <input type="text" name="nama" value="<?=$value['nama_ayah']?>" class="form-control" placeholder="" required>
                            </div>
                          </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan ayah</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="pekerjaan_ayah" value="<?=$value['pekerjaan_ayah']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama ibu</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama_ibu" value="<?=$value['nama_ibu']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan ibu</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="pekerjaan_ibu" value="<?=$value['pekerjaan_ibu']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="alamat" value="<?=$value['alamat']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">telepon</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_hp" value="<?=$value['no_hp']?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

  
          <?php endforeach; ?>
         
                      <div class="ln_solid"></div>
              
                    </form>
                  </div>
                </div>
              </div>
         
                      <div class="ln_solid"></div>
                 
                    </form>
                  </div>
                </div>
              </div>


                                           <!-- data orang tua -->

              
            </div>
        
          </div>
        </div>
        <!-- /page content -->