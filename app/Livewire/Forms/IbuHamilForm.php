<?php

namespace App\Livewire\Forms;

use App\Models\IbuHamil;
use Illuminate\Validation\Rule;
use Livewire\Form;

class IbuHamilForm extends Form
{
    public ?IbuHamil $ibuHamil = null;

    public string $nama = '';
    public string $umur = '';
    public string $alamat = '';

    protected function rules(): array
    {
        return [
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
        ];
    }

    protected function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'umur.required' => 'Umur wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
        ];
    }

    public function store()
    {
        $ibuHamil = IbuHamil::query()->create($this->validate());
        $this->reset();
    }

    public function update()
    {
        $this->ibuHamil->update($this->validate());

        $this->reset();
    }

    public function delete()
    {
        $this->ibuHamil->delete();
        $this->reset();
    }

    public function fill($id) {

        $this->ibuHamil = IbuHamil::query()->find($id);
                $this->nama = $this->ibuHamil->nama;
        $this->umur = $this->ibuHamil->umur;
        $this->alamat = $this->ibuHamil->alamat;

    }
}
