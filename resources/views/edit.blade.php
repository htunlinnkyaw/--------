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
    <section>
        <div class="w-[500px] mx-auto mt-20">

            <form class="space-y-3" method="post" enctype="multipart/form-data"
                action="{{ route('item.update', $item->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" value="{{ $item->name }}" placeholder="Name..." name="name"
                    class="px-4 w-[400px] py-2">
                <img src="{{ asset('storage/item_images/' . $item->image) }}" width="80" alt="">
                <input type="file" placeholder="Image..." name="image" class="px-4 w-[400px] py-2">
                <input type="number" value="{{ $item->price }}" placeholder="Price..." name="price"
                    class="px-4 w-[400px] py-2">
                <input type="number" value="{{ $item->stock }}" placeholder="Stock..." name="stock"
                    class="px-4 w-[400px] py-2">
                <input type="text" value="{{ $item->description }}" placeholder="Des..." name="description"
                    class="px-4 w-[400px] py-2">
                <input type="text" value="{{ $item->status }}" placeholder="Status" name="status"
                    class="px-4 w-[400px] py-2">
                <input type="number" value="{{ $item->category_id }}" placeholder="category_id" name="category_id"
                    class="px-4 w-[400px] py-2">
                <br />
                <button type="submit" class="border border-black px-4 py-2">Update</button>
            </form>


        </div>
    </section>
</body>

</html>
