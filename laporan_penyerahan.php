
<!DOCTYPE HTML>
<html>
    <head>
        <title>Laporan Penyerahan</title>
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
        /* Table */
        body {
            font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
        }
        .demo-table {
            border-collapse: collapse;
            font-size: 13px;
        }
        .demo-table th, 
        .demo-table td {
            padding: 7px 17px;
        }
        .demo-table .title {
            caption-side: bottom;
            margin-top: 12px;
        }
        .demo-table thead th:last-child,
        .demo-table tfoot th:last-child,
        .demo-table tbody td:last-child {
            border: 0;
        }

        /* Table Header */
        .demo-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .demo-table tbody td {
            color: #353535;
            border-right: 1px solid #c7ecc7;
        }
        .demo-table tbody tr:nth-child(odd) td {
            background-color: #f4fff7;
        }
        .demo-table tbody tr:nth-child(even) td {
            background-color: #dbffe5;
        }
        .demo-table tbody td:nth-child(4),
        .demo-table tbody td:first-child,
        .demo-table tbody td:last-child {
            text-align: right;
        }
        .demo-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
            transition: all .2s;
        }

        /* Table Footer */
        .demo-table tfoot th {
            border-right: 1px solid #c7ecc7;
        }
        .demo-table tfoot th:first-child {
            text-align: right;
        }
    </style>
    </head>

    <body>
        <div class="laporan1">
          <h1>Laporan Penyerahan</h1>
            <table class="demo-table" >
        <caption class="title"></caption>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Barang</th>
                <th>Type Barang</th>
                <th>Serial Number</th>
                <th>No Asset</th>
                <th>Bagian</th>
                <th>Jumlah</th>
                <th>Tanggal Penyerahan</th>
                <th>PIC IT</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'config.php';
            $halaman = 10;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

            $sql1 = "SELECT * FROM penyerahan group by id desc";
            $result = mysqli_query($link, $sql1);
            $total = mysqli_num_rows($result);

            $pages = ceil($total/$halaman);       

            $sql2 = "select * from penyerahan group by id asc LIMIT $mulai, $halaman";
            $query = mysqli_query($link, $sql2);
            $no =$mulai+1;


            while ($mas = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mas['nama']; ?></td>
                <td><?php echo $mas['nama_barang'] ?></td>
                <td><?php echo $mas['type_barang'] ?></td>
                <td><?php echo $mas['sn'] ?></td>
                <td><?php echo $mas['asset'] ?></td>
                <td><?php echo $mas['bagian'] ?></td>
                <td><?php echo $mas['jumlah'] ?></td>
                <td><?php $tgl_penyerahan = $mas ['tgl_penyerahan'];echo date ("d/M/Y", strtotime($tgl_penyerahan)) ?></td>
                <td><?php echo $mas['picit'] ?></td>
                <td><?php echo $mas['ket'] ?></td>
            </tr>
            <?php               
              } 
            ?>
        </tbody>
    </table>
    <a href="index.php" class="back" style="padding: 5px;">Home</a>
        </div>
    </body>
</html>
