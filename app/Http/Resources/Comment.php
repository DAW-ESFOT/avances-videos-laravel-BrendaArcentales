<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'text'=>$this->text,
            'user'=> '/api/users/'.User::find($this->user_id),
            'article'=>"/api/articles/".$this->article_id,
        ];
    }
}
