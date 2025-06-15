<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ListProduk;

class ListProdukSeeder extends Seeder
{
    public function run()
    {
        $produk = [
            [
                'nama' => 'Kaos Polos Hitam',
                'harga' => 75000,
                'deskripsi' => 'Kaos polos warna hitam bahan cotton combed 30s, nyaman dipakai sehari-hari.'
            ],
            [
                'nama' => 'Celana Jeans Pria',
                'harga' => 150000,
                'deskripsi' => 'Celana jeans slim fit untuk pria dengan warna biru navy yang elegan.'
            ],
            [
                'nama' => 'Jaket Hoodie Zipper',
                'harga' => 180000,
                'deskripsi' => 'Jaket hoodie dengan resleting full, bahan fleece tebal cocok untuk cuaca dingin.'
            ],
            [
                'nama' => 'Sepatu Sneakers Putih',
                'harga' => 250000,
                'deskripsi' => 'Sneakers putih klasik dengan sol empuk dan desain minimalis.'
            ],
            [
                'nama' => 'Jam Tangan Analog',
                'harga' => 120000,
                'deskripsi' => 'Jam tangan analog dengan tali kulit dan fitur tahan air.'
            ],
            [
                'nama' => 'Tas Ransel Laptop',
                'harga' => 130000,
                'deskripsi' => 'Tas ransel multifungsi muat laptop 15 inch dengan banyak kompartemen.'
            ],
            [
                'nama' => 'Topi Snapback Hitam',
                'harga' => 50000,
                'deskripsi' => 'Topi snapback warna hitam dengan desain urban kekinian.'
            ],
            [
                'nama' => 'Kacamata Anti Radiasi',
                'harga' => 60000,
                'deskripsi' => 'Kacamata lensa bening untuk melindungi mata dari radiasi layar.'
            ],
            [
                'nama' => 'Kemeja Flanel Kotak',
                'harga' => 110000,
                'deskripsi' => 'Kemeja flanel dengan motif kotak-kotak klasik dan bahan halus.'
            ],
            [
                'nama' => 'Dompet Kulit Pria',
                'harga' => 90000,
                'deskripsi' => 'Dompet pria berbahan kulit asli, dilengkapi slot kartu dan foto.'
            ]
        ];

        foreach ($produk as $item) {
            ListProduk::create($item);
        }
    }
} 