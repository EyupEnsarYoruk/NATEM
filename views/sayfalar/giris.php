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
        <h4 class="text-center">Üye Giriş Sayfası</h4> 
        <div class="row mt-3">
            <div class="col-xl-1 col-0"></div>
            <div class="col-xl-10 col-12 row text-center" style="justify-content:space-around;">
                <div class="col-xl-4 col-md-5 kayitol p-2">
                    <form action="<?php echo URL ?>/Uye/nakliyeciGirisKontrol" method="post">
                        <h5 class="mt-1">Nakliyeci</h5>
                        <p>Giriş Formu</p>
                        <!--<div class="row mb-3 kayitinput">
                            <div class="col-4">Plaka</div>
                            <div class="col-8"><input type="text" oninput="this.value = this.value.toUpperCase(), this.setCustomValidity('')" placeholder="34A3570"  pattern="^(0[1-9]|[1-7][0-9]|8[01])((\s?[a-zA-Z]\s?)(\d{4,5})|(\s?[a-zA-Z]{2}\s?)(\d{3,4})|(\s?[a-zA-Z]{3}\s?)(\d{2,3}))$"   required   name="plaka" value="<?php echo isset($_POST["plaka"]) ? $_POST["plaka"] : ""; ?>"></div>
                        </div>-->
						<div class="row mb-3 kayitinput">
                            <div class="col-4">Plaka</div>
                            <div class="col-8">
								<div class="row">
									<div class="col-4">
										<input type="number" min="1" max="81" onchange="if(this.value.length<2 )this.value='0'+this.value;if(this.value==0) this.value='';" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="max-width:50px;" class="input-border"  maxlength="2"     required   name="plaka" >
									</div>
									<div class="col-4  ">
										<input type="text" class="text-uppercase input-border"   maxlength="3" onkeydown="return /[a-z]/i.test(event.key);"     required   name="plaka2">
									</div>
									<div class="col-4">
										<input style="max-width:60px;" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="input-border"   maxlength="4"    required   name="plaka3" >
									</div>
								</div>
						</div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-4">Şifre</div>
                            <div class="col-8"><input type="password" required name="sifre" value="<?php echo isset($_POST["sifre"]) ? $_POST["sifre"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary kayitsubmit" value="Giriş Yap">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                Kayıt olmadınız mı? <a href="<?php echo URL ?>/Uye/uyeOl">Kayıt Olun</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                V3.00.00
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-md-5 kayitol p-2 mt-4 mt-md-0">
                    <form action="<?php echo URL ?>/Uye/komisyoncuGirisKontrol" method="post">
                        <h5 class="mt-2">Komisyoncu</h5>
                        <p>Giriş Formu</p>
                        <div class="row mb-3 kayitinput">
                            <div class="col-4">Telefon</div>
                            <div class="col-8">
								<div style="flex-wrap:inherit" class="input-group">
								  <span class="input-group-text">05</span>
								  <input type="text" name="telefon" class="form-control phone" placeholder="Başında 05 olmadan">
								</div>
							</div>
                        </div>
                        <div class="row mb-3 kayitinput">
                            <div class="col-4">Şifre</div>
                            <div class="col-8"><input type="password" required name="sifre" value="<?php echo isset($_POST["sifre"]) ? $_POST["sifre"] : ""; ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary kayitsubmit" value="Giriş Yap">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                Kayıt olmadınız mı? <a href="<?php echo URL ?>/Uye/uyeOl">Kayıt Olun</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                V3.00.00
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-1 col-0"></div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>


<?php
    else:
        header("Location: ".URL);
    endif;
?>
<?php require "views/footer.php"; ?>
