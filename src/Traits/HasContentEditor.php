<?php

namespace Stephenjude\FilamentBlog\Traits;

trait HasContentEditor
{
    public static function getContentEditor(string $field)
    {
        $defaultEditor = config('filament-blog.editor');

        if(method_exists($defaultEditor, 'toolbarButtons')){
            return $defaultEditor::make($field)
                ->label(__('filament-blog::filament-blog.content'))
                ->required()
                ->toolbarButtons(config('filament-blog.toolbar_buttons'))
                ->columnSpan([
                    'sm' => 2,
                ]);
        }else{
            return $defaultEditor::make($field)
                ->label(__('filament-blog::filament-blog.content'))
                ->required()
                ->columnSpan([
                    'sm' => 2,
                ]);
        }
    }
}
