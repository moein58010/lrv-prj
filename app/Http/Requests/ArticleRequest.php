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
        return [
            // reqired =  حتما باید ثبت شود
            'title' => 'required|min:5|max:50',
            'body' => 'required',
            'categories' => 'required',
            // تصویر می تواند مقدارش خالی باشد ولی اگه فرستاده شد باید حتما از نوع تصویر باشد و حداکثر حجمش 5120 کیلوبایت یا همان 5 مگابابت باشد
            'image' => 'nullable|image|max:5120',
        ];
    }
}
