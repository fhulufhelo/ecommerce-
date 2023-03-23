<?php

namespace App\Actions\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CreateNewCategory
{
    /**
     * @throws ValidationException
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'numeric', 'exists:categories,id'],
        ])->validate();

        return Category::create([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '-'),
            'parent_id' => $input['parent_id'],
        ]);
    }
}
