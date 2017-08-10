<?php

/**
 * Demonstrate with PHP how you would connect to a MySQL (InnoDB) database and query for all
 * records with the following fields: (name, age, job_title) from a table called 'testUnit_test'.
 * Also provide an example of how you would write a sanitised record to the same table.
 *
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

include_once "../config/config.php";

class database
{

    public function read()
    {
        $db = config::getInstance();
        $sql = $db->query("SELECT * FROM testUnit.test");
        $result = $sql->fetchAll();

        return $result;
    }

    public function readById($id)
    {
        $db = config::getInstance();
        $sql = $db->query("SELECT * FROM testUnit.test where id =" . $id);
        $result = $sql->fetch();

        return $result;
    }

    public function create(array $employee)
    {
        $db = config::getInstance();
        $db->beginTransaction();
        try {
            $sql = $db->prepare("INSERT INTO testUnit.test (name, age, job_title) VALUE (:name, :age, :job_title)");
            $sql->execute(array(
                ':name' => $employee['name'],
                ':age' => $employee['age'],
                ':job_title' => $employee['job_title']
            ));
            $lastId = $db->lastInsertId();
            $db->commit();

            return $lastId;
        } catch (PDOException $e) {
            $db->rollBack();
            die('Erro insert into database ' . $e->getMessage());
        }
    }
}