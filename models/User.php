<?php 
    class User{
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

    }

    interface UserDAOInterface{
        public function buildUser($data);
        public function create(User $User, $authUser = false);
        public function update(User $user);
        public function findByToken($Token);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function findByEmail($email);
        public function changePassword(User $user);
        public function findById($id);
    }