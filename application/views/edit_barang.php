       <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Edit Data Barang</h4><hr style="width: 5%">
                  
                      <form class="forms-sample" method="post" action="<?=site_url('Data/update_barang/'.$id_barang)?>">

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Id Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="id" class="form-control" value="<?php echo $data->ID_BARANG ?>">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" value="<?php echo $data->NAMA_BARANG ?>">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kategori Barang</label>
                          <div class="col-sm-9">
                              <select name="kategori" class="form-control" required="required">
                                  <option value="">- Pilih Kategori -</option>
                                  <option value="handphone" <?php if($data->KATEGORI == "handphone"){ echo "selected";}?>>Handphone</option>
                                  <option value="computer" <?php if($data->KATEGORI == "computer"){ echo "selected";}?>>Computer</option>
                                  <option value="storage" <?php if($data->KATEGORI == "storage"){ echo "selected";}?>>Storage</option>
                                  <option value="aksesoris" <?php if($data->KATEGORI == "aksesoris"){ echo "selected";}?>>Accessories</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier</label>
                          <div class="col-sm-9">
                              <select name="supplier" class="form-control" required="required">
                                  <option value="">- Pilih Supplier -</option>
                                  <?php foreach($supplier as $row){ ?>
                                  <option value="<?= $row->ID_SUPPLIER;?>"><?php echo $row->ID_SUPPLIER;?> - <?php echo $row->NAMA_SUPPLIER;?>
                                  </option>
                                  <?php }?>
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Stok Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="stok" class="form-control" value="<?php echo $data->STOK_BARANG ?>">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Harga Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="harga" class="form-control" value="<?php echo $data->HARGA_BARANG ?>">
                          </div>
                        </div>
               
                        <button type="submit" class="btn btn-success mr-2">Update</button>
                      </form>
                    </div>
                  </div>
                </div>