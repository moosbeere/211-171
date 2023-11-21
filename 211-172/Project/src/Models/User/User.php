<?php
    namespace src\Models\User;
    use src\ActiveRecordEntity;

class User extends ActiveRecordEntity{

    protected $nickname;
    protected $email;
    protected $isConfirmed;
    protected $role;
    protected $passwordHash;
    protected $authToken;
    
    public function getName(){
        return $this->nickname;
    }
    public static function getTableName():string
    {
        return 'users';
    }

    public static function signUp(array $userData): self
    {
        if (empty($userData['name'])) echo 'Empty name<br>';
        if (empty($userData['email'])) echo 'Empty email<br>';
        if (empty($userData['password'])) echo 'Empty password<br>';

        //validation
        if (!preg_match('/^[a-zA-Z0-9]+$/', $userData['name'])) echo 'wrong name<br>';
        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) echo 'wrong email<br>';
        if (mb_strlen($userData['password'])<6) echo 'wrong password<br>';
        if (static::findByColumn('email', $userData['email']) !== null) echo 'User early exists';

        $user = new User;
        $user->nickname = $userData['name'];
        $user->email = $userData['email'];
        $user->passwordHash = password_hash($userData['password'], PASSWORD_DEFAULT);
        $user->isConfirmed = false;
        $user->role = 'user';
        $user->authToken = sha1(random_bytes(100)).sha1(random_bytes(100));
        $user->save();
        return $user;
    }
}
?>