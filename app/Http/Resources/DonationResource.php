<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $donation_type = config('constants.donation_type');
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email' => $this->email,
            'donation_type' => isset($donation_type[$this->type]) ? $donation_type[$this->type] : "-",
            'confirm_flg' => $this->confirm_flg,
            'confirm_name' => $this->getUser->name ?? "-",
        ];
    }
}
