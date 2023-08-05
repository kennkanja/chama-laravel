<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContributionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'member'=>$this->member->name,
            'amount'=>$this->amount,
            'week'=>$this->week,
            'day'=>$this->day,
        ];
    }
}
