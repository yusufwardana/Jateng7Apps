<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$ur['title'] = "Happy Birthday";
$pagecontent_start = "";
include 'header2.php';
//$data = "1994-03-07";
$tglNow = date("d");
$blnNow = date("m");
//$now = date("Y-m-d");
//$data = "1994-03-07";
if ($stmt = mysqli_query($con, "SELECT * FROM accounts WHERE DAY(birthday) = '$tglNow' AND MONTH(birthday) = '$blnNow'")) {
while ($row=mysqli_fetch_array($stmt,MYSQLI_ASSOC)){

   
?>
<div class="card border-0 mb-4 bg-info text-white overflow-hidden">
  
   <div class="card-header">
       <div class="row">
           <div class="col-auto">
               <div class="avatar avatar-40 border-0 bg-white-light rounded-circle text-white">
                   <i class="material-icons vm text-template">cake</i>
               </div>
           </div>
           <div class="ml-auto col-auto">
               <h5 class="mb-1">Happy Birthday</h5>
           </div>
       </div>
   </div>
<div class="backdrop"></div> 
   <div class="card-body overflow-hidden"><div class="background"><img src="img/birth.png" alt=""></div>
   	
   <h4 class="mb-0 mt-3"><?php echo $row['nama']; ?></h4>
      
   </div>
   <div class="card-footer">

       <div class="row">
           <div class="col">
               <p class="mb-0"><?php echo $tglNow.'/'.$blnNow; ?></p>
               <p class="small ">This Day</p>
           </div>
           <div class="col-auto align-self-center text-right">
               <p class="mb-0"><?php echo $row['mms']; ?></p>
               <p class="small"><?php echo $row['area']; ?></p>
           </div>

       </div>
   </div>
 
</div>
<?php
 //echo erDebug($row);
 }

}

mysqli_close($con);
include 'footer2.php';
?>