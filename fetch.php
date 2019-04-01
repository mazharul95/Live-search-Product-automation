<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "live_search");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tbl_customer WHERE productName LIKE '%".$search."%' OR pDetails LIKE '%".$search."%' 
          OR price LIKE '%".$search."%' 
  OR review LIKE '%".$search."%' 
      
 ";
}
else{
 $query = "
  SELECT * FROM tbl_customer ORDER BY productID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
    
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
<div style="border:1px solid black;height:215px;width:202px;float:left;margin:35px 85px 35px 85px; border-radius:10px  " >
    <a href="show.php?id='.$row["productID"].'">
      <div>
        <img src="flower.jpg" width="200" hight="50" style="border-radius:10px 10px 0 0"><br><br>
        <div style="text-align: center">
            <tr style="text-align: center"><td><b>'. $row["productName"].'</b></td></tr><br>
            <tr>Price : <td>'. $row["price"].'<td></tr><br>
            <tr>Review : <td>'. $row["review"].'<td></tr><br>
        
      </div> 
      </div>
    </a><br>
    </div>


  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}