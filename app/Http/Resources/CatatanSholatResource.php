<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CatatanSholatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'tanggal' => $this->tanggal,
            'sholat' => $this->jenis_sholat,
            'waktu_masuk' => $this->waktu_masuk2,
            'waktu_adzan' => $this->waktu_adzan2,
        ];
    }
}
