<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Data Barang Keluar</h4>
            <hr width="15%">
            <?php echo $msg ?>
            <div class="table-responsive">
            <table id="order-listing" class="table table-striped">
                    <thead>
                        <tr>
                        <th>Id Barang Keluar</th>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Keluar</th>
                        <th>Stok Barang Keluar</th>
                        <th>Nama Supplier</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                    <?php
                        foreach($barang_keluar as $row){
                        
                        ?>
                        <tr>
                        <td><?= $row->ID_BARANG_KELUAR ?></td>
                        <td><?= $row->ID_BARANG ?></td>
                        <td><?= $row->NAMA_BARANG ?></td>
                        <td><?= $row->TANGGAL_BARANG_KELUAR ?></td>
                        <td><?= $row->STOK_BARANG_KELUAR ?></td>
                        <td><?= $row->NAMA_SUPPLIER ?></td>
                        <td>
                                <a href="<?php echo site_url('Data/delete_barang_keluar/'.$row->ID_BARANG_KELUAR);?>" onclick="return confirm('Apakah anda yakin menghapus data?')" >
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