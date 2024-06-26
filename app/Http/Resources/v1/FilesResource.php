<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->getCampi();
    }
    protected function getCampi(){
        return [
            'idFile'=>$this->idFile,
            'record_id'=>$this->record_id,
            'record_tipo'=>$this->record_tipo,
            'tipo'=>$this->tipo,
            'nome'=>$this->nome,
            'size'=>$this->size,
            'posizione'=>$this->posizione,
            'ext'=>$this->ext,
            'descrizione'=>$this->descrizione,
            'formato'=>$this->formato,
        ];
    }
}
