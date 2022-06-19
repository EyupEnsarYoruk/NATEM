<?php

    class Session {

        public static $db;

        public static function init () {

            self::$db = new Database();

            session_start();

        }

        public static function set ($key, $value) {

            $_SESSION[$key] = $value;

        }

        public static function get ($key) {
            
            if(isset($_SESSION[$key])):

                return $_SESSION[$key];

            endif;

        }

        public static function destroy () {

            if($_SESSION):

                session_destroy();

            endif;

        }

        public static function oturumKontrol ($tabload, $sorgu) {

            $sonuc = self::$db->Listele($tabload, $sorgu);

            if(!isset($sonuc[0])):

                self::destroy();

            endif;

        }   

    }

?>