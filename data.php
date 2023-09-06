


<?php
$conn=mysqli_connect("localhost","root","","test") or die("connection failed");
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql) or die("query failed");
$output="";
if(mysqli_num_rows($result)>0){
        $output='<table border="1" width="100%">
        <tr>
        <th width="100">ID</th>
        <th>NAME</th>
        <th width="100">ACTION</th>
        </tr>';

while($row=mysqli_fetch_assoc($result)){
    $output.="<tr><td>{$row['id']}</td><td>{$row['name']}</td><td><button id='btn' style='background:red ;color:#fff; cursor:pointer' data-id='{$row['id']}'>DELETE</button></td></tr>";}


$output.="</table>";      
mysqli_close($conn);
echo $output;
}else{
echo"NO RECORD FOUND";
}



?>