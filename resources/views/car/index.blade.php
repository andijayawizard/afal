<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $text }}
            {{ __('Cars') }}
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
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Image</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Plate</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Status</th>
                            <th scope="col" class="text-sm font-medium text-white px-4 py-2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                            <tr class="border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="">{{ $product->id }}</td>
                                <td class="">{{ $product->name }}</td>
                                <td class="">{{ $product->category }}</td>
                                <td class="">{{ $product->name }}</td>
                                <td class="">{{ $product->category }}</td>
                                <td class="">Detail | Edit | Delete</td>
                            </tr>
                        @empty
                            <tr>
                                <td>data empty</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $cars->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
