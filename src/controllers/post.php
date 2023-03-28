<?php
header("Content-type: application/json");
if (isset($_POST['sqlTours']) && isset($_POST['sqlImage'])) {
    $sqlTour = $_POST['sqlTours'];
    $sqlImage = $_POST['sqlImage'];
    include '../config/connectDB.php';
    try {
        $result = mysqli_query($conn, $sqlTour);
        $resultImage = mysqli_query($conn, $sqlImage);
        echo $status = 200;
    } catch (\Throwable $th) {
        echo $status = 500;
    }
} else {
    $response = array("success" => false, "message" => "No data");
    echo json_encode($response);
}
