<?
    class Utente
    {
        public static function get_utente_by_email($email, $pswd)
        {
            $profilo = Utente_model::get_utente_by_email($email, $pswd);
            
            return ($profilo)? $profilo : False;
        }

        public static function 
        {
            
        }

        public function (){

        }

        public function (){

        }

    }

    class Prodotto
    {
        public static function richiesta_prodotto()
        {   //tutti possono richiedere i prodotti

        }

        public static function elimina_prodotto()
        {   //soli i privilegiati

        }

        public static function aggiungi_prodotto()
        {   //solo i privilegiati
    
        }

        public static function visualizza_prodotto()
        {
            $lista_prodotto = Prodotto_model::visualizza_prodotto()  

            $set = 

            return 
        }

        public static function riconsegna_prodotto()
        {   //tutti possono riconsegnare
            
        }
    }

    class Categoria
    {
        public static function visualizza_categoria()
        {
            $lista_categoria = Categoria_model::visualizza_categoria()
            return ($lista_categoria)? $lista_categoria : False; //da completare su html con tabella
        }
    
    //menu tendina con ricerca categorie 
?>