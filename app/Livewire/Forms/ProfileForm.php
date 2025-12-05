<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class ProfileForm extends Form
{
    use WithFileUploads;

    public ?User $user;

    public $nama;

    public $email;

    public string $password = '';


    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:50'],
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique('users', 'email')->ignore($this->user),
            ],
            'password' => ['nullable'], // optional, minimal 8 karakter
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama tidak boleh kosong.',
            'nama.max' => 'Nama maksimal 50 karakter.',

            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 100 karakter.',
            'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',

            'password.min' => 'Password minimal 8 karakter.',
        ];
    }

    public function update(): bool
    {
        // Validate the form data
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // dd($e->errors()); // semua error yang gagal validasi
        }

        // Prepare updates only for changed fields
        $updates = [];
        if ($this->nama !== $this->user->nama) {
            $updates['nama'] = $this->nama;
        }
        if ($this->email !== $this->user->email) {
            $updates['email'] = $this->email;
        }
        if (! empty($this->password)) {
            $updates['password'] = Hash::make($this->password);
        }

        // if ($this->photo) {
        //     // Delete old photo if exists
        //     if ($this->user->photo) {
        //         Storage::disk('public')->delete($this->user->photo);
        //     }
        //     // Store new photo
        //     $path = $this->photo->store('photos', 'public');
        //     $updates['photo'] = $path;
        // }

        // Perform update only if there are changes
        if (! empty($updates)) {
            $this->user->update($updates);

            return true;
        }

        return false; // No changes made
    }
}
