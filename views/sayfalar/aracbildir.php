<?php require "views/header.php"; ?>
<div class="container mt-5 mx-auto">
	<h2 class="text-center">ARAÇ BİLDİR SAYFASI</h2>
	
	<form action="/aracbildir/form">
	
		<div  class="col-6 mx-auto mb-5">
			<div  class="row justify-content-center mt-5 border pt-5 ps-2 border-dark">
				<div class="col-md-3 mb-5 text-center col-12 input-border bg-success text-white"><b>&nbsp;PLAKA GİRİNİZ</b></div>
				<div class="col-md-1 mb-5 col-3">
					<input type="number" value="<?php echo isset($_POST["plaka"]) ? $_POST["plaka"] : ""; ?>" onchange="if(this.value.length<2)this.value='0'+this.value;if(this.value==0) this.value='';" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="max-width:50px;" class="input-border"  maxlength="2" max="81"     required   name="plaka" >
				</div>
				<div class="col-md-3 col-4 mb-5 overflow-hidden">
					<input type="text" value="<?php echo isset($_POST["plaka2"]) ? $_POST["plaka2"] : ""; ?>" class="text-uppercase input-border"   maxlength="3" onkeydown="return /[a-z]/i.test(event.key);"     required   name="plaka2">
				</div>
				<div class="col-md-2 col-4 mb-5 overflow-hidden">
					<input style="max-width:75px;" value="<?php echo isset($_POST["plaka3"]) ? $_POST["plaka3"] : ""; ?>" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="input-border"   maxlength="4"    required   name="plaka3" >
				</div>
				<div class="col-md-3 col-12 text-center">
					<input  type="submit" class="bg-danger text-white" value="İLERİ" />
				</div>

			</div>
		</div>
	</form>
	
</div>
<div class="fixed-bottom">
<?php require "views/footer.php"; ?>
</div>