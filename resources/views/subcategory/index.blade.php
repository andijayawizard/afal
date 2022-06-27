<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $text }}
            {{ __('Sub Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full">
                    <thead class="border-b bg-gray-800">
                        <tr class="">
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">#</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Name</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Category</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcats as $subcat)
                            <tr class="border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="">{{ $subcat->id }}</td>
                                <td class="">{{ $subcat->name }}</td>
                                <td class="">{{ $subcat->category }}</td>
                                <td class="">Detail | Edit | Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $subcats->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
