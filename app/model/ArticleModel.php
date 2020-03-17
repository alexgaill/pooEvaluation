<?php

namespace App\Model;
use Core\Model\Model;

class ArticleModel extends Model{


  public function queryArticles(){
    return $this->db->query("SELECT * FROM articles", false);
  }
  // public function queryArticleById($id){
  //   return $this->db->query("SELECT * FROM articles WHERE id=$id", true);
  // }
  // public function queryArticlesByCategory($id){
  //   return $this->db->query("SELECT * FROM articles WHERE category_id=$id");
  // }

  // public function saveArticle($article){
  //   return $this->db->save("INSERT INTO articles (title, body, date, category_id) VALUES (:title, :body, :date, :category_id)",
  //   [
  //     ":title" => $article["title"],
  //     ":body" => $article["body"],
  //     ":date" => $article["date"],
  //     ":category_id" => $article["category_id"]
  //   ]);
  // }

  // public function updateArticle($id, $article){
  //   return $this->db->save("UPDATE articles SET title = :title, body = :body, date = :date, category_id = :category_id WHERE id=$id ",
  //   [
  //     ":title" => $article["title"],
  //     ":body" => $article["body"],
  //     ":date" => $article["date"],
  //     ":category_id" => $article["category_id"]
  //   ]);
  // }

  // public function deleteArticle($id){
  //     return $this->db->delete("DELETE FROM articles WHERE id=:id", [":id" => $id]);
  // }




}
