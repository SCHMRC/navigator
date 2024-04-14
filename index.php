<?php
require_once __DIR__ . '/model/operatore.model.php';

try {
    $database = 'mysql:host=localhost;dbname=GL01';
    $data_username = 'marco';
    $data_password = 'admin';
    $pdo = new PDO($database, $data_username, $data_password);
} catch (PDOException $e) {
    //throw $th;
}



switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
            $request = $_SERVER['REQUEST_URI'];
            if(strlen($request) > 6){
                $ruoli = ['amministratore', 'autista', 'operatore'];
                //dopo aver fatto il login l'utente viene reindirizzato a un URL specifico del tipo /ruolo/numero di matricola
                // /autista/1325

                //prelevo la matricola dall'url
                $matricola = substr($request,-4);
                //eseguo la query
                $query = 'SELECT * FROM Operatore WHERE matricola = :matricola';
                $stm = $pdo->prepare($query);
                $stm->bindValue(':matricola', $matricola);
                $stm->execute();
                $result = $stm->fetchAll();
                $operatore = NULL;
                foreach ($result as $row) {
                    $nominativo = $row['nominativo'];
                    $n_patente = $row['n_patente'];
                    $ruolo = $row['ruolo'];
                    $piva = $row['piva'];
                    $operatore = new Operatore($matricola, $nominativo, $n_patente, $ruolo, $piva);
                }
                require __DIR__ . '/view/bio.tmp.php';
            }else{
                switch ($request) {
                    case '/GL01/':
                        require __DIR__ . '/view/auth.tmp.php';
                        break;
                    default:
                        echo 'pagina inesistente';
                        break;
                }
            }

            break;
        }

    case 'POST': {
        $matricola = $_POST['matricola'];
        $pw = $_POST['password'];
        $query = 'SELECT password FROM Credenziale WHERE matricola = :matricola';
        $stm = $pdo->prepare($query);
        $stm->bindValue(':matricola', $matricola);
        $stm->execute();
        $result = $stm->fetchAll();
        if('6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b' == $result[0]['password']){
                $query = 'SELECT ruolo FROM Operatore WHERE matricola = :matricola';
                $stm = $pdo->prepare($query);
                $stm->bindValue(':matricola', $matricola);
                $stm->execute();
                $result = $stm->fetchAll();
                $operatore = NULL;
                foreach($result as $row){
                    $operatore['ruolo'] = $row['ruolo'];
                    $operatore['matricola'] = $matricola;
                }
                header("Location: http://localhost:9090/GL01/". $operatore['ruolo'] . '/' . $operatore['matricola']);
                
        }
        $pdo = NULL;   
    }
}
?>