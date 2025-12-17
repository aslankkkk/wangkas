<?php

namespace App\Http\Controllers;

use App\Models\CashTransaction;
use Illuminate\Support\Facades\App;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response; // Tambahkan ini

class InvoiceController extends Controller
{
    /**
     * Mengunduh invoice dalam format gambar (PNG).
     * * CATATAN: Metode ini memerlukan konfigurasi Snappy/wkhtmltoimage
     * yang sudah terinstal di sistem. Jika tidak, akan terjadi error.
     */
    public function show($id)
    {
        // 1. Ambil data transaksi/invoice
        $cashTransaction = CashTransaction::findOrFail($id);

        // 2. Load View untuk konversi Gambar (Snappy/wkhtmltoimage)
        $imageGenerator = App::make('snappy.image');

        // Render view Blade ke dalam HTML
        $html = view('invoices.show', compact('cashTransaction'))->render();

        // Konversi HTML ke Gambar PNG
        $image = $imageGenerator->getOutputFromHtml($html);
        
        // 3. Menentukan nama file dengan ekstensi .png
        $fileName = 'Bukti Bayar ' . $cashTransaction->student->name . ' ' . $cashTransaction->id . '.png';

        // 4. Mengembalikan file sebagai download dalam format PNG
        return Response::make($image, 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="'.$fileName.'"'
        ]);
    }
}