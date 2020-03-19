<?php

namespace App\Model;

use Core\Model\Model;

class CommentairesModel extends Model
{
    public function find(int $id)
    {
        return $this->db->query("SELECT * FROM commentaires WHERE article_id=" . $id." ORDER BY created_at DESC", false);
    }

    public function newOne(array $array){
        $this->db->save("INSERT INTO commentaires (title, content, article_id) VALUES (:title, :content, :article_id)", $array);
    }
}