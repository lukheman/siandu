<div>
    <h1>Data Ibu Hamil</h1>


<!-- Modal Add Form -->
<div class="modal fade" id="modal-add" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah IbuHamil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <div class="modal-body">

<div class="form-group mb-3">
    <label for="nama">Nama</label>
    <input wire:model="form.nama" type="text" class="form-control" id="nama">
    @error('form.nama') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="umur">Umur</label>
    <input wire:model="form.umur" type="number" class="form-control" id="umur">
    @error('form.umur') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="alamat">Alamat</label>
    <input wire:model="form.alamat" type="text" class="form-control" id="alamat">
    @error('form.alamat') <small class="text-danger">{{ $message }}</small> @enderror
</div>
        </div>

            <div class="modal-footer">
                <button type="button" wire:click="save" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Form -->
<div class="modal fade" id="modal-detail" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail IbuHamil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                  <fieldset disabled>
<div class="form-group mb-3">
    <label for="nama">Nama</label>
    <input wire:model="form.nama" type="text" class="form-control" id="nama">
    @error('form.nama') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="umur">Umur</label>
    <input wire:model="form.umur" type="number" class="form-control" id="umur">
    @error('form.umur') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="alamat">Alamat</label>
    <input wire:model="form.alamat" type="text" class="form-control" id="alamat">
    @error('form.alamat') <small class="text-danger">{{ $message }}</small> @enderror
</div>
  </fieldset>
            </div>

        </div>
    </div>
</div>

<!-- Modal Detail Form -->
<div class="modal fade" id="modal-edit" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perbarui IbuHamil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <div class="modal-body">

<div class="form-group mb-3">
    <label for="nama">Nama</label>
    <input wire:model="form.nama" type="text" class="form-control" id="nama">
    @error('form.nama') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="umur">Umur</label>
    <input wire:model="form.umur" type="number" class="form-control" id="umur">
    @error('form.umur') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="form-group mb-3">
    <label for="alamat">Alamat</label>
    <input wire:model="form.alamat" type="text" class="form-control" id="alamat">
    @error('form.alamat') <small class="text-danger">{{ $message }}</small> @enderror
</div>
        </div>

            <div class="modal-footer">
                <button type="button" wire:click="update" class="btn btn-warning">
                    Perbarui
                </button>
            </div>

        </div>
    </div>
</div>

    <div class="card">

        <div class="card-header">

            <div class="row">
                <div class="col-6">
                    <button class="btn btn-sm btn-primary" wire:click="add">Tambah IbuHamil</button>
                </div>
                <div class="col-6">

                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Cari IbuHamil...">
                </div>
                </div>
            </div>

        </div>


        <div class="card-body">

<table class="table table-bordered align-middle">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th class="text-end">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($this->ibuHamilList as $item)
        <tr>
            <th>{{ $loop->index + $this->ibuHamilList->firstItem() }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->umur }}</td>
            <td>{{ $item->alamat }}</td>

            <td class="text-end">
                <button class="btn btn-sm btn-info" wire:click="detail({{ $item->id }})">
                    <i class="bi bi-eye"></i> Detail
                </button>

                <button class="btn btn-sm btn-warning" wire:click="edit({{ $item->id }})">
                    <i class="bi bi-pencil"></i> Edit
                </button>

                <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center text-muted py-3">
                <em>Tidak ada data tersedia.</em>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
        </div>

        <div class="card-footer">

    {{ $this->ibuHamilList->links()}}
        </div>


    </div>
</div>
