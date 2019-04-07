       <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Edit Data Supplier</h4><hr style="width: 5%">
                  
                      <form class="forms-sample" method="post" action="<?=site_url('Data/update_supplier/'.$id_supplier)?>">

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kode Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="id" value="<?= $id_supplier ?>" class="form-control">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?= $data->NAMA_SUPPLIER ?>" name="nama" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Alamat Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?= $data->ALAMAT_SUPPLIER ?>" name="alamat" class="form-control">
                          </div>
                        </div>

                                 <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">No Hp Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_hp" value="<?= $data->NO_HP_SUPPLIER ?>" class="form-control">
                          </div>
                        </div>

                                 <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kode Pos Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="kode_pos" value="<?= $data->KODE_POS_SUPPLIER ?>" class="form-control">
                          </div>
                        </div>
               
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>