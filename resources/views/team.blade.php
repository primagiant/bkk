<x-app-layout>
    <h1 class="text-4xl mb-8 font-black">
        Team Member
    </h1>
    <div class="mt-6">
        <button class="bg-green-500 text-sm px-4 py-2 text-white rounded-lg hover:bg-green-600">Tambah Data</button>
        <div>
            <table class="w-full mt-3 border rounded-lg table-auto shadow-sm">
                <thead class="border border-b-2">
                    <th class="py-4 w-8 px-6">No</th>
                    <th class="py-4">Nama Anggota</th>
                    <th class="py-4 w-32">Aksi</th>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="py-4">1</td>
                        <td class="py-4">Humman</td>
                        <td class="py-4">
                            <div class="text-sm bg-red-500 hover:bg-red-600 px-4 py-2 w-24 mb-3 text-white rounded-lg">
                                Delete</div>
                            <div class="text-sm bg-orange-500 hover:bg-orange-600 px-4 py-2 w-24 text-white rounded-lg">
                                Edit</div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="py-4">2</td>
                        <td class="py-4">Jujiman</td>
                        <td class="py-4">
                            <div class="text-sm bg-red-500 hover:bg-red-600 px-4 py-2 w-24 mb-3 text-white rounded-lg">
                                Delete</div>
                            <div class="text-sm bg-orange-500 hover:bg-orange-600 px-4 py-2 w-24 text-white rounded-lg">
                                Edit</div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="py-4">3</td>
                        <td class="py-4">Sarada Uchiha</td>
                        <td class="py-4">
                            <div class="text-sm bg-red-500 hover:bg-red-600 px-4 py-2 w-24 mb-3 text-white rounded-lg">
                                Delete</div>
                            <div class="text-sm bg-orange-500 hover:bg-orange-600 px-4 py-2 w-24 text-white rounded-lg">
                                Edit</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
