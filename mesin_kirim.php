<?php 
include_once("koneksi.php");

class usr{}

$MESIN = $_GET['mesinn'];
$STATUS = $_GET['status'];
$SUHU = $_GET['suhu'];
$ATAS = $_GET['atas'];
$BAWAH = $_GET['bawah'];
$BATT = $_GET['batt'];
$KOMPOR = $_GET['kompor'];
$BLOWER = $_GET['blower'];
$LISTRIK = $_GET['listrik'];

$sql = "UPDATE data_mesin_dan_hp SET MESIN = '$MESIN', STATUS = '$STATUS', SUHU = '$SUHU', SUHU_ATAS = '$ATAS', SUHU_BAWAH = '$BAWAH', BATTERY = '$BATT', KOMPOR = '$KOMPOR', BLOWER = '$BLOWER', LISTRIK = '$LISTRIK'
        WHERE ID_DATA = '2'";


if ((empty($MESIN))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom MESIN tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($STATUS))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom USERNAME tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($SUHU))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom SUHU tidak boleh kosong";
    die(json_encode($response));
} else if ((empty($ATAS))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom SUHU ATAS tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($BAWAH))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom SUHU BAWAH tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($BATT))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom BATTERY tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($KOMPOR))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom KOMPOR tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($BLOWER))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom BLOWER tidak boleh kosong";
    die(json_encode($response));
}else if ((empty($LISTRIK))) {
    $response = new usr();
    $response->success = 0;
    $response->message = "Kolom LISTRIK tidak boleh kosong";
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