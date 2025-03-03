<?php

namespace App\Http\Requests;

use App\Models\Job;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'salary' => 'required|numeric|min:5000',
                'description' => 'required|string',
                'experience' => 'required|in:' .implode(',', Job::$experience),
                'category' => 'required|in:' .implode(',', Job::$category)
        ];
    }
}
