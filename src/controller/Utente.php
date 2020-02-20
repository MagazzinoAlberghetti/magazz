<?
    require_once('../model/Utente_model.php');
    class Utente
    {
        public static function get_utente_by_email($email, $pswd)
        {
            $profilo = Utente_model::get_utente_by_email($email, $pswd);
            
            return ($profilo) ? $profilo : false;
        }

        public static function b(){
            
        }

        public function c(){

        }

        public function d(){

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

        public static function visualizza_prodotto($id,$nomeProdotto)
        {
            $lista_prodotti = Prodotto_model::visualizza_prodotto($nomeProdotto);

            //$set //probabilmente non serve siccome uno vuole l'elenco completo 

            return ($lista_prodotti)? $lista_prodotti : false;
        }

        public static function riconsegna_prodotto()
        {   //tutti possono riconsegnare
            
        }

        public static function contaprodotto(){

        }
    }

    class Categoria
    {
        public static function visualizza_categoria()
        {
            $lista_categoria = Categoria_model::visualizza_categoria();
            return ($lista_categoria)? $lista_categoria : False; //da completare su html con tabella
        }
    
    //menu tendina con ricerca categorie 
?>
