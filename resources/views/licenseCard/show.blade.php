<x-app>
    <x-slot name="title">Show Page</x-slot>

    <div class="card">
        <div class="card-body bg-base-300 rounded-lg">
            @if ($errors->any())
                <div class="alert alert-error shadow-lg mb-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="stroke-current flex-shrink-0 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <div>
                            <h3 class="font-bold">Pemberitahuan</h3>
                            <div class="text-s">Ada yang salah dengan pengeditan data, perhatikan ketentuan dan pastikan
                                data yang diedit sudah benar!</div>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning shadow-lg mb-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="stroke-current flex-shrink-0 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <div>
                            <h3 class="font-bold">Pemberitahuan</h3>
                            <div class="text-s">Data yang telah diinputkan secara otomatis memperpanjang masa akhir STNK
                                selama 1 tahun kedepan!</div>
                        </div>
                    </div>
                </div>
            @endif
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
                            <input type="text" id="policeNumber" name="policeNumber" value="{{ $key->policeNumber }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                            <input type="text" id="nameOfOwner" name="nameOfOwner" value="{{ $key->nameOfOwner }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
                            @error('nameOfOwner')
                                <label class="label">
                                    <span class="label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="address" class="block text-sm font-medium leading-6 ">Alamat</label>
                            <div class="mt-2">
                                <textarea class="textarea w-full bg-base-100 input-bordered" name="address" placeholder="Type here">{{ $key->address }}</textarea>
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
                            <input type="text" id="brandAndType" name="brandAndType" value="{{ $key->brandAndType }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->categoryAndModel }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->manufactureYear }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->cylindrerCapacity }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
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
                            <input type="text" id="bodyNumber" name="bodyNumber" value="{{ $key->bodyNumber }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->engineNumber }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
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
                            <input type="text" id="color" name="color" value="{{ $key->color }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                            <input type="text" id="typeFuel" name="typeFuel" value="{{ $key->typeFuel }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->licensePlateColor }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
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
                                value="{{ $key->dateOfExpire }}" placeholder="Type here"
                                class="input input-bordered input-md w-full bg-base-100" />
                            @error('dateOfExpire')
                                <label class="label">
                                    <span class="label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="sm:col-span-3">
                            <label class="label" for="extraTime">
                                <span class="label-text font-bold">Masa berlaku s/d</span>
                            </label>
                            <input type="date" id="extraTime" name="extraTime" value="{{ $key->extraTime }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
                            @error('extraTime')
                                <label class="label">
                                    <span class="label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="sm:col-span-3">
                            <label class="label" for="dateOfExpire">
                                <span class="label-text font-bold">Masa Berlaku s/d</span>
                            </label>
                            <div class="w-full">Masa berlaku telah diperpanjang secara otomatis sampai dengan <span class="font-semibold text-warning hover:text-red-500">{{ Carbon\carbon::parse($key->extraTime)->format('l, d F Y') }}</span></div>
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
                                <span class="label-text font-bold">Tanggal Data Diinput</span>
                            </label>
                            <input type="date" id="payDate" name="payDate" value="{{ $key->payDate }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                            <input type="number" id="payment" name="payment" value="{{ $key->payment }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
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
                                    <input type="hidden" name="status" value="0" />
                                    <input type="checkbox" class="toggle" name="status" value="1" /> <span
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
                            <input type="number" id="telp" name="telp" value="{{ $key->telp }}"
                                placeholder="Type here" class="input input-bordered input-md w-full bg-base-100" />
                            @error('telp')
                                <label class="label">
                                    <span class="label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 ">Permohonan</label>
                            <div class="mt-2">
                                <textarea class="textarea w-full bg-base-100 input-bordered" name="description" placeholder="Type here">{{ $key->description }}</textarea>
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
</x-app>
