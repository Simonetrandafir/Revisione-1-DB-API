<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContattiResource extends JsonResource
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


    // PROTECTED //
    protected function getCampi()
    {
        return [
            "idContatto" => $this->idContatto,
            "idStato" => $this->idStato,
            "nome" => $this->nome,
            "cognome" => $this->cognome,
            "sesso" => $this->sesso,
            "codFiscale" => $this->codFiscale,
            "partitaIva" => $this->partitaIva,
            "cittadinanza" => $this->cittadinanza,
            "idNazione" => $this->idNazione,
            "citta" => $this->cittaNascita,
            "provincia" => $this->provinciaNascita,
            "dataNascita" => $this->dataNascita,
        ];
    }
}
