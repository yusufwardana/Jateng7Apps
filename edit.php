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
//$now = date("Y-m-d");
//$data = "1994-03-07";
echo '<div class="card">';


if(isset($_GET['id'])){
$id = $_GET['id'];
if ($stmt = mysqli_query($con, "SELECT * FROM optima where id='$id'")) {
while ($row=mysqli_fetch_array($stmt,MYSQLI_ASSOC)){

echo '<form method="post" action="edit.php?save">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="'.$row['ID'].'">
						<input type="text" name="name" value="'.$row['NAME'].'">
					</td>
				</tr>
				<tr>
					<td>MMS</td>
					<td><input type="text" name="mms" value="'.$row['MMS'].'"></td>
				</tr>
				<tr>
					<td>AREA</td>
					<td><input type="text" name="area" value="'.$row['AREA'].'"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>';
   

 //echo erDebug($row);

 }

}
}
if(isset($_GET['save'])){
$id = $_POST['id'];
$nama = $_POST['name'];
$mms = $_POST['mms'];
$area = $_POST['area'];
mysqli_query($con, "update optima set MMS='$mms', AREA='$area' where id='$id'");
header("location:edit.php?id=".$id."");
}
echo '</tbody>
                            </table>
                        </div>
                    </div>
                  </div>';
mysqli_close($con);
include 'footer2.php';
?>