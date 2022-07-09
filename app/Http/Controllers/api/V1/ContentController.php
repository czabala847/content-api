<?php

namespace App\Http\Controllers\api\V1;

use App\Category;
use App\Content;
use App\ContentTag;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{

    public function index()
    {
        $contents =  Content::all();
        return $this->formatResponse($contents);
    }

    private function formatResponse($contents)
    {
        $contentsResponse = array();

        if ($contents) {
            foreach ($contents as $contentItem) {
                $category = Category::find($contentItem->category_id);
                $contentItem["category"] = $category;
                $tags = ContentTag::join('tags', 'content_tags.id', '=', 'tags.id')
                    ->where('content_id', $contentItem->id)
                    ->select('tags.name')
                    ->get();

                $tagsName = array();

                foreach ($tags as $tag) {
                    $tagsName[] = $tag->name;
                }

                $contentItem["tags"] = $tagsName;
                $contentsResponse[] = $contentItem;
            }

            return $contentsResponse;
        }

        return [];
    }

    public function show(Content $content)
    {
        $content = Content::find($content);
        $response = $this->formatResponse(($content));
        return $response;
    }

    public function byCategory(Category $category)
    {
        $contents = Content::where('category_id', $category->id)->get();
        $response = $this->formatResponse($contents);
        return $response;
    }
}
