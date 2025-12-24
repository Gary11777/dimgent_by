<?php

namespace App\Http\Requests;

use Coderflex\LaravelTurnstile\Rules\TurnstileCheck;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'cf-turnstile-response' => ['required', new TurnstileCheck()],
        ];
    }

    public function messages(): array
    {
        return [
            'cf-turnstile-response.required' => 'Please complete the security check.',
            'cf-turnstile-response.*' => 'Security verification failed. Please try again.',
        ];
    }

    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated($key, $default);

        // Sanitize inputs
        $validated['name'] = strip_tags(trim($validated['name']));
        $validated['email'] = filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL);
        $validated['company'] = isset($validated['company']) ? strip_tags(trim($validated['company'])) : null;
        $validated['subject'] = strip_tags(trim($validated['subject']));
        $validated['message'] = strip_tags(trim($validated['message']));

        // Remove turnstile response from validated data
        unset($validated['cf-turnstile-response']);

        return $validated;
    }
}
