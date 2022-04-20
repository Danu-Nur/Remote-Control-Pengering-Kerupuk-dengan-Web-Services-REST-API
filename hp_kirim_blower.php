<?php 
include_once("koneksi.php");

class usr{}

$BLOWER = $_POST['blower'];

$sql = "UPDATE data_mesin_dan_hp SET BLOWER = '$BLOWER' 
        WHERE ID_DATA = '1'";


if ((empty($BLOWER))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom tidak boleh kosong";
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