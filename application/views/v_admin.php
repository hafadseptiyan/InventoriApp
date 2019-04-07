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
                        <th>ID Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                   
                        </tr>
                    </thead>
             
                    <tbody>
                    <?php
                        foreach($admin as $row){
                        
                        ?>
                        <tr>
                        <td><?= $row->ID_ADMIN ?></td>
                        <td><?= $row->USERNAME ?></td>
                        <td><?= md5($row->PASSWORD); ?></td>
                 
                        </tr>     
                        <?php
                        }
                        ?>         
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>