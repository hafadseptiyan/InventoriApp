<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Data Supplier</h4>
            <hr width="15%">
            <?php echo $msg ?>
            <div class="table-responsive">
                <table class="table table-striped" id="order-listing">
                    <thead>
                        <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>No hp</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
           
                    <tbody>
                    <?php
                        foreach($supplier as $row){
                        
                        ?>
                        <tr>
                        <td><?= $row->ID_SUPPLIER ?></td>
                        <td><?= $row->NAMA_SUPPLIER ?></td>
                        <td><?= $row->ALAMAT_SUPPLIER ?></td>
                        <td><?= $row->NO_HP_SUPPLIER ?></td>
                        <td><?= $row->KODE_POS_SUPPLIER ?></td>
                        <td>
                                <a href="<?php echo site_url('Data/delete_supplier/'.$row->ID_SUPPLIER);?>" onclick="return confirm('Apakah anda yakin menghapus data?')" >
                                    <button type="submit" class="btn btn-danger">
                                    <span class="btn-label"> Delete <i class="fa fa-trash"></i></span><span class="btn-label"></i></span><br>
                                </button></a> 
                                <a href="<?php echo site_url('Data/edit_supplier/'.$row->ID_SUPPLIER);?>">
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
</div>