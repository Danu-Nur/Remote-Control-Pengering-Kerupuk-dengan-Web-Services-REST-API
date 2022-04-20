<?php 
include_once("koneksi.php");

class usr{}

    $sql = "SELECT * FROM data_mesin_dan_hp WHERE ID_DATA = '2'";

    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);

    if (!empty($row)){
        $response = new usr();
        $response->success = 1;
        $response->iddata = $row['ID_DATA'];
        $response->mesin = $row['MESIN'];
        $response->status = $row['STATUS'];
        $response->suhu = $row['SUHU'];
        $response->atas = $row['SUHU_ATAS'];
        $response->bawah = $row['SUHU_BAWAH'];
        $response->batt = $row['BATTERY'];
        $response->kompor = $row['KOMPOR'];
        $response->blower = $row['BLOWER'];
        $response->listrik = $row['LISTRIK'];
        die(json_encode($response));

    } else {
        $response = new usr();
        $response->success = 0;
        $response->message = "Gagal Mengambil Data";
        die(json_encode($response));
}



mysqli_close($con);
?>