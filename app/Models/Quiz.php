<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_name', 'quiz_image', 'quiz_type', 'quiz_category_id', 'description'];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_quizzes');
    }

    public function category()
    {
        return $this->belongsTo(QuizCategory::class, 'quiz_category_id');
    }


    public static function getQuizzes($quizCategoryId, $user)
    {

        if ($user->hasRole(GUEST)) {
            return self::with('category')
                ->where('quiz_type', PRE_TEST)
                ->whereHas('category', function ($query) use ($quizCategoryId) {
                    $query->where('id', $quizCategoryId);
                })
                ->get();
        }

        return self::with('category')
                ->whereHas('category', function ($query) use ($quizCategoryId) {
                    $query->where('id', $quizCategoryId);
                })
                ->get();
    }

    

}
