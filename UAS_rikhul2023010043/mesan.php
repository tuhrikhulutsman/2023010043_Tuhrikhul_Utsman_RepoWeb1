<?php include "header.php" ?> 

<div class="container"> 
    <h1 class="text-center">Data pemesanan dan pembelian</h1> 

    <table class="table table-striped table-bordered table-hover"> 
        <thead class="table-dark"> 
            <tr> 
                <th scope="col">Nama</th> 
                <th scope="col">JenisPakaian</th> 
                <th scope="col">Ukuran</th> 
                <th scope="col">Warna</th>
                <th scope="col">NomerHP</th> 
                <th scope="col" colspan="3" class="text-center">Operations</th> 
            </tr> 
        </thead>        
        <tbody> 
            <?php
                $query = "SELECT * FROM data_pembelian"; 
                // SQL query to fetch all table data 
                $view_users = mysqli_query($conn, $query); 
                
                // Check if the query was successful
                if (!$view_users) {
                    die('Query Error: ' . mysqli_error($conn));
                }

                // Display all the data retrieved from the database using while loop
                while ($row = mysqli_fetch_assoc($view_users)) {
                    $id = $row['id']; // Assuming there's an 'id' field for each record
                    $nama = $row['nama'];
                    $jenispakaian = $row['jenispakaian'];
                    $ukuran = $row['ukuran'];
                    $warna = $row['warna'];
                    $nomerHP = $row['nomerHP'];
                    
                    echo "<tr>";
                    echo " <th scope='row'>{$nama}</th>";
                    echo " <td>{$jenispakaian}</td>";
                    echo " <td>{$ukuran}</td>";
                    echo " <td>{$warna}</td>";
                    echo " <td>{$nomerHP}</td>";
                    echo " <td class='text-center'> <a href='read.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
                    echo " <td class='text-center'> <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
                    echo "<td class='text-center'> <a href='delete.php?delete={$id}' class='btn btn-danger'><i class='bi bi-trash'></i> Hapus</a></td>";
                    echo " </tr>";
                }
            ?> 
        </tbody> 
    </table> 
</div>

<!-- a BACK button to go to the index page --> 
<div class="container text-center mt-5"> 
    <a href="home.php" class="btn btn-warning mt-5"> 
        masuk web
    </a> 
    <a href="index.php" class="btn btn-warning mt-5"> 
        keluar
    </a> 
</div>

<!-- Footer --> 
<?php include "footer.php" ?>
