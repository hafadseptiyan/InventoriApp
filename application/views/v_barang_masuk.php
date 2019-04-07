<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Data Barang Masuk</h4>
            <hr width="15%">
            <?php echo $msg ?>
            <div class="table-responsive">
                <table id="order-listing" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Id Barang Masuk</th>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Stok Barang Masuk</th>
                        <th>Nama Supplier</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                    <?php
                        foreach($barang_masuk as $row){
                        
                        ?>
                        <tr>
                        <td><?= $row->ID_BARANG_MASUK ?></td>
                        <td><?= $row->ID_BARANG ?></td>
                        <td><?= $row->NAMA_BARANG ?></td>
                        <td><?= $row->TANGGAL_BARANG_MASUK ?></td>
                        <td><?= $row->STOK_BARANG_MASUK ?></td>
                        <td><?= $row->NAMA_SUPPLIER ?></td>
                        <td>
                                <a href="<?php echo site_url('Data/delete_barang_masuk/'.$row->ID_BARANG_MASUK);?>" onclick="return confirm('Apakah anda yakin menghapus data?')" >
                                    <button type="submit" class="btn btn-danger">
                                    <span class="btn-label"> Delete <i class="fa fa-trash"></i></span><span class="btn-label"></i></span><br>
                                </button></a>                         
                        </td>  
                        </tr>  
                        <?php
                        }
                        ?>                
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>