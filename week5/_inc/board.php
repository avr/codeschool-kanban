<?php

class BoardList {

    protected $db;

    public function __contstruct($db) {
        $this->db = $db;

        var_dump($db);
    }

    public function getBoards() {
        $sth = $this->db->prepare("SELECT * FROM board");
        $sth->execute();

        $result = $sth->fetchAll();

        return $result;
    }


}
