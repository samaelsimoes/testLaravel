<?php
    class User
    {
        public function getUserList() 
        {
            /**
                * Melhor prática usando conexão PDO e tratando as entradas do banco
                * com Prepared Statements
            */
            try 
            {
                $conn = new PDO('mysql:host=localhost;dbname=teste_bd_samael','MYUSERBD','PASSWORDSAMAELLINDO');
                
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $conn->prepare('SELECT name, phone FROM user');
                $query->execute();

                while ($results = $query->fetchAll())
                {
                    sort($results);
                    return $results;
                }
            } catch (PDOException $e) 
            {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
    }

    $users = new User();
    $listUsers = $users->getUserList();
    foreach ($listUsers as $user) 
    {
        echo $user['name'] . "<br>";
    }
?>
