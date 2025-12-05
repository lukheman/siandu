<!-- Login Section - SIANDU (Sistem Informasi Pelayanan Posyandu) -->
<section class="login-container">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-7 col-lg-5 col-xl-4">

                <!-- Card Login Modern -->
                <div class="card border-0 shadow-lg animate-fadeIn" style="border-radius: 28px; overflow: hidden;">

                    <!-- Header Gradient dengan tema Posyandu -->
                    <div class="text-center py-5 px-4 position-relative overflow-hidden"
                         style="background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white;">
                        <div class="position-absolute top-0 end-0 opacity-10">
                            <i class="fas fa-heartbeat fa-5x"></i>
                        </div>
                        <div class="position-relative">
                            <div class="mb-3">
                                <i class="fas fa-baby fa-3x mb-3"></i>
                            </div>
                            <h1 class="h3 fw-bold mb-1">SIANDU</h1>
                            <p class="mb-0 opacity-90 fw-medium">Sistem Informasi Pelayanan Posyandu</p>
                        </div>
                    </div>

                    <!-- Body Card -->
                    <div class="card-body p-5 pt-4">

                        <h2 class="text-center mb-5 fw-semibold" style="color: #1e1b4b;">
                            Selamat Datang
                        </h2>

                        <x-flash-message />

                        <form wire:submit="submit">
                            <!-- Username / Email -->
                            <div class="mb-4">
                                <label for="username" class="form-label fw-medium text-dark"> Email</label>
                                <div class="input-group" style="border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(79, 70, 229, 0.15);">
                                    <span class="input-group-text bg-white border-0" style="color: #7c3aed;">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input
                                        wire:model="email"
                                        type="text"
                                        class="form-control form-control-lg border-0"
                                        id="username"
                                        placeholder="masukkan email"
                                        style="box-shadow: none !important; font-size: 14px;"
                                        required>
                                </div>
                                @error('email')
                                    <small class="text-danger mt-1 d-block ps-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label fw-medium text-dark">Kata Sandi</label>
                                <div class="input-group" style="border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(79, 70, 229, 0.15);">
                                    <span class="input-group-text bg-white border-0" style="color: #7c3aed;">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input
                                        wire:model="password"
                                        type="password"
                                        class="form-control form-control-lg border-0"
                                        id="password"
                                        placeholder="masukkan kata sandi"
                                        style="box-shadow: none !important; font-size: 14px;"
                                        required>
                                </div>
                                @error('password')
                                    <small class="text-danger mt-1 d-block ps-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Tombol Login -->
                            <div class="d-grid mt-5">
                                <button
                                    type="submit"
                                    class="btn btn-lg fw-semibold shadow-sm"
                                    style="
                                        background: linear-gradient(135deg, #4f46e5, #7c3aed);
                                        border: none;
                                        border-radius: 50px;
                                        height: 58px;
                                        color: white;
                                    ">
                                    <span wire:loading.remove wire:target="submit">
                                        Masuk ke SIANDU
                                    </span>
                                    <span wire:loading wire:target="submit">
                                        <i class="fas fa-spinner fa-spin me-2"></i> Sedang masuk...
                                    </span>
                                </button>
                            </div>
                        </form>

                        <!-- Optional: Link lupa password atau register (uncomment jika perlu) -->
                        <!-- <div class="text-center mt-4">
                            <small class="text-muted">
                                Lupa kata sandi?
                                <a href="#" class="fw-semibold text-decoration-none" style="color: #7c3aed;">Reset di sini</a>
                            </small>
                        </div> -->
                    </div>
                </div>

                <!-- Footer kecil di bawah card -->
                <div class="text-center mt-4">
                    <small class="text-muted">
                        © 2025 SIANDU — Sistem Informasi Pelayanan Posyandu
                    </small>
                </div>
            </div>
        </div>
    </div>
</section>
