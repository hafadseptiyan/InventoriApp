       <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Input Data Barang Keluar</h4><hr style="width: 5%">
                  
                      <form class="forms-sample" method="post" action="<?=site_url('Data/insert_barang_keluar')?>">

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Stok Barang Keluar</label>
                          <div class="col-sm-7">
                            <input type="text" name="stok_keluar" class="form-control" placeholder="Stok Barang Keluar">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Barang Keluar</label>
                          <div class="col-sm-7">
                            <input type="date" name="tgl_keluar" class="form-control" placeholder="Tanggal Barang Keluar" required="required">
                          </div>
                        </div>

                         <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Id Barang</label>
                          <div class="col-sm-7">
                            <div class="input-group">
                              <input style="background-color: #74b9ff" type="text" name="id_barang" id="xid" class="form-control" placeholder="Id Barang">
                              <div class="input-group-btn">
                              <button style="height:43px" data-toggle="modal" data-target="#modal_barang" type="button" class="btn btn-primary"><i class="fa fa-folder-open-o"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Barang</label>
                          <div class="col-sm-7">
                            <input type="text" id="xnama" readonly class="form-control" placeholder="Nama Barang">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Stok Barang</label>
                          <div class="col-sm-7">
                            <input type="text" readonly id="xstok" name="" class="form-control" placeholder="Stok Barang">
                          </div>
                        </div>

                      <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Kode Supplier</label>
                          <div class="col-sm-7">
                            <div class="input-group">
                              <input style="background-color: #ffeaa7;opacity: 1" type="text" name="id_supplier" id="xid_sup" class="form-control" placeholder="Kode Supplier">
                              <div class="input-group-btn">
                              <button style="height:43px" data-toggle="modal" data-target="#modal_supplier" type="button" class="btn btn-primary"><i class="fa fa-folder-open-o"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Supplier</label>
                          <div class="col-sm-7">
                            <input type="text" id="xnama_sup" class="form-control" placeholder="Nama Supplier" readonly>
                          </div>
                        </div>

                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>


  <!--modal Barang-->
<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color: #fff">
          <div class="modal-header">
             <h4><b>Data Barang</b></h4><hr>
          </div>
          <div class="modal-body">
            <div class="mailbox-messages table-responsive">
                 <div class="table-responsive">
                <table class="table table-striped" id="order-listing">
                    <thead>
                      <tr>
                        <th><b>Id Barang</b></th>
                        <th><b>Nama Barang</b></th>
                        <th><b>Kategori Barang</b></th>
                        <th><b>Supplier</b></th>
                        <th><b>Harga Barang</b></th>
                        <th><b>Stok Barang</b></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                        foreach($barang as $row){
                        
                        ?>                  
                    <tr onclick="pilih('<?php echo $row->ID_BARANG ?>','<?php echo $row->NAMA_BARANG ?>','<?php echo $row->STOK_BARANG ?>')" data-dismiss="modal">
                        <td><?= $row->ID_BARANG ?></td>
                        <td><?= $row->NAMA_BARANG ?></td>
                        <td><?= $row->KATEGORI ?></td>
                        <td><?= $row->ID_SUPPLIER ?></td>
                        <td><?= $row->HARGA_BARANG ?></td>
                        <td><?= $row->STOK_BARANG ?></td>                   
                    </tr>
                    <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
          </div>
            <div class="modal-footer">
              <button class="btn btn-default btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close fa-fw"></i> Close</button>
            </div>
        </div>
    </div>
  </div>
</div>

<!--modal Supplier-->
<div class="modal fade" id="modal_supplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color: #fff">
          <div class="modal-header">
             <h4><b>Data Barang</b></h4><hr>
          </div>
          <div class="modal-body">
            <div class="mailbox-messages table-responsive">
                   <div class="table-responsive">
                <table class="table table-striped" id="order-list">
                    <thead>
                      <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>No hp</th>
                        <th>Kode Pos</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($supplier as $row){
                        
                        ?>
                    <tr onclick="pilih_sup('<?php echo $row->ID_SUPPLIER ?>','<?php echo $row->NAMA_SUPPLIER ?>')" data-dismiss="modal">
                        <td><?= $row->ID_SUPPLIER ?></td>
                        <td><?= $row->NAMA_SUPPLIER ?></td>
                        <td><?= $row->ALAMAT_SUPPLIER ?></td>
                        <td><?= $row->NO_HP_SUPPLIER ?></td>
                        <td><?= $row->KODE_POS_SUPPLIER ?></td>                              
                    </tr>
                    <?php
                        }
                        ?>
                        </tbody>
                </table>
            </div>
          </div>
            <div class="modal-footer">
              <button class="btn btn-default btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close fa-fw"></i> Close</button>
            </div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function pilih(id,nm,stok){
    $("#xid").val(id);
    $("#xnama").val(nm);
    $('#xstok').val(stok);
  }
  
  function pilih_sup(id_supplier,nm_supplier){
    $("#xid_sup").val(id_supplier);
    $("#xnama_sup").val(nm_supplier);

  }

</script>