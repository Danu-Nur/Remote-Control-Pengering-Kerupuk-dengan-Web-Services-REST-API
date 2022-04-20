<?php 
include_once("koneksi.php");

class usr{}

$ATAS = $_POST['atas'];
$BAWAH = $_POST['bawah'];

$sql = "UPDATE data_mesin_dan_hp SET SUHU_ATAS = '$ATAS', SUHU_BAWAH = '$BAWAH'
        WHERE ID_DATA = '1'";


if ((empty($ATAS))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom suhu atas tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($BAWAH))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom suhu bawah tidak boleh kosong";
    die(json_encode($response));
}else {
        $query = mysqli_query($con, $sql);

        if ($query){
            $response = new usr();
            $response->success = 1;
            $response->message = "Update Data berhasil";
            die(json_encode($response));

        } else {
            $response = new usr();
            $response->success = 0;
            $response->message = "Update Data gagal";
            die(json_encode($response));
        }
    }

mysqli_close($con);

?>