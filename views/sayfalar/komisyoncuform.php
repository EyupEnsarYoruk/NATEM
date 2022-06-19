<?php require "views/header.php"; ?>
<?php if(Session::get("komisyoncutelefon") && Session::get("komisyoncuId")): 
Session::oturumKontrol("komisyoncu", "where telefon='".Session::get("komisyoncutelefon")."' and id=".Session::get("komisyoncuId")); ?>     
    <?php // Session::destroy(); ?>
    <div class="mt-3">
        Burası Komisyoncu Formudur.
    </div>
</div>
<?php else: header("Location: ".URL.""); endif; ?>
<?php require "views/footer.php"; ?>
