<?php

namespace App\Livewire\Table;

use App\Models\IbuHamil;
use App\Livewire\Forms\IbuHamilForm;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithModal;
use App\Traits\WithNotify;
use Livewire\Attributes\On;

class IbuHamilTable extends Component
{

    use WithPagination;
    use WithModal;
    use WithNotify;

    public string $search = '';

    public IbuHamilForm $form;

    #[Computed]
    public function ibuHamilList()
    {
    return IbuHamil::query()
        ->when($this->search, function($query) {
           $query->whereAny(['nama', 'umur', 'alamat', 'hpht', 'hpl'], 'like', '%' . $this->search . '%');
        })
        ->paginate(10);
    }

    public function add()
    {
        $this->form->reset();
        $this->openModal('modal-add');
    }

    public function save()
    {

        $this->form->store();
        $this->notifySuccess('IbuHamil berhasil ditambahkan!');

        $this->closeModal('modal-add');
        $this->form->reset();

    }

    public function detail($id) {

        $this->form->fill($id);
        $this->openModal('modal-detail');

    }

    public function edit($id) {

        $this->form->fill($id);
        $this->openModal('modal-edit');

    }

    public function update() {
        $this->form->update();

        $this->notifySuccess('IbuHamil berhasil diperbarui!');
        $this->closeModal('modal-edit');

    }

    public function delete($id)
    {
        $this->form->fill($id);
        $this->dispatch('deleteConfirmation', message: 'Yakin untuk menghapus data IbuHamil?');
    }

    #[On('deleteConfirmed')]
    public function deleteConfirmed()
    {
        $this->form->delete();
        $this->notifySuccess('IbuHamil berhasil dihapus!');
    }

    public function render()
    {
        return view('livewire.table.ibu-hamil-table');
    }
}
