<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => (string)$this->id,
            'type' => 'Books',
            'attributes' => [
                'name' => $this->name,
                'description' => $this->description,
                'publication_year' => $this->publication_year,
                'created_at' => $this->created_at,
                'upated_at' => $this->upated_at,
            ]
        ];
    }
}