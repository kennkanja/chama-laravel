<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'total'=> $this->contributions->sum('amount'),
            'joined'=>$this->created_at->diffForHumans(),
            'counts'=>$this->contributions_count,
            'contributions'=>ContributionResource::collection($this->contributions)
        ];
    }
}
