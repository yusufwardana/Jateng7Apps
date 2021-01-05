<?php
$fetch = $connect->prepare('SELECT NIK,NAME,BIRTHDAY,JABATAN,MMS,AREA FROM optima WHERE ID = ?');
$fetch->bind_param('i', $_SESSION['id']);
$fetch->execute();
$fetch->bind_result($NIK,$NAME, $BIRTHDAY, $JABATAN, $MMS, $AREA);
$fetch->fetch();
$fetch->close();

?>
        <!-- page content start -->
        <div class="container-fluid px-0">
            <div class="card overflow-hidden">
                            <div class="card bg-pf text-primary">
                                <div class="background opacity-30">
                                    <img src="img/image11.png" alt="">
                                </div>
                                <div class="card-body text-white">
                                     
                                    <p class="text-mute"><h5><?php echo greeting();?></h5></p><br><br>
                                    <div class="text-right">
                                        <div class="btn btn-sm btn-default rounded">JATENG7</div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <div class="container-fluid top-70 text-center mb-4">
            <div class="avatar avatar-140 rounded-circle mx-auto shadow">
                <div class="background">
                    <img src="img/user1.png" alt="">
                </div>
            </div>
        </div>
<?php
        echo'<div class="container mb-4 text-center text-white">
            <h5 class="mb-1">'.$NAME.'</h5>
            <p>'.$MMS.'</p>
            <p class="mb-1">'.$AREA.'</p>
        </div>';


?>
        <div class="main-container">

<?php
	if(isset($_GET['id'])){
		$page = $_GET['id'];
		resumeProfile($page);
		}else{
		resumeProfile($NIK);
    }
    
echo $JABATAN;

?>
            <!--<div class="container">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">App Services</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                            <a href="language.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                                            <span class="material-icons">language</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">Language</h6>
                                        <p class="text-secondary">Choose preffered language</p>
                                    </div>
                                </div>
                            </a>
                            <a href="security_settings.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                                            <span class="material-icons">lock_open</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">Security Settings</h6>
                                        <p class="text-secondary">App lock, Password</p>
                                    </div>
                                </div>
                            </a>
                            <a href="notification_settings.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                                            <span class="material-icons">notifications</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">Notification Settings</h6>
                                        <p class="text-secondary">Customize notification receiving</p>
                                    </div>
                                </div>
                            </a>
                            <a href="my_cards.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                                            <span class="material-icons">credit_card</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">My Cards</h6>
                                        <p class="text-secondary">Add, update, delete Credit Cards</p>
                                    </div>
                                </div>
                            </a>
                            <a href="my_address.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-default-light text-default rounded">
                                            <span class="material-icons">location_city</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">My Address</h6>
                                        <p class="text-secondary">Add, update, delete address</p>
                                    </div>
                                </div>
                            </a>
                            <a href="login.html" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-danger-light text-danger rounded">
                                            <span class="material-icons">power_settings_new</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">Logout</h6>
                                        <p class="text-secondary">Logout from the application</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    

