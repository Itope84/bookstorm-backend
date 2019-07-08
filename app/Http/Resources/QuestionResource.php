<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            "body" => $this->body,
            "tags" => $this->tags,
            "created_at" => $this->created_at->diffForHumans(),
            "id" => $this->id,
            "title" => $this->title,
            "user" => $this->user,
            "answers" => $this->whenLoaded('answers')
        ];
    }
}
