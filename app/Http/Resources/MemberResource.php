<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $member_type = config('constants.member_type');
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role'  => $this->role,
            'member_type' => isset($member_type[$this->role]) ? $member_type[$this->role] : "-",
            'status' => $this->status,
            'created_at' => Carbon::parse($this->created_at)->format('Y/m/d')
        ];
    }
}
