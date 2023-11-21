<?php

require dirname(__FILE__) . "/../models/student.php";

class DBManager {
    private PDO $conn;

    public function __construct()
    {
        $this->conn = $this->get_db_conn();
    }

    public function get_all_students(): array
    {
        $students = [];
        $query = "
        SELECT
            *
        FROM
            student
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row) {
            $student = new Student($row["id"], $row["name"], $row["grade"]);
            array_push($students, $student);
        }
        return $students;
    }

    private function get_dns(): string
    {
        $host = $_ENV["DB_HOST"];
        $port = $_ENV["DB_PORT"];
        $dbname = $_ENV["DB_DATABASE"];
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};";
        return $dsn;
    }

    private function get_db_user(): string
    {
        $dbuser = $_ENV["DB_USERNAME"];
        return $dbuser;
    }

    private function get_db_pass(): string
    {
        $dbpass = $_ENV["DB_PASSWORD"];
        return $dbpass;
    }

    private function get_db_conn(): PDO
    {
        try {
            $conn = new PDO($this->get_dns(), $this->get_db_user(), $this->get_db_pass());
            return $conn;
        } catch(PDOException $e) {
            echo "failed db execution";
            echo $e->getMessage();
        }
    }
}

