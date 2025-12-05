<?php

namespace App\Livewire\Forms;

use App\Models\Balita;
use Illuminate\Validation\Rule;
use Livewire\Form;

class BalitaForm extends Form
{
    public ?Balita $balita = null;

    // Field
    public $nama;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $nama_ibu;
    public $alamat;

    protected function rules(): array
    {
        return [
            'nama'           => ['required', 'string', 'max:255'],
            'tgl_lahir'      => ['required', 'date'],
            'jenis_kelamin'  => ['required', Rule::in(['L', 'P'])],
            'nama_ibu'       => ['required', 'string', 'max:255'],
            'alamat'         => ['nullable', 'string'],
        ];
    }

    protected function messages(): array
    {
        return [
            'nama.required'          => 'Nama balita wajib diisi.',
            'tgl_lahir.required'     => 'Tanggal lahir wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in'       => 'Jenis kelamin hanya boleh L atau P.',
            'nama_ibu.required'      => 'Nama ibu wajib diisi.',
        ];
    }

    public function store()
    {
        Balita::create($this->validate());
        $this->resetForm();
    }

    public function update()
    {
        $this->balita->update($this->validate());
        $this->resetForm();
    }

    public function delete()
    {
        $this->balita->delete();
        $this->resetForm();
    }

    public function fill($id)
    {
        $this->balita = Balita::find($id);

        $this->nama          = $this->balita->nama;
        $this->tgl_lahir     = $this->balita->tgl_lahir;
        $this->jenis_kelamin = $this->balita->jenis_kelamin;
        $this->nama_ibu      = $this->balita->nama_ibu;
        $this->alamat        = $this->balita->alamat;
    }

    private function resetForm()
    {
        $this->reset([
            'balita',
            'nama',
            'tgl_lahir',
            'jenis_kelamin',
            'nama_ibu',
            'alamat',
        ]);
    }
}
