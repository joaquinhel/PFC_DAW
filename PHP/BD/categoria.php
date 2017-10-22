<?php

include '../Entidades/Categoria';

class categoria {
    /* Insertar una nueva categoria
      public static function insertarCategoria($row) {
      $sql = "insert into clientes (NIF, Nombre, Apellido1, Apellido2) values ( "
      . " '" . $row[0] . "'"
      . ", '" . $row[1] . "'"
      . ", '" . $row[2] . "'"
      . ", '" . $row[3] . "' )"
      ;
      self::realizaUpdate($sql);
      }
      } */

    function insert_usuario($row) {
        try {
            $query = $this->dbh->prepare('insert into categoria values(?,?)');
            $query->bindParam(1, $row[0]); //ID
            $query->execute(2, $row[1]); //Nombre
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    /*
      function insert_usuario($nombre, $email, $registro) {
      try {
      $query = $this->dbh->prepare('insert into users values(null,?,?,?)');
      $query->bindParam(1, $nombre);
      $query->bindParam(2, $email);
      $query->bindParam(3, $registro);
      $query->execute();
      $this->dbh = null;
      } catch (PDOException $e) {
      $e->getMessage();
      } */
}
