<!DOCTYPE html>
<html lang="en">
<head>
	 <?php $this->load->view('partial/head')?>
	
</head>
<body>
	<?php $this->load->view('partial/header')?>
	
    <div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
        <div class="img-bg  bg-layer-4">
            
        </div>
        <div class="container-fluid h-100 mt-xs-50">
        
            <div class="row h-100">
                <div class="col-md-1"></div>
                
                
                <div class="col-sm-12 col-md-12 h-sm-50 oflow-hidden swiper-area pos-relative ">          
                	<section class="bg-1-white ptb-0">
				        <div class="container-fluid">
				            <div class="row">
				                <div class="col-lg-1"></div>
				                <div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
				                    <div class="row">
				                    
				                        <!-- START OF FIRST PARA -->
				                        
				                    
				                        <!-- END OF FIRST PARA -->
				                    </div><!-- row -->
				                    
				                   
				                    <div class="row">
				                        <?php 
				                            $no = 1;
				                            foreach($berita as $wa){ 
				                        ?>
				                        
				                        <!-- START OF SECOND PARA -->
				                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mb-30">
				                            <div class="card h-100 h-xs-500x">
				                                <div class="sided-half sided-xs-half h-100 bg-white">
				                                
				                                    <!-- SETTING IMAGE WITH bg-2 -->
				                                    <div class="s-left w-50 w-xs-100 h-100 h-xs-50 pos-relative">
				                                        
				                                            <img src="<?php echo base_url('../beritadong/gambar/'.$wa->gambar) ?>" width="64" />
				                                        
				                                    </div>
				                                    
				                                    <div class="s-right w-50 w-xs-100 h-xs-50">
				                                        <div class="plr-25 ptb-25 h-100">
				                                            <div class="dplay-tbl">
				                                                <div class="dplay-tbl-cell">
				                                                
				                                                    <h5 class="color-ash"><b><?php echo $wa->id_kategori ?></b></h5>
				                                                    

				                                                        <b><?php echo $wa->judul ?></b></a></h2>
				                                                    <ul class="list-li-mr-10 color-lt-black">
				                                                        <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
				                                                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
				                                                    </ul>
				                                                    
				                                                </div><!-- dplay-tbl-cell -->
				                                            </div><!-- dplay-tbl -->
				                                        </div><!-- plr-25 ptb-25 -->
				                                    </div><!-- s-right -->

				                                </div><!-- sided-half -->
				                            </div><!-- card -->
				                        </div><!-- col-lg-8 col-md-12 -->
				                        <?php echo $wa->deskripsi ?>
				                        <?php } ?>
				                    
				                        <!-- END OF THIRD PARA -->
				                    </div><!-- row -->
				                    
				                    
				                    
				                </div><!-- col-sm-9 -->
				                
				               
				            </div><!-- row -->
				        </div><!-- container -->
				    </section>
                </div><!-- col-sm-6 -->
                
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- slider-main -->
    
    
    
    <!-- ##### Footer Add Area End ##### -->
<?php $this->load->view('partial/footer')?>
<?php $this->load->view('partial/script')?>


</body>
</html>