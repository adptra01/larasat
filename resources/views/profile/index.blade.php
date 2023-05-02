<x-app>
    <x-slot name="title">Profile Information</x-slot>
    <div class="card">
        <div class="rounded-lg card-body bg-base-300">
            @if ($errors->any())
                <div class="mb-4 shadow-lg alert alert-error">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="flex-shrink-0 w-6 h-6 stroke-current">
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
                <div class="mb-4 shadow-lg alert alert-warning">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="flex-shrink-0 w-6 h-6 stroke-current">
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
            <div class="grid grid-cols-12 gap-4 p-1 ">
                <div class="col-span-12 p-8 rounded-lg bg-base-100 sm:col-span-4">
                    <div class="mb-3">
                        <dt class="row-auto">Nama Lengkap </dt>
                        <dd class="overflow-auto text-xl font-bold text-white">{{ $auth->name }}</dd>
                    </div>
                    <div class="mb-3">
                        <dt class="row-auto">Email </dt>
                        <dd class="overflow-auto text-xl font-bold text-white ">{{ $auth->email }}</dd>
                    </div>
                </div>
                <div class="col-span-12 p-8 rounded-lg sm:col-span-8 bg-base-100">
                    <div class="sm:col-span-3 form-control">
                        <label class="label">
                            <span class="label-text">What is your name?</span>
                            <span class="label-text-alt">Top Right label</span>
                        </label>
                        <input type="text" placeholder="Type here" class="sm:col-span-3 input input-bordered" />
                        <label class="label">
                            <span class="label-text-alt">Bottom Left label</span>
                            <span class="label-text-alt">Bottom Right label</span>
                        </label>
                    </div>
                    <div class="sm:col-span-3 form-control">
                        <label class="label">
                            <span class="label-text">What is your name?</span>
                            <span class="label-text-alt">Top Right label</span>
                        </label>
                        <input type="text" placeholder="Type here" class="sm:col-span-3 input input-bordered" />
                        <label class="label">
                            <span class="label-text-alt">Bottom Left label</span>
                            <span class="label-text-alt">Bottom Right label</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app>
