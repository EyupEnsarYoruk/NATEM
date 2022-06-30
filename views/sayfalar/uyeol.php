<?php require "views/header.php"; ?>
<?php if((!Session::get("nakliyeciplaka") && !Session::get("nakliyeciId")) && (!Session::get("komisyoncutelefon") && !Session::get("komisyoncuId"))): 
Session::oturumKontrol("nakliyeci", "where plaka='".Session::get("nakliyeciplaka")."' and id=".Session::get("nakliyeciId"));
Session::oturumKontrol("komisyoncu", "where telefon='".Session::get("komisyoncutelefon")."' and id=".Session::get("komisyoncuId")); ?>     
<div class="mt-3">
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
        <h4 class="text-center">Üye Olmak İsteyenler Sayfası</h4> 
        <div class="row mt-3">
            <div class="col-xl-1 col-0"></div>
            <div class="col-xl-10 col-12 row text-center" style="justify-content:space-around;">
                <div class="col-lg-0"></div>
                <div class="col-lg-5 kayitol p-2">
                    <form action="<?php echo URL ?>/Uye/nakliyeciKayitKontrol" method="post">
                        <h5 class="mt-1">Nakliyeci</h5>
                        <p>Kayıt Formu</p>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Telefon Numaranızı Giriniz</div>
                            <div class="col-6">
								<div style="flex-wrap:inherit" class="input-group">
									<span class="input-group-text">05</span>
									<input type="text" name="telefon" class="form-control phone" placeholder=" Telefon numarası">
								</div>
							</div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Plakanızı Giriniz</div>
                            <div class="col-6">
								<div class="row">
									<div class="col-4">
										<input type="number" value="<?php echo isset($_POST["plaka"]) ? $_POST["plaka"] : ""; ?>" onchange="if(this.value.length<2)this.value='0'+this.value;if(this.value==0) this.value='';" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="max-width:50px;" class="input-border"  maxlength="2" max="81"     required   name="plaka" >
									</div>
									<div class="col-4  ">
										<input type="text" value="<?php echo isset($_POST["plaka2"]) ? $_POST["plaka2"] : ""; ?>" class="text-uppercase input-border"   maxlength="3" onkeydown="return /[a-z]/i.test(event.key);"     required   name="plaka2">
									</div>
									<div class="col-4">
										<input style="max-width:60px;" value="<?php echo isset($_POST["plaka3"]) ? $_POST["plaka3"] : ""; ?>" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="input-border"   maxlength="4"    required   name="plaka3" >
									</div>
								</div>
							</div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Şifrenizi Giriniz</div>
                            <div class="col-6"><input type="password" name="sifre" value="<?php echo isset($_POST["sifre"]) ? $_POST["sifre"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-4 kayitinput">
                            <div class="col-6">Şifre Tekrar Belirleyiniz</div>
                            <div class="col-6"><input type="password" name="sifretekrar" value="<?php echo isset($_POST["sifretekrar"]) ? $_POST["sifretekrar"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5">
                                <input type="submit" class="btn btn-success kayitsubmit" value="İleri">
                            </div>
                            <div class="col-7 text-start">
                                Kaydınız Var mı? <a href="<?php echo URL ?>/Uye/giris">Giriş Yapın</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 kayitol p-2 mt-4 mt-lg-0">
                    <form action="<?php echo URL ?>/Uye/komisyoncuKayitKontrol" method="post">
                        <h5 class="mt-2">Komisyoncu</h5>
                        <p>Kayıt Formu</p>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Telefon Numaranız</div>
                            <div class="col-6">
								<div style="flex-wrap:inherit" class="input-group">
									  <span class="input-group-text">05</span>
									  <input type="text" name="telefon" class="form-control phone" placeholder=" Telefon numarası" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ""; ?>">
								</div>
							</div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Firma İsmi Belirleyiniz</div>
                            <div class="col-6"><input type="text" name="firmaismi" value="<?php echo isset($_POST["firmaismi"]) ? $_POST["firmaismi"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-6">Şifrenizi Giriniz</div>
                            <div class="col-6"><input type="password" name="sifre" value="<?php echo isset($_POST["sifre"]) ? $_POST["sifre"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-4 kayitinput">
                            <div class="col-6">Şifre Tekrar Belirleyiniz</div>
                            <div class="col-6"><input type="password" name="sifretekrar" value="<?php echo isset($_POST["sifretekrar"]) ? $_POST["sifretekrar"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-5">
                                <input type="submit" class="btn btn-success kayitsubmit" value="İleri">
                            </div>
                            <div class="col-7 text-start">
                                Kaydınız Var mı? <a href="<?php echo URL ?>/Uye/giris">Giriş Yapın</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-1 col-0"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.phone').mask('00 000 00 00');		
    });
	$("input[name='plaka2']").on("change",function(){
		
		if($(this).val().length>2){
			$("input[name='plaka3']").attr("maxlength",'3');
		}else{
			$("input[name='plaka3']").attr("maxlength",'4');
		}
	});
</script>
<?php
    else:
        header("Location: ".URL);
    endif;
?>
<?php require "views/footer.php"; ?>
