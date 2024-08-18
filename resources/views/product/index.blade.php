<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    {{-- {{ $products }} --}}
    <div class="flex  gap-2  h-screen justify-center items-center">
        @foreach ($products as $product)
            <div class="max-w-md  mx-auto bg-white rounded-xl border border-gray-500 shadow-md overflow-hidden">
                <div class="flex px-3 py-2 gap-1 overflow-auto">

                    @foreach ($product->product_images as $image)
                        <img src="{{ asset('storage/product_images/' . $image) }}" alt="Image"
                            class="w-40 h-48 object-cover rounded-t-xl">
                    @endforeach
                    <a href="{{ route('product.edit', $product->id) }}"
                        class="absolute text-yellow-500 font-bold text-xl">
                        Edit</a>

                </div>
                <div class="px-6 py-4">
                    <h2 class="text-lg font-bold text-gray-800">Card Title</h2>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit fuga
                        quisquam fugiat odio veritatis maiores aliquid, iste nostrum laborum accusantium.</p>
                    <div class="mt-5">
                        <a href="{{ route('product.create') }}"
                            class="bg-orange-500  hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Upload New Image</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
