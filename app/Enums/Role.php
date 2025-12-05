<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'Admin';
    case KADER = 'Kader';

    public function getLabel(): ?string
    {
        return $this->value;
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::ADMIN => 'primary',
            self::KADER => 'success',
            default => 'secondary'
        };
    }

    public static function values(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }

    /**
     * getOptions: Role yang bisa dipilih di form registrasi.
     * Misal: admin mungkin tidak boleh mendaftar sendiri.
     */
    public static function getOptions(): array
    {
        return array_map(
            fn ($case) => $case->value,
            self::cases()
        );
    }

    /**
     * senders: role yang boleh melakukan pencatatan transaksi.
     * Kamu bebas nanti ubah sesuai logic aplikasi.
     */
    public static function senders(): array
    {
        return [
            self::ADMIN->value,
            self::KADER->value,
        ];
    }
}
