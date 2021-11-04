<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class NewsModel extends Model{
        protected $table = 'news';

        public function getNews($slug = false){
            if(false == $slug){
                return $this->findAll();
            }

            return $this->asArray()
                        ->where(['slug' => $slug])
                        ->first();
        }
    }