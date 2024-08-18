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
    <section class="flex flex-col h-screen justify-center items-center">
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data"
            class="space-y-5 w-[500px] p-10 shadow-md bg-white border border-gray-500">
            @csrf
            @method('put')
            <h1 class="font-serif text-xl">Edit Form</h1>
            <div class="flex gap-2 overflow-auto">
                @foreach ($product->product_images as $image)
                    <img src="{{ asset('storage/product_images/' . $image) }}" width="100" alt="">
                @endforeach

            </div>
            <input type="file" name="images[]" class="border border-black w-full" multiple>
            <button class="block bg-black px-4 py-2  text-white rounded-md">Update Image</button>
        </form>
    </section>
</body>

</html>
