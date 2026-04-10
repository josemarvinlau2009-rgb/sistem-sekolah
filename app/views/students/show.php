        <div class="mt-8 space-y-4">
            <!--Card Header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold ">Detail Siswa</h1>
                <p>Menampilkan detail siswa yang terdaftar</p>
            </div>
            <!--Card Header End-->
            <!--Card Content start-->
            <div class="bg-white shadow rounded-lg p-4">
                <div class="p-4 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">Nama</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="name" id="name" 
                            placeholder="Masukkan nama" readonly>
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">NIS</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="nis" 
                            placeholder="Masukkan NIS" readonly>
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">Kelas</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="kelas" id="kelas" 
                            placeholder="Masukkan Kelas" readonly>
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">No Telepon</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="phone_number" id="phone_number" 
                            placeholder="Masukkan No Telepon" readonly>
                    </div>
                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="py-2 px-4 bg-gray-200 rounded-lg">Kembali</a>                    </div>
                </div>
            </div>
            <!--Card Content End-->
        </div>