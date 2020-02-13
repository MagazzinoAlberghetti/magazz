<?
    require_once('./connessione_database.php');

    class Utente_model()
    {
        public function get_utente_by_email($email, $pass)
        {
            $data = $mydb->query("SELECT * FROM `.$db.`.$tabUtenti WHERE $tabUtenti.`email_utente`='$email' AND $tabUtenti.`password_utente`=PASSWORD('$pswd')");
            return $data;
        }

    }

?>