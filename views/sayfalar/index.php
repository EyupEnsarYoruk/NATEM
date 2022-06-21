<?php require "views/header.php"; ?>

<div class="body-div mt-2">
    <!-- Slide start -->

		<div class="slider ">
		
		<div id="carouselExampleControls" class="carousel slide" style="overflow:hidden" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo URL ?>/views/design/images/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URL ?>/views/design/images/slide2.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="<?php echo URL ?>/views/design/images/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		
		</div>
	

	
	<!-- Slide end -->
    <div class="row mt-4" style="align-items: center;">
        <div class="col-12 text-center"><marquee>Son Dakika Natemden Haber Kayan Haber</marquee></div>
    </div>
    <hr style="height:10px; border-width:0; background-color: rgb(206, 65, 0); opacity:1;">
    <div class="row videolar">
        <div class="col-6  col-md-3 text-center">
            <div>
                <p style="font-weight: 500;">Nakliyeci Üye Anlatım Videosu</p> 
                <div>
                    <img src="<?php echo URL ?>/views/design/images/direksiyon.jpg" width="140px" style="margin-top:30px">
                </div>
            </div>
        </div>
        <div class="col-6  col-md-3 text-center">
            <div>
                <p style="font-weight: 500;">Komisyoncu Üye Anlatım Videosu</p> 
                <div>
                    <img src="<?php echo URL ?>/views/design/images/direksiyon.jpg" width="140px" style="margin-top:30px">
                </div>
            </div>
        </div>
        <div class="col-6  col-md-3 text-center">
            <div>
                <p style="font-weight: 500;">Şoför Anlatım Videosu</p> 
                <div>
                    <img src="<?php echo URL ?>/views/design/images/direksiyon.jpg" width="140px" style="margin-top:30px">
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 text-center">
            <div>
                <p style="font-weight: 500;">Natem Genel Anlatım Videosu</p> 
                <div> 
                    <img src="<?php echo URL ?>/views/design/images/direksiyon.jpg" width="140px" style="margin-top:30px">
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php require "views/footer.php"; ?>
