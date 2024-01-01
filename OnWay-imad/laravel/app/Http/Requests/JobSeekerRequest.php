<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobSeekerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'visibility' => 'required|in:all,recruiter,offer',
            'title' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'day' => 'required|numeric',
            'month' => 'required|numeric',
            'year' => 'required|numeric',
            'experience' => 'required|string',
            'experienceDescription' => 'required|string',
            'educationLevel' => 'required|numeric',
            'educationDescription' => 'required|string',
            'skills' => 'required|string',
            'cv' => 'required|mimes:pdf|max:2048',
            'languages' => 'required|string',
            'linkedinLink' => 'nullable|url',

            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string',
            'phoneNumber' => 'required|numeric',
            'contry' => 'required|string',
        ];
    }
}
