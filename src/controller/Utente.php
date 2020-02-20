<?
    class Utente
    {
        public static function get_utente_by_email($email, $pswd){

            $profilo = Utente_model::get_utente_by_email($email, $pswd);
            
            return ($profilo) ? $profilo : false;
        }

        public function richiesta_prodotti()
        {
            //
        }

        public function (){

        }

        public function (){

        }

    }
    

?>