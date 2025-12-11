<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $inicio = null, $rows_count = null)
    {
        $sql = "select * from {$table}";

        if($inicio >= 0 && $rows_count > 0) {
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function countAll($table)
    {
        $sql = "select COUNT(*) from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectAllWithSearch($table, $column, $search, $inicio = null, $rows_count = null)
    {
        $sql = "select * from {$table} WHERE {$column} LIKE :search";

        if($inicio >= 0 && $rows_count > 0) {
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['search' => "%{$search}%"]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectOne($table, $id)
    {
    $sql = sprintf('SELECT * FROM %s WHERE id=:id LIMIT 1', $table );

    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
        

    }



  //  INSERT INTO `users` (`id`, `name`, `email`, `img_path`, `passwordint`, `role`) VALUES ('002', 'joao', 'email2@email2', 'none', 'pass', '');
    public function insert($table, $parameters){
        $sql = sprintf(' INSERT INTO %s (%s) VALUES (:%s)',
        $table,
        implode(', ', array_keys($parameters)),
        implode(', :', array_keys($parameters)),
        );  
    
    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function countAllWithSearch($table, $column, $search)
    {
        $sql = "select COUNT(*) from {$table} WHERE {$column} LIKE :search";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['search' => "%{$search}%"]);

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //UPDATE `users` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`img_path`='[value-4]',`passwordint`='[value-5]',`role`='[value-6]' WHERE 1
    public function update($table, $id, $parameters){
        $sql = sprintf('UPDATE %s SET %s WHERE id = %s',
        $table,
        implode(',', array_map(function($param) {
            return $param . ' = :' .$param;
        }, array_keys($parameters))),
        $id
    );
     try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    //DELETE FROM `users` WHERE 0
    public function delete($table, $id)
    {
        $sql = sprintf('DELETE FROM %s WHERE %s',
        $table,
        'id = :id'
    );

    try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function verificaLogin($email, $senha): mixed
    {
        $sql = sprintf(format: 'SELECT * FROM users WHERE email = :email AND password = :password');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $email,
                'password' => $senha
            ]);

            $user = $stmt->fetch(PDO::FETCH_OBJ);

            return $user;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

