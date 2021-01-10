<?php

$fetch = $connect->prepare('SELECT NIK,NAME,BIRTHDAY,JABATAN,MMS,AREA,CLUSTER FROM optima WHERE ID = ?');
$fetch->bind_param('i', $_SESSION['id']);
$fetch->execute();
$fetch->bind_result($NIK,$NAME, $BIRTHDAY, $JABATAN, $MMS, $AREA, $CLUSTER);
$fetch->fetch();
$fetch->close();
?>
       
        <div class="main-container h-100">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center my-3 mx-auto">
                        <div class="icon icon-120 bg-success-light text-success rounded-circle mb-3">
                            <i class="material-icons display-4">redeem</i>
                        </div>
                        <h2>Congratulation!</h2>
                        <h6 class="text-secondary mb-3">Thanks <?php echo $NAME;?> </h6>
                        <p class="text-secondary">Thank you for submit, Your response has been recorded .</p>
                    </div>
                </div>
            </div>
        </div>
