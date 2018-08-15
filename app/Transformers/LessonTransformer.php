<?php

namespace App\Transformers;

class LessonTransformer extends Transformer
{
    public function transform(array $lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (bool) $lesson['is_active']
        ];
    }
}