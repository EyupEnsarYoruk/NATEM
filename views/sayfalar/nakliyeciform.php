<?php require "views/header.php"; ?>
<?php if(Session::get("nakliyeciplaka") && Session::get("nakliyeciId")): 
Session::oturumKontrol("nakliyeci", "where plaka='".Session::get("nakliyeciplaka")."' and id=".Session::get("nakliyeciId"));?>     
    <div class="mt-3">
        <?php // Session::destroy(); ?>
        Burası Nakliyeci Formudur.
    </div>
</div>
<?php else: header("Location: ".URL.""); endif; ?>
<?php require "views/footer.php"; ?>
