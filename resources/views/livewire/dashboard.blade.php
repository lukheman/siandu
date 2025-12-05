@php
  use App\Enums\Role;

  $role = auth()->user()->role;
@endphp

<div class="row">
    @if ($role === Role::ADMIN)

    <!-- Total Balita -->
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldShow"></i> <!-- Ikon balita -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Balita</h6>
                        <h6 class="font-extrabold mb-0">{{ $totalBalita }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Ibu Hamil -->
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                            <i class="iconly-boldHeart"></i> <!-- Ikon ibu hamil -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Ibu Hamil</h6>
                        <h6 class="font-extrabold mb-0">{{ $totalIbuHamil }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($role === Role::KADER)

    <!-- Total Pemasukan -->
    <div class="col-12">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldWallet"></i> <!-- Ikon pemasukan -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Jumlah Pemasukan</h6>
                        <h6 class="font-extrabold mb-0">{{ $jumlahPemasukan }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
