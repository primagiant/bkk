<x-app-layout>
    <h1 class="text-4xl mb-8 text-center font-black">
        Sistem Kendali Program Aktifitas - Badan Kerjasama dan Kehumasan
    </h1>
    <hr>
    <div class="py-8">
        <h2 class="text-xl font-bold">Rekap Program</h2>
        <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="flex flex-col justify-center items-center bg-gray-200 px-4 pt-8 pb-4 rounded-lg">
                    <p class="text-xl font-bold">50</p>
                    <p class="text-sm mt-3 font-light">Tahun 2021</p>
                </div>
            @endfor
        </div>
    </div>
</x-app-layout>
