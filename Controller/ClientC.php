<?php

include 'C:/xampp/htdocs/web/config.php';
include 'C:/xampp/htdocs/web/Model/Client.php';

class CC 
{
    public function listTicket()
    {
        $sql = "SELECT * FROM Client";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function showTicket($id)
    {
        $sql = "SELECT * from client where IdClient = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function addClient($client)
    {
        $sql = "INSERT INTO client 
                VALUES (:id ,:fi, :la, :em, :pass, :p)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                ':id' => $client->getIdClient(),

                ':fi' => $client->getFirstName(),
                ':la' => $client->getLastName(),
                ':em' => $client->getemail(),
                ':pass' => $client->getpassword(),
                ':p' => $client->getphone()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    function updateclient($clientt, $id)
    {
        try {
            $db = config::getConnexion();
            echo('<script>alert("test")</script>');
            $query = $db->prepare(
                'UPDATE client SET
                    FirstName = :fi, 
                    LastName = :la,
                    email = :em,
                    password = :pass,
                    phone = :p,
                WHERE IdClient = :id'
            );
            $query->execute([
                'id' => $id,
                'fi' => $client->getFirstName(),
                'la' => $client->getLastName(),
                'em' => $client->getemail(),
                'pass' => $client->getpassword(),
                'p' => $client->getphone()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function deleteclient($id)
    {
        $sql = "DELETE FROM client WHERE IdClient = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
}