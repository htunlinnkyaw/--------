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

    <div class="flex flex-col h-screen items-center mt-5">
        <div class="relative overflow-x-auto">
            <h1 class="my-5 text-xl font-serif">List of Items</h1>
            <table class="w-full border  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/item_images/' . $item->image) }}" width="100"
                                    alt="">
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->stock }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->category_id }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('item.edit', $item->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="mt-2">
                {{ $items->links('pagination::tailwind') }}
            </div>
        </div>
    </div>







</body>

</html>
