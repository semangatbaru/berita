<!DOCTYPE html>
<html lang="en">
<head>
     <?php $this->load->view('partial/head')?>
    
</head>
<body>
    <?php $this->load->view('partial/header')?>
    <div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
        <div class="img-bg  bg-layer-4">
            <img src="<?php echo base_url('assets/') ?>images/daun.jpg" alt="" width="500" height="800">
        </div>
        <div class="container-fluid h-100 mt-xs-50">
        
            <div class="row h-100">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-5 h-100 h-sm-50">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell color-white mtb-30">
                        <h1 style="font-size:100px; font-family:'gunplay"> DPC GEMASABA JEMBER </h1>
                            <div class="mx-w-400x">
                                <h5><b></b></h5>
                                <h1 class="mt-20 mb-30"><b></b></h1>
                                <h6><a class="plr-20 btn-brdr-grey color-white" href="#"><b>Continue Reading</b></a></h6>
                            </div><!-- mx-w-200x -->
                        </div><!-- dplay-tbl-cell -->
                    </div><!-- dplay-tbl -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-12 col-md-6 h-sm-50 oflow-hidden swiper-area pos-relative">          
    
                    <div class="abs-blr pos-sm-static">
                        <div class="row pos-relative mt-50 all-scroll">
                        
                            <div class="swiper-scrollbar resp"></div>
                            <div class="col-md-10">
                                
                                <h5 class="mb-50 color-white"><b></b></h5>
                                
                                <div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false" 
                                    data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="2"
                                    data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true"
                                    data-swpr-responsive="[1, 2, 1, 2]">
                                    
                                    
                                
                                    <div class="swiper-wrapper">
                                        <!-- data-swiper-autoplay="1000"  -->
                                        
                                    </div><!-- swiper-wrapper -->
                                </div><!-- swiper-container -->
                                
                            </div><!-- col-sm-6 -->
                        </div><!-- all-scroll -->
                    </div><!-- row -->
                </div><!-- col-sm-6 -->
                
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- slider-main -->
    
    
    <section class="bg-1-white ptb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
                    <div class="row">
                    
                        <!-- START OF FIRST PARA -->
                        <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                            <div class="card h-100 bg-white">
                                
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                        
                        <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                            <div class="card h-100 bg-white">
                               
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                        
                        <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
                            <div class="card h-100 bg-white">
                                
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    
                        <!-- END OF FIRST PARA -->
                    </div><!-- row -->
                    
                    <h4 class="mb-30 mt-20 clearfix"><b>Ekonomi</b></h4>
                    
                    <div class="row">
                        <?php 
                            $no = 1;
                            foreach($ekonomi as $wa){ 
                        ?>
                        
                        <!-- START OF SECOND PARA -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mb-30">
                            <div class="card h-100 h-xs-500x">
                                <div class="sided-half sided-xs-half h-100 bg-white">
                                
                                    <!-- SETTING IMAGE WITH bg-2 -->
                                    <div class="s-left w-50 w-xs-100 h-100 h-xs-50 pos-relative">
                                        
                                            <img src="<?php echo base_url('../beritadong/gambar/'.$wa['gambar']) ?>" width="64" height="230"/>
                                        
                                    </div>
                                    
                                    <div class="s-right w-50 w-xs-100 h-xs-50">
                                        <div class="plr-25 ptb-25 h-100">
                                            <div class="dplay-tbl">
                                                <div class="dplay-tbl-cell">
                                                
                                                   
                                                    <h2 class="mtb-10"><a href="<?php echo base_url('Welcome/detail/'.$wa['id_berita']) ?>">

                                                        <b><?php echo $wa['judul'] ?></b></a></h2>
                                                    <ul class="list-li-mr-10 color-lt-black">
                                                        <li><i class="mr-5 font-12 ion-android-favorite-outline"><?php echo date("d-m-Y", strtotime($wa['tanggal'])) ?></i></li>
                                                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
                                                    </ul>
                                                    
                                                </div><!-- dplay-tbl-cell -->
                                            </div><!-- dplay-tbl -->
                                        </div><!-- plr-25 ptb-25 -->
                                    </div><!-- s-right -->
                                </div><!-- sided-half -->
                            </div><!-- card -->
                        </div><!-- col-lg-8 col-md-12 -->
                        <?php } ?>

                       
                    
                        <!-- END OF THIRD PARA -->
                    </div><!-- row -->
                
                    
                   
                <div class="col-sm-12 col-md-12  mb-30">
                    <h6 class="text-center mt-20"><a class="btn-brdr-grey color-ash plr-30" href="#"><b>LOAD MORE</b></a></h6>
                </div>
            </div><!-- row -->
           
    </div>
    </section>
    
    <!-- ##### Footer Add Area End ##### -->
<?php $this->load->view('partial/footer')?>
<?php $this->load->view('partial/script')?>


</body>
</html>