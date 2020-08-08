     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit</h3>
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
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Siswa </h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="<?=base_url();?>c_admin/update/<?=$edit['id_siswa'];?>" method="POST" enctype="multipart/form-data">
          
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No induk</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_induk" value="<?=$edit['no_induk'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama" value="<?=$edit['nama'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name ="jenis_kelamin" value="<?=$edit['jenis_kelamin'];?>" class="form-control" required>
                            <option value="0">--Pilih Jenis Kelmain--</option>
                            <option>laki-laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl lahir</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' name="tgl_lahir" value="<?=$edit['tgl_lahir'];?>" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>   
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="alamat" value="<?=$edit['alamat'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name ="status" value="<?=$edit['status'];?>" class="form-control" required>
                            <option value="0">--Pilih Status Anak--</option>
                            <option>Anak kandung</option>
                            <option>Anak tiri</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">telepon</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_hp" value="<?=$edit['no_hp'];?>" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="file" name="image" value="<?=$edit['image'];?>" class="form-control" placeholder="" >
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>c_admin/v_tb_siswa" class="btn btn-primary btn-sm">Kembali</a>
                          <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
        <!-- /page content -->