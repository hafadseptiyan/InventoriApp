       <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Input Data Barang</h4><hr style="width: 5%">
                  
                      <form class="forms-sample" method="post" action="<?=site_url('Data/insert_barang')?>">

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Barang">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kategori Barang</label>
                          <div class="col-sm-9">
                              <select name="kategori" class="form-control" required="required">
                                  <option value="">- Pilih Kategori -</option>
                                  <option value="handphone">Handphone</option>
                                  <option value="computer">Computer</option>
                                  <option value="storage">Storage</option>
                                  <option value="aksesoris">Accessories</option>
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
                            <input type="text" name="stok" class="form-control" placeholder="Stok Barang">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Harga Barang</label>
                          <div class="col-sm-9">
                            <input type="text" name="harga" class="form-control" placeholder="Harga Barang">
                          </div>
                        </div>
                    
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>