# dietify
Website Penjualan makanan diet

## Tujuan
**Dietify** adalah website yang dirancang untuk membantu pengguna dalam mencari, memilih, dan membeli makanan diet secara online. Sistem ini memungkinkan pelanggan untuk melihat berbagai menu makanan sehat, melakukan pembelian, dan mengelola profil mereka. Admin juga dapat mengelola produk, kategori, pelanggan, dan data penjualan dengan mudah.

## Daftar Fitur & Endpoints

### Pengguna
- `GET /menu` – Menampilkan semua menu makanan diet dan juga filter berdasarkan kategori
- `GET /menu/detail/{id}` – Melihat detail produk
- `POST /menu/like/{id}` – Memberi like pada produk
- `GET /menu/search?q=` – Mencari produk
- `POST /keranjang/add` – Menambahkan produk ke keranjang
- `GET /keranjang` – Melihat isi keranjang
- `DELETE /keranjang/delete/{id}` – Menghapus item dalam keranjang
- `POST /checkout` – Melakukan checkout
- `POST /upload-bukti` – Upload bukti pembayaran
- `GET /pesanan` – Melihat daftar pesanan
- `GET /profil` – Melihat profil
- `PUT /profil/edit` – Mengedit profil
- `PUT /profil/password` – Mengganti password

  ### Admin
- `GET /penjualan` – Melihat data penjualan
- `GET /kategori` – Melihat data kategori
- `POST /kategori` – Menambahkan kategori
- `PUT /kategori/{id}` – Mengedit kategori
- `DELETE /kategori/{id}` – Menghapus kategori
- `GET /kategori/search?q=` – Mencari kategori
- `GET /produk` – Melihat data produk
- `POST /produk` – Menambahkan produk
- `PUT /produk/{id}` – Mengedit produk
- `DELETE /produk/{id}` – Menghapus produk
- `GET /produk/search?q=` – Mencari produk
- `GET /pembelian` – Melihat data pembelian
- `GET /pembelian/search?q=` – Mencari pembelian
- `GET /pembelian/print` – Cetak data pembelian
- `GET /pembelian/detail/{id}` – Melihat detail pembelian
- `PUT /pembelian/setuju/{id}` – Menyetujui pesanan
- `PUT /pembelian/batal/{id}` – Membatalkan pesanan
- `GET /pembelian/print-detail/{id}` – Cetak detail pembelian
- `GET /pelanggan` – Melihat data pelanggan
- `DELETE /pelanggan/{id}` – Menghapus pelanggan
- `GET /pelanggan/search?q=` – Mencari pelanggan

## Anggota Kelompok
1. Putri Wulandari (23050974127)
2. AmandaVelira Prawesti (23050974129)
3. Novi Fitria Wulandari (23050974137)
4. Sarah Hidiana Kafa (23050974139)

## Alamat Website
https://dietify.infinity1674.site
