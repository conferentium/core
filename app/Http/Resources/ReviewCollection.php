<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReviewCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->transform(function($review) {
            return [
                'id' => $review->id,
                'submission' => [
                    'id' => $review->submission->id,
                    'title' => $review->submission->title,
                    'abstract' => $review->submission->abstract,
                    'institute_name' => $review->submission->institute_name,
                ],
                'reviewer_id' => $review->reviewer_id,
                'is_selected' => $review->is_selected,
                'size' => 'image',
                'metadata' => 'metadata',
            ];
        });
    }
}
