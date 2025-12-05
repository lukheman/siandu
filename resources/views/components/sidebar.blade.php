@php
    use App\Enums\Role;
    $user = auth()->user();
    $role = $user->role;
@endphp

<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="">SIANDU</a>
                </div>
                <!-- theme toggle -->
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">

                <div class="d-flex align-items-center">
                    <div class="avatar avatar-md">
                        <img src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('./assets/compiled/jpg/2.jpg') }}">
                    </div>
                    <p class="font-bold ms-3 mb-0">{{ $user->nama }} - {{ $role }}</p>
                </div>

                <hr>


                <li class="sidebar-title">Navigasi Utama</li>

                {{-- Dashboard --}}
                <x-nav-link icon="bi-house-door"
                    href="{{ route('dashboard')}}"
                    :active="request()->routeIs('dashboard')">
                    Beranda
                </x-nav-link>

                {{-- Balita --}}
                <x-nav-link icon="bi-people"
                    href="{{ route('balita-table')}}"
                    :active="request()->routeIs('balita-table')">
                    Balita
                </x-nav-link>

                <x-nav-link icon="bi-gender-female"
                    href="{{ route('ibu-hamil-table')}}"
                    :active="request()->routeIs('ibu-hamil-table')">
                    Ibu Hamil
                </x-nav-link>

                <li class="sidebar-title">Akun</li>

                {{-- Logout --}}
                <x-nav-link icon="bi-box-arrow-right"
                    href="{{ route('logout') }}">
                    Keluar
                </x-nav-link>

                {{-- Profil --}}
                <x-nav-link icon="bi-person-circle"
                    href="{{ route('profile')}}"
                    :active="request()->routeIs('profile')">
                    Profil
                </x-nav-link>

            </ul>
        </div>
    </div>
</div>
