<?php 
include_once("koneksi.php");

class usr{}

$KOMPOR = $_POST['kompor'];

$sql = "UPDATE data_mesin_dan_hp SET KOMPOR = '$KOMPOR' 
        WHERE ID_DATA = '1'";


if ((empty($KOMPOR))) {
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