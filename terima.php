<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Penerimaan</title>
   </head>
<body>
  <div class="container">
    <div class="title">Form Penerimaan</div>
    <div class="content">
      <form method="POST" action="telegram_post_terima.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama</span>
            <input type="text" placeholder="Nama" name="nama" required>
          </div>
          <div class="input-box">
            <span class="details">Nama Barang</span>
            <input type="text" placeholder="Nama Barang" name="nama_barang" required>
          </div>
          <div class="input-box">
            <span class="details">Type Barang</span>
            <input type="text" placeholder="Type Barang" name="type_barang" required>
          </div>
          <div class="input-box">
            <span class="details">Serial Number</span>
            <input type="text" placeholder="Serial Number" name="sn">
          </div>
          <div class="input-box">
            <span class="details">Bagian</span>
            <input type="text" placeholder="Bagian" name="bagian" required>
          </div>
          <div class="input-box">
            <span class="details">Jumlah</span>
            <input type="text" placeholder="Jumlah" name="jumlah" required>
          </div>
          <div class="input-box">
            <span class="details">Tanggal</span>
            <input type="date" name="tgl_penerimaan" required>
          </div>
          <div class="input-box">
            <span class="details">PIC IT</span>
            <input type="text" placeholder="PIC IT" name="picit" required>
          </div>
          <div class="input-box">
            <span class="details">Keterangan</span>
            <textarea name="ket"></textarea>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Simpan" style="margin-bottom: 5px;">
          <a href="index.php"><img src="gambar/back.png" width="50px" height="50px"></a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
