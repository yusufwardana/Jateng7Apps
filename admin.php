<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$ur['title'] = "Admin";
$pagecontent_start = "";
include 'header2.php';
//$data = "1994-03-07";
$tglNow = date("d");
$blnNow = date("m");
echo '<div class="card">';
                                
echo '  <p>Type something in the input field to search the list for specific items:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br><ul class="list-group" id="myList">';
if ($stmt = mysqli_query($con, "SELECT * FROM optima")) {
while ($row=mysqli_fetch_array($stmt,MYSQLI_ASSOC)){

echo '                              <li class="list-group-item d-flex justify-content-between align-items-center">              
                                        '.$row['NAME'].'/'.$row['LOKASI'].'
                                        <span class="badge badge-primary badge-pill"><a href="edit.php?id='.$row['ID'].'">Edit</a></span>
                                    </li>

                                ';
   

 //echo erDebug($row);

 }

}
echo '
                    </ul>
                  </div>
                  
                  
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList td").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
';
mysqli_close($con);
include 'footer2.php';
?>