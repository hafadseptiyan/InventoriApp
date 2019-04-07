<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Data Barang</h4>
            <hr width="15%">
            <?php echo $msg ?>
            <div class="table-responsive">
                <table class="table table-striped" id="order-listing">
                    <thead>
                        <tr>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Nama Supplier</th>
                        <th>Harga Barang</th>
                        <th>Stok Barang</th>
                         <th>Kode Supplier</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
             
                    <tbody>
                    <?php
                        foreach($barang as $row){
                        
                        ?>
                        <tr>
                        <td><?= $row->NAMA_BARANG ?></td>
                        <td><?= $row->KATEGORI ?></td>
                        <td><?= $row->NAMA_SUPPLIER ?></td>
                        <td><?= $row->HARGA_BARANG ?></td>
                        <td><?= $row->STOK_BARANG ?></td>
                        <td><?= $row->ID_SUPPLIER ?></td>
                        <td>
                                <a href="<?php echo site_url('Data/delete_barang/'.$row->ID_BARANG);?>" onclick="return confirm('Apakah anda yakin menghapus data?')" >
                                    <button type="submit" class="btn btn-danger">
                                    <span class="btn-label"> Delete <i class="fa fa-trash"></i></span><span class="btn-label"></i></span><br>
                                </button></a> 
                                <a href="<?php echo site_url('Data/edit_barang/'.$row->ID_BARANG);?>">
                                    <button type="submit" class="btn btn-primary">
                                    <span class="btn-label"> Edit <i class="fa fa-pencil"></i></span><span class="btn-label"></i></span>
                            
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