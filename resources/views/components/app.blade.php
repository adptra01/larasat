<!doctype html>
<html data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-full">
        <x-nav></x-nav>

        <header class="">
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight">Dashboard</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- The button to open modal -->
                <label for="my-modal-6" class="btn">open modal</label>

                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="my-modal-6" class="modal-toggle" />
                <div class="modal modal-bottom">
                    <div class="modal-box w-11/12 max-w-5xl">
                        <div class="modal-header">
                            <label for="my-modal-6" class="btn btn-sm btn-circle absolute hover:bg-red-600 hover:text-black right-2 top-2">✕</label>

                            <div class="alert alert-warning shadow-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="stroke-black flex-shrink-0 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <h3 class="font-bold">Keterangan</h3>
                                        <div class="text-xs">Masa perpanjang STNK akan dilakukan secara otomatis ke 5
                                            tahun ke Depan!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="space-y-12">
                                <div class="pb-12">
                                    <h2 class="my-3 text-center font-bold leading-7 ">Informasi Kendaraan
                                    </h2>
                                    <hr class="pb-6">
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label class="label" for="policeNumber">
                                                <span class="label-text font-bold">Nomor polisi (BH)</span>
                                            </label>
                                            <input type="text" id="policeNumber" name="policeNumber"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('policeNumber')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="nameOfOwner">
                                                <span class="label-text font-bold">Nama Pemilik</span>
                                            </label>
                                            <input type="text" id="nameOfOwner" name="nameOfOwner"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('nameOfOwner')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="col-span-full">
                                            <label for="address"
                                                class="block text-sm font-medium leading-6 ">Alamat</label>
                                            <div class="mt-2">
                                                <textarea class="textarea w-full bg-base-300" name="address" placeholder="Type here"></textarea>
                                                @error('address')
                                                    <label class="label">
                                                        <span class="label-text-alt">Bottom Left label</span>
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="brandAndType">
                                                <span class="label-text font-bold">Merk / Tipe</span>
                                            </label>
                                            <input type="text" id="brandAndType" name="brandAndType"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('brandAndType')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="categoryAndModel">
                                                <span class="label-text font-bold">Jenis / Model</span>
                                            </label>
                                            <input type="text" id="categoryAndModel" name="categoryAndModel"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('categoryAndModel')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="manufactureYear">
                                                <span class="label-text font-bold">Tahun Pembuatan</span>
                                            </label>
                                            <input type="text" id="manufactureYear" name="manufactureYear"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('manufactureYear')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="cylindrerCapacity">
                                                <span class="label-text font-bold">Isi Silinder / Sumber Tenaga</span>
                                            </label>
                                            <input type="text" id="cylindrerCapacity" name="cylindrerCapacity"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('cylindrerCapacity')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="bodyNumber">
                                                <span class="label-text font-bold">Nomor Rangka</span>
                                            </label>
                                            <input type="text" id="bodyNumber" name="bodyNumber"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('bodyNumber')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="engineNumber">
                                                <span class="label-text font-bold">Nomor Mesin</span>
                                            </label>
                                            <input type="text" id="engineNumber" name="engineNumber"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('engineNumber')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="color">
                                                <span class="label-text font-bold">Warna Kendaraan</span>
                                            </label>
                                            <input type="text" id="color" name="color"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('color')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="typeFuel">
                                                <span class="label-text font-bold">Bahan Bakar</span>
                                            </label>
                                            <input type="text" id="typeFuel" name="typeFuel"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('typeFuel')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="licensePlateColor">
                                                <span class="label-text font-bold">Warna Plat Kendaraan</span>
                                            </label>
                                            <input type="text" id="licensePlateColor" name="licensePlateColor"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('licensePlateColor')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="dateOfExpire">
                                                <span class="label-text font-bold">Tanggal Akhir STNK</span>
                                            </label>
                                            <input type="date" id="dateOfExpire" name="dateOfExpire"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('dateOfExpire')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="space-y-12">
                                <div class="pb-12">
                                    <h2 class="my-3 text-center font-bold leading-7 ">Informasi Tambahan
                                    </h2>
                                    <hr class="pb-6">
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label class="label" for="payDate">
                                                <span class="label-text font-bold">Tanggal Hari ini</span>
                                            </label>
                                            <input type="date" id="payDate" name="payDate"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('payDate')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label class="label" for="payment">
                                                <span class="label-text font-bold">Pembayaran</span>
                                            </label>
                                            <input type="number" id="payment" name="payment"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('payment')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <div class="form-control">
                                                <label class="label" for="status">
                                                    <span class="label-text font-bold">Status</span>
                                                </label>
                                                <label class="label cursor-pointer">
                                                    <span class="label-text">Belum Bayar</span>
                                                    <input type="checkbox" class="toggle" name="status" />
                                                    <span class="label-text">Sudah Bayar</span>
                                                </label>
                                            </div>
                                            @error('status')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-3">
                                            <label class="label" for="telp">
                                                <span class="label-text font-bold">Nomor Telpon</span>
                                            </label>
                                            <input type="number" id="telp" name="telp"
                                                placeholder="Type here"
                                                class="input input-bordered input-md w-full bg-base-300" />
                                            @error('telp')
                                                <label class="label">
                                                    <span class="label-text-alt">Bottom Left label</span>
                                                </label>
                                            @enderror
                                        </div>
                                        <div class="col-span-full">
                                            <label for="description"
                                                class="block text-sm font-medium leading-6 ">Permohonan</label>
                                            <div class="mt-2">
                                                <textarea class="textarea w-full bg-base-300" name="description" placeholder="Type here"></textarea>
                                                @error('description')
                                                    <label class="label">
                                                        <span class="label-text-alt">Bottom Left label</span>
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <label for="my-modal-6"
                                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Batal</label>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="overflow-x-auto py-4">
                    <table class="table table-zebra w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Favorite Color</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>Cy Ganderton</td>
                                <td>Quality Control Specialist</td>
                                <td>Blue</td>
                                <td>Blue</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>




</body>

</html>
