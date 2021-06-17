<?php
include 'config.php';

$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$type_barang = $_POST['type_barang'];
$sn = $_POST['sn'];
$asset = $_POST['asset'];
$bagian = $_POST['bagian'];
$jumlah = $_POST['jumlah'];
$tgl_penyerahan = date("Y-m-d");
$picit = $_POST['picit'];
$ket = $_POST['ket'];

if ( isset($_POST['submit']) )
{
    $sql    = "INSERT INTO penyerahan set nama='$_POST[nama]',nama_barang='$_POST[nama_barang]',type_barang='$_POST[type_barang]',sn='$_POST[sn]',asset='$_POST[asset]',bagian='$_POST[bagian]',jumlah='$_POST[jumlah]',tgl_penyerahan='$_POST[tgl_penyerahan]',picit='$_POST[picit]',ket='$_POST[ket]'";
    $result = mysqli_query($link, $sql);
} 

define('BOT_TOKEN', '1730832450:AAGOuLlWjSzJq0DzHoIZBqGrmujnPSnPn4w');
define('CHAT_ID','-568727572');
 
function kirimTelegram($nama,$nama_barang,$type_barang,$sn,$asset,$bagian,$jumlah,$tgl_penyerahan,$picit,$ket) {
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=".urlencode("--PENYERAHAN--"."\n"."Nama ="."$nama"."\n"."Nama Barang =$nama_barang"."\n"."Type Barang ="."$type_barang"."\n"."Serial Number ="."$sn"."\n"."No Asset ="."$asset"."\n"."Bagian ="."$bagian"."\n"."Jumlah ="."$jumlah"."\n"."Tanggal Penyerahan ="."$tgl_penyerahan"."\n"."PIC IT ="."$picit"."\n"."Keterangan ="."$ket");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
kirimTelegram($_POST['nama'],$_POST['nama_barang'],$_POST['type_barang'],$_POST['sn'],$_POST['asset'],$_POST['bagian'],$_POST['jumlah'],$_POST['tgl_penyerahan'],$_POST['picit'],$_POST['ket']);

header('Location:serah.php');

?>