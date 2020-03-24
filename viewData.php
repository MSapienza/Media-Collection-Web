<?php
$conn = mysqli_connect("127.0.0.1", "root", "root", "media_collection");
if($mysqli->connect_error) 
{
  exit('Could not connect');
}

$q = strval($_GET['q']);

if ($q == 'All')
{
    $sql = "SELECT * FROM MEDIA_COLLECTION_T";
    $result = mysqli_query($conn, $sql);
}
else
{  
    $sql = "SELECT * FROM MEDIA_COLLECTION_T WHERE MEDIA_TYPE = '".$q."'";
    $result = mysqli_query($conn, $sql);
}



echo "<table>"; 
echo "<tr>"; 
echo "<th>Title</th>"; 
echo "<th>Media Type</th>"; 
echo "<th>Year Released</th>"; 
echo "<th>Writer</th>"; 
echo "<th>Rating</th>"; 
echo "<th>Platform</th>"; 
echo "</tr>"; 

     while ($row = mysqli_fetch_array($result))
     {
        echo "<tr>"; 
        echo "<td>".$row[0]."</td>"; 
        echo "<td>".$row[1]."</td>"; 
        echo "<td>".$row[2]."</td>"; 
        echo "<td>".$row[3]."</td>"; 
        echo "<td>".$row[4]."</td>"; 
        echo "<td>".$row[5]."</td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
    mysqli_free_result($result);

 mysqli_close($conn);
 ?>