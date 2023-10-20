<?php
    namespace src\Models\Articles;
    use src\Models\Users\User;
    use Services\Db;
    use src\Models\ActiveRecordEntity;


    class Article extends ActiveRecordEntity{
       
        protected $name;
        protected $text;
        protected $authorId;

       
        public function getName()
        {
            return $this->name;
        }
        public function getText()
        {
            return $this->text;
        }     
        public function  getAuthorId():User
        {
            $db = new Db();
            $user = $db->query('SELECT * FROM `users` WHERE `id`=:id', [':id'=>$this->authorId], User::class);
            return $user[0];
        }

        public static function getTableName(){
            return 'articles';
        }
     }

