<?php

require_once ROOT_PATH . "/Model/Database.php";

class UserModel extends Database{

    public function getUsers(int $limit): array {
        return $this->select($limit);
    }
}
?>