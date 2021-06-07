<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
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
            'id' => $this['entry_number'],
            'name' => $this['pokemon_species']['name'],
            'image' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$this['entry_number']}.png",
        ];
    }
}
