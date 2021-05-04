<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class DonationListResource extends JsonResource
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
            'id' => $this->id,
            'desicion_date' => Carbon::parse($this->desicion_date)->format('Y/m/d'),
            'desicion_amount' => $this->desicion_amount,
            'donation_amount' => $this->donation_amount,
            'donation_group'  => $this->donation_amount == '' ? "-" : $this->donation_group,
            'donation_individual' => $this->donation_individual == '' ? "-" : $this->donation_individual,
            'created_id',
            'cretaed_name'  => $this->getCreateUser->name ?? "-",
            'updated_id'    => $this->getUpdateUser->name ?? "-",
            'published_flg' => $this->published_flg,
            'published_at'  => Carbon::parse($this->published_at)->format('Y/m/d H:i'),
            'note'          => $this->note
        ];
    }
}
