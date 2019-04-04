<?php

namespace App\DAO\MySQL\CodeeasyGerenciadorDeLojas;

abstract class Conexao
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $host = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_HOST');
        $port = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_PORT');
        $user = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_USER');
        $pass = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_PASSWORD');
        $dbname = getenv('CODEEASY_GERENCIADOR_DE_LOJAS_MYSQL_DBNAME');

        $dsn = "mysql:host=localhost;dbname=codeeasy_gerenciador_de_lojas;port=3306";
        //$dsn = new PDO("mysqlhost:host=localhost;dbname=prueba", $user, $pass);
        echo "<br> host: $host";
        echo "<br> port: $port";
        echo "<br> user: $user";
        echo "<br> pass: $pass";

        //die();
        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}
