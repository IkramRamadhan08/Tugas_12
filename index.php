<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Sistem Penjualan</h1></center>
      <h3>anggota </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Anggota</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Tanggal_Lahir</th>
               <th>Nomor_Telepon</th>
               <th>Status_Keanggotaan</th>
               <th>Tanggal_Bergabung</th>
            </tr>
         </thead>
         <?php
            include 'eight.php';		
            $sql = 'SELECT  * FROM anggota';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Anggota'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Alamat'] ?></td>
               <td><?php echo $row['Tanggal_Lahir'] ?></td>
               <td><?php echo $row['Nomor_Telepon'] ?></td>
               <td><?php echo $row['Status_Keanggotaan'] ?></td>
               <td><?php echo $row['Tanggal_Bergabung'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>keanggotaan</h3>
      <table>
         <thead>
            <tr>
               <th>ID_Keanggotaan</th>
               <th>ID_Anggota</th>
               <th>Status_Keanggotaan</th>
               <th>Tanggal_Bergabung</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Keanggotaan'] ?></td>
               <td><?php echo $row['ID_Anggota'] ?></td>
               <td><?php echo $row['Status_Keanggotaan'] ?></td>
               <td><?php echo $row['Tanggal_Bergabung'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>jenis_pinjaman</h3>
      <table>
         <thead>
            <tr>
               <th>ID_Jenis_Pinjaman</th>
               <th>Nama_Jenis_Pinjaman</th>
               <th>Bunga</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM jenis_pinjaman';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Jenis_Pinjaman'] ?></td>
               <td><?php echo $row['Nama_Jenis_Pinjaman'] ?></td>
               <td><?php echo $row['Bunga'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>pegawai</h3>
      <table>
         <thead>
            <tr>
               <th>ID_Pegawai</th>
               <th>Nama</th>
               <th>Jabatan</th>
               <th>Nomor_Telepon</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Pegawai'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Jabatan'] ?></td>
               <td><?php echo $row['Nomor_Telepon'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      <h3>simpanan</h3>
      <table>
         <thead>
            <tr>
               <th>ID_Simpanan</th>
               <th>ID_Anggota</th>
               <th>ID_Pegawai</th>
               <th>Tanggal_Simpanan</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM simpanan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Simpanan'] ?></td>
               <td><?php echo $row['ID_Anggota'] ?></td>
               <td><?php echo $row['ID_Pegawai'] ?></td>
               <td><?php echo $row['Tanggal_Simpanan'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>