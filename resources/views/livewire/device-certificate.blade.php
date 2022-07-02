<div>
    <x-app-layout>
    {{-- Be like water. --}}
    <h1>All Certificates</h1>
    <br />
    <input wire:model="search" class="w-full" type="search" placeholder="Search certificates by Serial Number...">
    <br />
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        sn
                    </th>
                    <th scope="col" class="px-6 py-3">
                        company
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $cer)


                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$cer->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$cer->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cer->sn}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cer->company}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button  wire:click="delete({{$cer->id}})" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $certificates->links() }}
    </div></x-app-layout>
</div>
