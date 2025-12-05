<div>
    <h1>Data Balita</h1>


<!-- Modal Add Form -->
<div class="modal fade" id="modal-add" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Balita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                {{-- Nama --}}
                <div class="form-group mb-3">
                    <label>Nama Balita</label>
                    <input wire:model="form.nama" type="text" class="form-control">
                    @error('form.nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="form-group mb-3">
                    <label>Tanggal Lahir</label>
                    <input wire:model="form.tgl_lahir" type="date" class="form-control">
                    @error('form.tgl_lahir') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div class="form-group mb-3">
                    <label>Jenis Kelamin</label>
                    <select wire:model="form.jenis_kelamin" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    @error('form.jenis_kelamin') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Nama Ibu --}}
                <div class="form-group mb-3">
                    <label>Nama Ibu</label>
                    <input wire:model="form.nama_ibu" type="text" class="form-control">
                    @error('form.nama_ibu') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Alamat --}}
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea wire:model="form.alamat" rows="2" class="form-control"></textarea>
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
                <h5 class="modal-title">Detail Balita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <fieldset disabled>

                    {{-- Nama --}}
                    <div class="form-group mb-3">
                        <label>Nama Balita</label>
                        <input wire:model="form.nama" type="text" class="form-control">
                    </div>

                    {{-- Tanggal Lahir --}}
                    <div class="form-group mb-3">
                        <label>Tanggal Lahir</label>
                        <input wire:model="form.tgl_lahir" type="date" class="form-control">
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label>
                        <input wire:model="form.jenis_kelamin" type="text" class="form-control">
                    </div>

                    {{-- Nama Ibu --}}
                    <div class="form-group mb-3">
                        <label>Nama Ibu</label>
                        <input wire:model="form.nama_ibu" type="text" class="form-control">
                    </div>

                    {{-- Alamat --}}
                    <div class="form-group mb-3">
                        <label>Alamat</label>
                        <textarea wire:model="form.alamat" rows="2" class="form-control"></textarea>
                    </div>

                </fieldset>
            </div>

        </div>
    </div>
</div>

<!-- Modal Edit Form -->
<div class="modal fade" id="modal-edit" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perbarui Balita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                {{-- Nama --}}
                <div class="form-group mb-3">
                    <label>Nama Balita</label>
                    <input wire:model="form.nama" type="text" class="form-control">
                    @error('form.nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="form-group mb-3">
                    <label>Tanggal Lahir</label>
                    <input wire:model="form.tgl_lahir" type="date" class="form-control">
                    @error('form.tgl_lahir') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div class="form-group mb-3">
                    <label>Jenis Kelamin</label>
                    <select wire:model="form.jenis_kelamin" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    @error('form.jenis_kelamin') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Nama Ibu --}}
                <div class="form-group mb-3">
                    <label>Nama Ibu</label>
                    <input wire:model="form.nama_ibu" type="text" class="form-control">
                    @error('form.nama_ibu') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                {{-- Alamat --}}
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea wire:model="form.alamat" rows="2" class="form-control"></textarea>
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
                    <button class="btn btn-sm btn-primary" wire:click="add">Tambah balita</button>
                </div>
                <div class="col-6">

                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Cari balita...">
                </div>
                </div>
            </div>

        </div>


        <div class="card-body">

            <table class="table table-bordered align-middle">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nama Ibu</th>
      <th scope="col">Alamat</th>
      <th class="text-end">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($this->balitaList as $item)
    <tr>
      <th scope="row">{{ $loop->index + $this->balitaList->firstItem() }}</th>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->tgl_lahir }}</td>
      <td>{{ $item->jenis_kelamin_label }}</td>
      <td>{{ $item->nama_ibu }}</td>
      <td>{{ $item->alamat }}</td>
  <td class="text-end">
      <button type="button" class="btn btn-sm btn-info" wire:click="detail({{ $item->id }})">
        <i class="bi bi-eye"></i> Detail
      </button>
      <button type="button" class="btn btn-sm btn-warning" wire:click="edit({{ $item->id }})">
        <i class="bi bi-pencil"></i> Edit
      </button>
      <button type="button" class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})">
        <i class="bi bi-trash"></i> Hapus
      </button>
  </td>
</tr>
@empty
<tr>
    <td colspan="2" class="text-center text-muted py-3">
        <em>Tidak ada data tersedia.</em>
    </td>
</tr>
@endforelse
  </tbody>
</table>
        </div>

        <div class="card-footer">

    {{ $this->balitaList->links()}}
        </div>


    </div>
</div>
