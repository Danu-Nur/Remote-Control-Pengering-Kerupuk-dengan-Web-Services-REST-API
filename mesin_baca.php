<?php 
include_once("koneksi.php");

class usr{}

    $sql = "SELECT * FROM data_mesin_dan_hp WHERE ID_DATA = '1'";

    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);

    if (!empty($row)){
        $response = new usr();
        $response->iddata = $row['ID_DATA'];
        $response->mesin = $row['MESIN'];
        $response->suhuatas = $row['SUHU_ATAS'];
        $response->suhubawah = $row['SUHU_BAWAH'];
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