<?php

use Illuminate\Support\Facades\Route;
// Import Livewire Components (PENTING: Jangan dihapus agar Admin jalan)
use App\Livewire\Authentication\Login;
use App\Livewire\Authentication\Logout;
use App\Livewire\Dashboard;
use App\Livewire\SchoolClasses\SchoolClassTable;
use App\Livewire\SchoolMajors\SchoolMajorTable;
use App\Livewire\Students\StudentTable;
use App\Livewire\Administrators\AdministratorTable;
use App\Livewire\UpdateProfile;
use App\Livewire\CashTransactions\CashTransactionCurrentWeekTable;
use App\Livewire\CashTransactions\FilterCashTransaction;
use App\Livewire\PaymentCategories\PaymentCategoryIndex;
use App\Http\Controllers\InvoiceController;

// =========================================================
// 1. HALAMAN PUBLIK (Halaman Depan)
// =========================================================

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // <-- Nama ini wajib ada untuk logo

// Tentang Sekolah (Profil / Galeri)
// Nama rute ini: 'tentang-sekolah.index' (Sesuai pesan error Anda)
Route::get('/tentang-sekolah', function () {
    return view('tentang-sekolah.index'); 
})->name('tentang-sekolah.index'); 


// =========================================================
// 2. HALAMAN LOGIN & DASHBOARD
// =========================================================

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', Logout::class)->name('logout');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Menu Admin
    Route::get('/kelas', SchoolClassTable::class)->name('school-classes.index');
    Route::get('/jurusan', SchoolMajorTable::class)->name('school-majors.index');
    Route::get('/kategori-program', PaymentCategoryIndex::class)->name('payment-categories.index');
    Route::get('/pengguna', AdministratorTable::class)->name('administrators.index');
    Route::get('/profil-user', UpdateProfile::class)->name('update-profiles.index');
    Route::get('/pelajar', StudentTable::class)->name('students.index');
    Route::get('/kas', CashTransactionCurrentWeekTable::class)->name('cash-transactions.index');
    Route::get('/kas/filter', FilterCashTransaction::class)->name('cash-transactions.filter');
    Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('invoice');
});