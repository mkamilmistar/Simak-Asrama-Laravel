<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PoinSiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $poin = $this->poin;
        if ($this->jenis === 'keburukan')
            $poin *= -1;
        return [
            'id' => $this->id,
            'poin' => $poin,
            'jenis' => $this->jenis,
            'keterangan' => $this->keterangan
        ];
    }
}
