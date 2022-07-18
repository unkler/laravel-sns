<?php

namespace App\Http\UseCases;

use App\Models\Tag;

class TagUseCase {

    public function getTags($article = null) {

        if ($article === null) {
            $allTagNames = Tag::all()->map(function ($tag) {
                return ['text' => $tag->name];
            });

            return $allTagNames;
        }

        $tagName = $article->tags->map(function ($tag) {
            return ['text' => $tag->name];
        });
        
        return $tagName;

    } 
}