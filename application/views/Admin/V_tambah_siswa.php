     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tambah</h3>
              </div>
            </div>
            <div class="clearfix"></div>
     

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Siswa </h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="<?=base_url();?>c_admin/save_siswa" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No induk</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_induk" class="form-control" placeholder="" required>
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="jenis_kelamin" class="form-control" required>
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
                            <input type='text' name="tgl_lahir" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>   
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <textarea name="alamat" id="alamat" class="form-control" cols=40" rows="2"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="status" class="form-control" required>
                            <option value="0">--Pilih Status Anak--</option>
                            <option>Anak kandung</option>
                            <option>Anak tiri</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">telepon</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_hp" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Image</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="file" name="image"  class="form-control" placeholder="" required>
                        </div>
                      </div>


  <!-- form data walimurid -->
                  <div class="x_title">
                    <h2>Data Walimurid </h2>
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

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama ayah</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama_ayah" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Ayah</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="pekerjaan_ayah" class="form-control" required>
                            <option value="0">--Pilih Pekerjaan Ayah--</option>
                            <option>Pns</option>
                            <option>Buruh</option>
                            <option>Petani</option>
                            <option>Pedagang</option>
                            <option>Wiraswasta</option>
                            <option>TNI/Polri</option>
                            <option>Tidak Bekerja</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ibu</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama_ibu" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Ibu</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="pekerjaan_ibu" class="form-control" required>
                            <option value="0">--Pilih Pekerjaan Ibu--</option>
                            <option>Pns</option>
                            <option>Buruh</option>
                            <option>Petani</option>
                            <option>Pedagang</option>
                            <option>Wiraswasta</option>
                            <option>Tidak Bekerja</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <textarea name="alamat" id="alamat" class="form-control" cols=40" rows="2"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">telepon</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="no_hp" class="form-control" placeholder="" required>
                        </div>
                      </div>

  

         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>c_admin/v_tb_siswa" class="btn btn-primary btn-sm"> <i class="fa fa-reply-all"></i> Kembali</a>
						   <!-- <button class="btn btn-primary btn-sm" type="reset">Reset</button> -->
                          <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-save"></i> Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
 						
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
