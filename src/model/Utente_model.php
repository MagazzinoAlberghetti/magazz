<?
    require_once('./connessione_database.php');

    class Utente_model
    {
        public function get_utente_by_email($email, $pswd)
        {
            $data = $mydb->query("SELECT * FROM `$db`.$tabUtenti WHERE $tabUtenti.`email_utente`='$email' AND $tabUtenti.`password_utente`=PASSWORD('$pswd')");
            return $data;
        }

    }

    class Prodotto_model
    {
        //get permessi

        public static function richiesta_prodotto()
        {   //tutti possono richiedere i prodotti
            $quantita = $mydb->
        }

        public static function elimina_prodotto()
        {   //soli i privilegiati

        }

        public static function aggiungi_prodotto()
        {   //solo i privilegiati
    
        }

        public static function visualizza_prodotto()
        {   //tutti possono visualizzare
            $data = $mydb->query("SELECT `nome_prodotto` FROM `$db`.$tabProdotto" );
            return $data;
        }

        public static function riconsegna_prodotto()
        {   //tutti possono riconsegnare
            
        }
    }

    class Categoria_model
    {
        public static function visualizza_categoria()
        {
            $data = $mydb->query("SELECT `nome_categoria` FROM `$db`.$tabCategoria" );
            return $data;
        }


    }

?>