
        <div class="main-container">
       	
            <!-- page content start -->
            <div class="container mb-2">
                <div class="alert alert-primary" role="alert">
                    <b>Jateng7Apps</b> masih dalam Beta Tester sehingga beberapa menu masih <i>disable</i><br>
                    Silakan teman-teman tinggalkan feedback apabila ada bug dan error <a href="/?inp=feedback">disini</a>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            	
                <!-- Swiper -->
                <div class="swiper-container geserdewe">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card bg-primary text-white overflow-hidden">
                                <div class="background opacity-30">
                                    <img src="img/idea.png" alt="">
                                </div>
                                <div class="card-body text-white">
                                     
                                    <p class="text-mute"><h5>Awareness</h5></p><br><br>
                                    <div class="text-right">
                                        <div class="btn btn-sm btn-default rounded">JATENG7</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card bg-primary text-white overflow-hidden">
                                <div class="background opacity-30">
                                    <img src="img/calendar.png" alt="">
                                </div>
                                <div class="card-body text-white">
                                     
                                    <p class="text-mute"><h5>Consistent</h5></p><br><br>
                                    <div class="text-right">
                                        <div class="btn btn-sm btn-default rounded">JATENG7</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card bg-primary text-white overflow-hidden">
                                <div class="background opacity-30">
                                    <img src="img/startup_isometric.png" alt="">
                                </div>
                                <div class="card-body text-white">
                                     
                                    <p class="text-mute"><h5>Persistent</h5></p><br><br>
                                    <div class="text-right">
                                        <div class="btn btn-sm btn-default rounded">JATENG7</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                         

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination white-pagination text-left pl-2 mb-3"></div>
                </div>
            </div>

            <!-- Menu link -->
            <div class="container mb-4">

                <div class="card">
                	  <div class="card-header">
                        <h6 class="mb-0">Category</h6>
                    </div>
                    <div class="card-body text-center ">
                        <div class="row justify-content-equal no-gutters">
                            <div class="col-4 col-md-2 mb-3">
                                <a href="<?php echo '/perform.html';?>" class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">leaderboard</span></a>
                                <p class="text-secondary"><small>Perform</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <a href="<?php echo '/quality.html';?>" class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">policy</span></a>
                                <p class="text-secondary"><small>Quality</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <a href="<?php echo $ur['blog_dir'];?>?page=calltree" class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">medical_services</span></a>
                                <p class="text-secondary"><small>Profilling</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <a href="<?php echo $ur['blog_dir'];?>?page=backdate" class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">account_circle</span></a>
                                <p class="text-secondary"><small>Eksternal</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">timeline</span></div>
                                <p class="text-secondary"><small>SDM</small></p>
                            </div>
                            <div class="col-4 col-md-2 mb-3">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">format_list_numbered</span></div>
                                <p class="text-secondary"><small>Other</small></p>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary rounded" id="more-expand-btn">Show more <span class="ml-2 small material-icons">expand_more</span></button>
                        <div class="row justify-content-equal no-gutters" id="more-expand">
                            <div class="col-4 col-md-2">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">card_giftcard</span></div>
                                <p class="text-secondary"><small>Insentif</small></p>
                            </div>
                            <div class="col-4 col-md-2">
                                <a href="/calc.php" class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">exposure</span></a>
                                <p class="text-secondary"><small>RR Adjusted</small></p>
                            </div>
                            <div class="col-4 col-md-2">
                                <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">coronavirus</span></div>
                                <p class="text-secondary"><small>News</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">cake</i>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <h6 class="mb-1">Siapa yang Ultah hari ini?</h6>
                                <p class="small text-secondary"><a href="/?page=greeting">Cek disini..</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container mb-4">
                <div class="card">
                    <div class="card-body text-left text-md-center">
                        <h5 class="text-secondary">J7 Info</h5>
                        
                        <div class="row my-3 justify-content-center">
                            <div class="col-10 col-md-4 mx-auto"><img src="img/startup__isometric.png" alt="" class="mw-100"></div>
                        </div>
                        <p class="text-secondary mt-3">Jateng7Apps was developed to support work activities at BTPN Syariah, especially in REG JATENG7. Useful for managing work tasks and daily monitoring. Jateng7Apps can help achieve team performance faster to achieve plans according to the timeline..</p>
                        
                    </div>
                </div>
            </div>
        </div>
   