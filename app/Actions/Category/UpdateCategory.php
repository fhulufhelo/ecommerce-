<?php

namespace App\Actions\Category;

use App\Models\Category;;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UpdateCategory
{
    /**
     * @throws ValidationException
     */
    public function update(array $input, Category $category): bool
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255',Rule::unique('categories')->ignore($category->title)],
            'parent_id' => ['nullable', 'numeric', 'exists:categories,id'],
        ])->validate();

        return $category->update([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '-'),
            'parent_id' => $input['parent_id'],
        ]);

    }
}
