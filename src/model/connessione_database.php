<?
    session_start();

    $host = "localhost";
    $user = "5ATL";
    $pass = "5ATL";
    $db = "MAG";
    $tabCategoria = "`Categoria`";
    $tabMagazzino = "`Magazzino`";
    $tabMovimento = "`Movimento`";
    $tabProdotto = "`Prodotto`";
    $tabUtenti = "`Utenti`";

    $mydb = new mysqli($host, $user, $pass, $db);
?>
