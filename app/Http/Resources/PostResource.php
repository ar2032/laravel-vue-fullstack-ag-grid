<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            '_id'=>$this->_id,

            'STATUS'=> $this->STATUS,

            'DDC_CODE'=> $this->DDC_CODE,

            'TRADE_NAME'=> $this->TRADE_NAME,

            'SCIENTIFIC_CODE'=> $this->SCIENTIFIC_CODE,

            'SCIENTIFIC_NAME'=> $this->SCIENTIFIC_NAME,

            'INGREDIENT_STRENGTH'=> $this->INGREDIENT_STRENGTH,

            'DOSAGE_FORM_PACKAGE'=> $this->DOSAGE_FORM_PACKAGE,

            'ROUTE_OF_ADMIN'=> $this->ROUTE_OF_ADMIN,
            'PACKAGE_PRICE'=> $this->PACKAGE_PRICE,
            'GRANULAR_UNIT'=> $this->GRANULAR_UNIT,

            'MANUFACTURER'=> $this->MANUFACTURER,

            'REGISTERED_OWNER'=> $this->REGISTERED_OWNER,

            'UPDATED_DATE'=> $this->UPDATED_DATE,

            'SOURCE'=> $this->SOURCE
        ];
    }
}
