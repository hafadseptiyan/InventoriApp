       <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Input Data Supplier</h4><hr style="width: 5%">
                  
                      <form class="forms-sample" method="post" action="<?=site_url('Data/insert_supplier')?>">

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ID Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="id" class="form-control" placeholder="Nama Supplier">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Supplier">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Alamat Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Supplier">
                          </div>
                        </div>

                                 <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">No Hp Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_hp" class="form-control" placeholder="No Hp Supplier">
                          </div>
                        </div>

                                 <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kode Pos Supplier</label>
                          <div class="col-sm-9">
                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode Supplier">
                          </div>
                        </div>
               
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>