<?php

namespace App\Models;

use DateTime;

class Post extends Model
{
   protected $table = 'posts';

   public function getCreatedAt(): string
   {
        return (new DateTime($this->created_at))->format("d/m/Y à H:m");
   }

   public function getExcerpt(): string
   {
       return substr($this->content, 0, 200). ' ...';
   }

   public function getButton(string $name): string
   {
        return <<<HTML
        <a href="/posts/$this->id" class="btn btn-primary">$name</a>
HTML;         
   }

   public function getTags()
   {
       return $this->query(
           "SELECT t.* FROM tags AS t
           INNER JOIN post_tag AS pt ON pt.tag_id = t.id
           WHERE pt.post_id = ?",
           $this->id
       );
   }
}