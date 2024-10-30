<?php
//INI ADALAH COMMIT PERTAMA YUSTIKA

$barang = [
    ['id' => 1, 'nama' => 'Buku', 'kategori' => 'Alat Tulis', 'harga' => 20000],
    ['id' => 2, 'nama' => 'Pulpen', 'kategori' => 'Alat Tulis', 'harga' => 5000]
];
//create memasukkan file
if(isset($_POST['kirim'])){
    $id = count($barang)+1;
    $nama = $_POST['nama'];
    $kategori =$_POST['kategori'];
    $harga =$_POST['harga'];
    $barang[ ] = ["id" =>$id, "nama" => $nama, "kategori" => $kategori, "harga" => $harga];
}
//delete
if(isset($_POST['delete'])){
    $index = $_POST['delete'];
    unset($barang[$index]);
    $barang = array_values($barang);
}
// s_post ituh untuk mengirim atau mensubmit data
?>
<DOCTYPE! HTML>
    <head><h1>Tambah Barang</h1></head>
    <body>
    <form action="" method="POST">
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <label for="kategori">Kategori Barang:</label><br>
        <input type="text" id="kategori" name="kategori" required><br>

        <label for="harga">Harga Barang:</label><br>
        <input type="text" id="harga" name="harga" required><br>
        <input type="submit" name="kirim" value="Tambah Barang">
</form>
<section>
    <h2>Daftar Barang </h2>
    <table border= 1 cellspacing=0 cellpadding=5>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>kategori</th>
            <th>harga</th>
            <th>aksi</th>
       </tr>
       <?php
          foreach($barang as $nama_barang):
        ?>
        <tr>
            <td><?php echo $nama_barang["id"]?></td>
            <td><?php echo $nama_barang["nama"]?></td>
            <td><?php echo $nama_barang["kategori"]?></td>
            <td><?php echo $nama_barang["harga"]?></td>
            <td><a href="jurnal4[2].php">Edit</a> | <a href="jurnal4[2].php">Hapus</a></td>
          </tr>
          <?php endforeach ?>
    </table>
</section>
    </body>
</html>