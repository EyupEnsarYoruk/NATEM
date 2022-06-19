<?php

    class Bilgi {

        function basarili($deger, $yol, $sure = 3, $class = '') {

			return '<div class="alert alert-success text-center '.$class.'"><strong>Başarılı! </strong>'.$deger.'</div>'.header("Refresh:".$sure."; url=".URL.$yol);

		}
		
		function hata($deger = false, $yol, $sure = 3, $class = '') {
			
			return '<div class="alert alert-danger text-center '.$class.'"><strong>Hata var! </strong>'.$deger.'</div>'.header("Refresh:".$sure."; url=".URL.$yol);

		}

		function uyari($tur, $metin, $id = false, $class = '') {
			
			return '<div class="alert alert-'.$tur.' text-center '.$class.'" '.$id.'>'.$metin.'</div>';

		}

		function sureliYonlen($yol, $sure = 3) {

			return header("Refresh:".$sure."; url=".URL.$yol);

		}

		function direktYonlen($yol) {

			return header("Location:".URL.$yol);

		}

		// SWEET ALERT

		function sweetAlert($link, $baslık, $metin, $durum) {

			return '<script> BilgiPenceresi("'.$link.'","'.$baslık.'","'.$metin.'","'.$durum.'"); </script>';

		}

    }

?>