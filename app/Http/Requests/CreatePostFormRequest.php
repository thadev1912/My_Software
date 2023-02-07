<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'ma_post'=>'required|max:100',
           'title_post'=>'required|max:100',
           'content_post'=>'required|max:100',
           'danhmuc_post'=>'required|max:100',
        ];
    }
    public function messages()
       {
        return [
         'ma_post.required'=>'Mã bài viết không được bỏ trống',
         'title_post.required'=>'Tiêu đề bài viết không được bỏ trống',
         'content_post.required'=>'Nội dung bài viết không được bỏ trống',
         'danhmuc_post.required'=>'Danh mục bài viết không được bỏ trống',
        ];
       }
}
