<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {

    public function insert_data($username, $password, $email, $usertype) {
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'usertype' => $usertype
        );
        $result = $this->db->table('user')
                    ->insert($data)
                    ->exec();
        if($result)
            return true;
    }
}
?>