<?php
$conn = mysqli_connect("127.0.0.1", "root", "root", "media_collection");
if($mysqli->connect_error) 
{
  exit('Could not connect');
}
// prepare and bind
$stmt = $conn->prepare("INSERT INTO media_collection_t (title, media_type, year_released, writer, rating, platform)
 VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $title, $media_type, $year_released, $writer, $rating, $platform);

// set parameters and execute
$title = $_REQUEST['title'];
$media_type = $_REQUEST['mediaType'];
$year_released = $_REQUEST['year'];
$writer = $_REQUEST['writer'];
$rating = $_REQUEST['rating'];
$platform = $_REQUEST['platform'];
$stmt->execute();

$stmt->close();
$conn->close();

header("location:index.html"); 
 ?>