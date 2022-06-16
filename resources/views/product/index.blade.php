<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $text }}
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full">
                    <thead>
                        <tr class="">
                            <th class="">#</th>
                            <th class="">Name</th>
                            <th class="">Category</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">
                                <td class="">{{ $product->id }}</td>
                                <td class="">{{ $product->name }}</td>
                                <td class="">{{ $product->category }}</td>
                                <td class="">Detail | Edit | Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
