<x-app>
    <x-slot name="title">Dashboard</x-slot>
    @if ($errors->any())
        <div class="alert alert-error shadow-lg mb-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="font-bold">Peringatan</h3>
                    <div class="text-s">Ada yang salah dengan inputan anda, mohon periksa dan pastika data
                        yang
                        diinput sesuai dengan ketentuan!</div>
                </div>
            </div>
        </div>
    @elseif (session('success'))
        <div class="alert alert-success shadow-lg mb-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <div>
                    <h3 class="font-bold">Pemberitahuan</h3>
                    <div class="text-s">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif
    <!-- The button to open modal -->
    <label for="my-modal-6" class="btn btn-ghost bg-base-200 hover:bg-warning hover:text-base-300 rounded-lg">Tambah
        Data</label>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-6" class="modal-toggle" />
    <div class="modal modal-bottom">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="modal-header">
                <label for="my-modal-6"
                    class="btn btn-sm btn-circle absolute hover:bg-red-600 hover:text-black right-2 top-2">✕</label>

                <div class="alert alert-warning shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="stroke-black flex-shrink-0 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <h3 class="font-bold">Keterangan</h3>
                            <div class="text-s">Masa perpanjang STNK akan dilakukan secara otomatis ke 5
                                tahun ke Depan!</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('licenseCard.create') }}" method="POST">
                @csrf
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
                                    value="{{ old('policeNumber') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('policeNumber')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="nameOfOwner">
                                    <span class="label-text font-bold">Nama Pemilik</span>
                                </label>
                                <input type="text" id="nameOfOwner" name="nameOfOwner"
                                    value="{{ old('nameOfOwner') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('nameOfOwner')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="col-span-full">
                                <label for="address" class="block text-sm font-medium leading-6 ">Alamat</label>
                                <div class="mt-2">
                                    <textarea class="textarea w-full bg-base-300 input-bordered" name="address" placeholder="Type here">{{ old('address') }}</textarea>
                                    @error('address')
                                        <label class="label">
                                            <span class="label-text-alt">{{ $message }}</span>
                                        </label>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="brandAndType">
                                    <span class="label-text font-bold">Merk / Tipe</span>
                                </label>
                                <input type="text" id="brandAndType" name="brandAndType"
                                    value="{{ old('brandAndType') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('brandAndType')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="categoryAndModel">
                                    <span class="label-text font-bold">Jenis / Model</span>
                                </label>
                                <input type="text" id="categoryAndModel" name="categoryAndModel"
                                    value="{{ old('categoryAndModel') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('categoryAndModel')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="manufactureYear">
                                    <span class="label-text font-bold">Tahun Pembuatan</span>
                                </label>
                                <input type="text" id="manufactureYear" name="manufactureYear"
                                    value="{{ old('manufactureYear') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('manufactureYear')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="cylindrerCapacity">
                                    <span class="label-text font-bold">Isi Silinder / Sumber Tenaga</span>
                                </label>
                                <input type="text" id="cylindrerCapacity" name="cylindrerCapacity"
                                    value="{{ old('cylindrerCapacity') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('cylindrerCapacity')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="bodyNumber">
                                    <span class="label-text font-bold">Nomor Rangka</span>
                                </label>
                                <input type="text" id="bodyNumber" name="bodyNumber"
                                    value="{{ old('bodyNumber') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('bodyNumber')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="engineNumber">
                                    <span class="label-text font-bold">Nomor Mesin</span>
                                </label>
                                <input type="text" id="engineNumber" name="engineNumber"
                                    value="{{ old('engineNumber') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('engineNumber')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="color">
                                    <span class="label-text font-bold">Warna Kendaraan</span>
                                </label>
                                <input type="text" id="color" name="color" value="{{ old('color') }}"
                                    placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('color')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="typeFuel">
                                    <span class="label-text font-bold">Bahan Bakar</span>
                                </label>
                                <input type="text" id="typeFuel" name="typeFuel" value="{{ old('typeFuel') }}"
                                    placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('typeFuel')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="licensePlateColor">
                                    <span class="label-text font-bold">Warna Plat Kendaraan</span>
                                </label>
                                <input type="text" id="licensePlateColor" name="licensePlateColor"
                                    value="{{ old('licensePlateColor') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('licensePlateColor')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="dateOfExpire">
                                    <span class="label-text font-bold">Tanggal Akhir STNK</span>
                                </label>
                                <input type="date" id="dateOfExpire" name="dateOfExpire"
                                    value="{{ old('dateOfExpire') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('dateOfExpire')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
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
                                <input type="date" id="payDate" name="payDate" value="{{ $today }}"
                                    placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('payDate')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="payment">
                                    <span class="label-text font-bold">Pembayaran</span>
                                </label>
                                <input type="number" id="payment" name="payment"
                                    value="{{ old('payment') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('payment')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
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
                                        <input type="hidden" name="status" value="0" {{ old('status') == 0 ? 'checked' : '' }} />
                                        <input type="checkbox" class="toggle" name="status" value="1" {{ old('status') == 1 ? 'checked' : '' }} /> <span
                                            class="label-text">Sudah Bayar</span>
                                    </label>
                                </div>
                                @error('status')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="telp">
                                    <span class="label-text font-bold">Nomor Telpon</span>
                                </label>
                                <input type="number" id="telp" name="telp"
                                    value="{{ old('telp') }}" placeholder="Type here"
                                    class="input input-bordered input-md w-full bg-base-300" />
                                @error('telp')
                                    <label class="label">
                                        <span class="label-text-alt">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="col-span-full">
                                <label for="description"
                                    class="block text-sm font-medium leading-6 ">Permohonan</label>
                                <div class="mt-2">
                                    <textarea class="textarea w-full bg-base-300 input-bordered" name="description" value="{{ old('description') }}"
                                        placeholder="Type here"></textarea>
                                    @error('description')
                                        <label class="label">
                                            <span class="label-text-alt">{{ $message }}</span>
                                        </label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3 order-last md:order-first">
                        <label for="my-modal-6"
                            class="btn border-0 btn-block rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 ">Batal</label>
                    </div>
                    <div class="sm:col-span-3">
                        <button
                            class="btn border-0 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold btn-block text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="overflow-x-auto py-4">
        <table class="table table-zebra w-full text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Pemilik</th>
                    <th>Nomor Polisi</th>
                    <th>Merk / Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                    <tr>
                        <th>{{ ++$no }}</th>
                        <th>{{ $item->nameOfOwner }}</th>
                        <th>{{ $item->policeNumber }}</th>
                        <th>{{ $item->brandAndType }}</th>
                        <th>
                            @if ($item->status == 0)
                                <span class="badge badge-md badge-error hover:badge-warning">BELUM
                                    BAYAR</span>
                            @elseif ($item->status == 1)
                                <span class="badge badge-md badge-success hover:badge-primary">SUDAH BAYAR</span>
                            @endif
                        </th>
                        <th>
                            <div class="flex gap-4">
                                <a href="{{ route('licenseCard.show', $item->slug) }}"
                                    class="btn btn-sm hover:btn-warning">edit</a>
                                <form action="{{ Route('licenseCard.destroy', $item->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm hover:btn-error">Hapus</button>
                                </form>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app>
