<?php require "views/header.php"; ?>

<div class="container-fluid px-4">

<div class="row">
	<h3 class="text-center bg-primary text-white mt-5 mb-5">VUKUAT BİLDİRİM FORMU</h3>
	<div class="col-md-6">
		<h5 class="text-center">ÖDEMEYİ YAPMAYAN BİLGİLERİ</h5>
		<table class="mx-auto table table-bordered">
			<tr>
				<td>Adı Soyadı</td>
				<td><input type="text" required class="form-control" /></td>
			</tr>
			<tr>
				<td>Telefonu</td>
				<td><div style="flex-wrap:inherit" class="input-group text-center">
					<span class="input-group-text">05</span>
					<input type="text" required name="telefon"  class="phone form-control pl-1" placeholder="Başında 05 olmadan">
				</div></td>
			</tr>
			<tr>
				<td>Firma</td>
				<td><input type="text" required class="form-control" /></td>
			</tr>
			<tr>
				<td>Yükleme Tarihi</td>
				<td><input type="date" required class="form-control" /></td>
			</tr>
			<tr>
				<td>Yükleme Saati</td>
				<td><input type="time" required class="form-control" /></td>
			</tr>
			<tr>
				<td>İndirme Tarihi</td>
				<td><input type="date" required class="form-control" /></td>
			</tr>
			<tr>
				<td>İndirme Saati</td>
				<td><input type="time" required class="form-control" /></td>
			</tr>
			<tr>
				<td>Yükleme Yeri</td>
				<td><input type="text" required class="form-control" /></td>
			</tr>
			<tr>
				<td>İndirme Yeri</td>
				<td><input type="text" required class="form-control" /></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<h5 class="text-center">ÖDEMEYİ ALAMAYAN BİLGİLERİ</h5>
		<table class="mx-auto table table-bordered">
			<tr>
				<td>Adı Soyadı</td>
				<td><input type="text" required class="form-control" /></td>
			</tr>
			<tr>
				<td>Telefonu</td>
				<td><div style="flex-wrap:inherit" class="input-group text-center">
					<span class="input-group-text">05</span>
					<input type="text" required name="telefon"  class="phone form-control pl-1" placeholder="Başında 05 olmadan">
				</div></td>
			</tr>
			<tr>
				<td>Araç Plakası</td>
				<td>
				
				<div class="row">
					<div class="col-4">
						<input type="number" min="1" max="81" onchange="if(this.value.length<2 )this.value='0'+this.value;if(this.value==0) this.value='';" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  class="input-border form-control"  maxlength="2"     required   name="plaka" >
					</div>
					<div class="col-4  ">
						<input class="text-uppercase form-control input-border"  type="text" value="<?php echo isset($_POST["plaka2"]) ? $_POST["plaka2"] : ""; ?>"    maxlength="3" onkeydown="return /[a-z]/i.test(event.key);"     required   name="plaka2">
					</div>
					<div class="col-4">
						<input  class="form-control input-border"  oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number"    maxlength="4"    required   name="plaka3" >
					</div>
				</div>
				</td>
			</tr>
			<tr>
				<td>Toplam Bakiye</td>
				<td><input type="text" required class="form-control para" /></td>
			</tr>
			<tr>
				<td>Kalan Bakiye</td>
				<td><input type="text" step="0.01"  required class="form-control para" /></td>
			</tr>
			<tr>
				<td>Ödememe Sebebi</td>
				<td><input type="text" required class="form-control para" /></td>
			</tr>	
		</table>
		<div class="col-md-3 mx-auto">
				<button class="btn p-3 btn-danger">VUKUATI KAYDET</button>
			</div>
	</div>
</div>

</div>

<div class="fixed-bottom">
<?php require "views/footer.php"; ?>
</div>
<script type="text/javascript">
//Kuruş İstenirse
$('.para').mask('000.000.000.000.000,00', {reverse: true});
</script>
