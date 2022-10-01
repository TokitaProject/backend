1. tb user =>   1. admin(pemilik toko) ->   1. admin bisa menambahkan produk/mengubah produk
                                            2. bisa melihat semua kegiatan yang ada di tokonya
                                            3. ada halaman home untuk detail toko si admin
                                            4. admin bisa membatalkan pesanan dengan validasi
                                            5. kegiatan user bisa dilihat


                2. User(pembeli) ------->   1. semua user yang sudah register/login bisa mendaftar admin toko
                                            2. bisa melihat semua kegiatan yang ada di tokonya
                                            3. hanya bisa melihat semua produk sampai check out tanpa merubah data
                                            4. fitur wishlist/suka
                                            5. fitur keranjang

2. tb produk(barang) => 1. Nama barang
                        2. Stok 
                        3. Harga
                        4. kategori
                        5. deskripsi
                        6. foto
                        7. rating
                        8. user id

3. tb keranjang ------> 1. uid
                        2. id product
                        3. implementasi crd (create, read, delete)



system arsitect with mvp "https://www.geeksforgeeks.org/mvp-model-view-presenter-architecture-pattern-in-android-with-example/"