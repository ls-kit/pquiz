<?php

namespace App\Http\Resources\ImageQuestions;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Subcategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class ImageQuestionsResource extends JsonResource
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
        'id'=>$this->id,
        'category_id'=>$this->category_id,
        'category_name'=>Category::find($this->category_id)->category_name,
        'subcategory_id'=>$this->subcategory_id,
        'subcategory_name'=>Subcategory::find($this->subcategory_id)->name, 
        'quiz_id'=>$this->quiz_id,
        'quiz_name'=>Quiz::find($this->quiz_id)->name,   
        'points'=>$this->points,  
        'seconds'=>$this->seconds,  
        'hint'=>$this->hint,  
        'true_answer'=>$this->true_answer,  
        'false1'=>$this->false1,  
        'false2'=>$this->false2,  
        'false3'=>$this->false3,  
        'question_image_url'=>URL::to('uploads/questions/'.$this->question_image_url),  
        'premium_or_not'=>$this->premium_or_not,   
        'created_at'=>$this->created_at->format('jS F Y'),
        ];
    }
}
