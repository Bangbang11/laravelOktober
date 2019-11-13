<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->article;
        return [
            'title' => 'required|unique:articles,title|max:255',
            'content' => 'required|unique:articles,content|min:50',
            'author' => 'required',
            'article_image' => 'required|mimes:jpeg,jpg,png|max:2048'
        ];
    }

    // untuk memunculkan pesan kesalahan
    public function messages(){
        return [
            'title.required' => 'Title is Required, at least fill a character',
            'title.unique' => 'Title must unique, take another title',
            'title.max' => 'Title is Maximum 255 character',
            'content.required' => 'Content is Required, at least fill a character',
            'content.unique' => 'Content must unique, take another content',
            'content.min' => 'Content is Minimum 50 Character'
        ];
    }
}
