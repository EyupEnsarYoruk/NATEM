<?php require "views/header.php"; ?>
<div class="container-fluid my-5">
<div class="row">
            <div class="col-3"></div>
                <?php 
                    if(isset($veri["hata"])):
                        echo "<div class='alert alert-danger col-6 p-3 mt-2 mb-3 text-center'>";
                        foreach($veri["hata"] as $value):
                            echo ucfirst($value);
                        endforeach;
                        echo "</div>";
                    endif;
                ?>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
                <?php 
                    if(isset($veri["bilgi"])):
                        if(is_array($veri["bilgi"])):
                            foreach($veri["bilgi"] as $value):
                                echo ucfirst($value);
                            endforeach;
                        else:
                            echo ucfirst($veri["bilgi"]);
                        endif;
                    endif;
                ?>
            <div class="col-3"></div>
        </div>
	<div class="col-10 mx-auto text-center border">
	<form action="<?php echo URL ?>/Iletisim/formKontrol" method="post">
		<div class="row justify-content-center mb-5">
			<div class="col-10 mt-2">
				<h4 class=" bg-primary rounded text-white p-3">İletişim Gönderi Formu</h3>
			</div> 
			
			<div class="col-md-4 col-sm-12 mt-5">
				<h4>İsim Soyisim</h4>
				<input type="text" required name="isim" class="form-control" />
			</div>
			<div class="col-1"></div>
			<div class="col-md-4 col-sm-12  offset-md-1 mt-5 mb-5">
				<h4>Telefon Numarası</h4>
				<div style="flex-wrap:inherit" class="input-group text-center">
					<span class="input-group-text">05</span>
					<input type="text" required name="telefon"  class="phone form-control pl-1" placeholder="Başında 05 olmadan">
				</div>
			</div> 
				<div class="col-md-8 col-12 mt-2">
				<div class="form-floating">
				  <textarea class="form-control" name="mesaj" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
				  <label for="floatingTextarea2">Mesajınızı Giriniz</label>
				</div>
				</div> 
				<div class="col-12 col-md-2 mt-2">
					<button class="btn btn-danger h-100 w-100 text-white">Mesajı Gönderin!</button>
				</div>
			
			
		</div>
		</form>
	</div>
	
</div>
<script type="text/javascript">
$(document).ready(function () {
        $('.phone').mask('00 000 00 00');		
    });
</script>
<div class="fixed-bottom">
<?php require "views/footer.php"; ?>
</div>