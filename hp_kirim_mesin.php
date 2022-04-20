<?php 
include_once("koneksi.php");

class usr{}

$MESIN = $_POST['mesinn'];

$sql = "UPDATE data_mesin_dan_hp SET MESIN = '$MESIN' 
        WHERE ID_DATA = '1'";


if ((empty($MESIN))) {
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