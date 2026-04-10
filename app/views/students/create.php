        <div class="mt-8 space-y-4">
            <!--Card Header-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold ">Tambah Siswa</h1>
                <p>Menambahkan siswa ke dalam sistem</p>
            </div>
            <!--Card Header End-->
            <!--Card Content-->
            <div class="bg-white shadow rounded-lg">
                <form action="" class="p-4 grid grid-cols-2 gap-4">
                    <div class="">
                        <label class="block text-sm font-bold" for="name">Nama</label>
                        <input type="text" name="name" id="name" placeholder="Masukkan nama" class="w-full border rounded-lg py-2 px-4">
                    </div>
                    <div class="">
                        <label class="block text-sm font-bold" for="nis">NIS</label>
                        <input type="text" name="nis" id="nis" placeholder="Masukkan NIS" class="w-full border rounded-lg py-2 px-4">
                    </div>
                    <div class="">
                        <label class="block text-sm font-bold" for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas" class="w-full border rounded-lg py-2 px-4">
                    </div>
                    <div class="">
                        <label class="block text-sm font-bold" for="phone_number">No Telepon</label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Masukkan no telepon" class="w-full border rounded-lg py-2 px-4">
                    </div>
                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                        <button type="submit" class="py-2 px-4 bg-blue-500 rounded-lg text-white">Simpan</button>
                    </div>
                </form>
            </div>
            <!--Card Content End-->
        </div>