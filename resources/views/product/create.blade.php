<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload UI with Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-screen flex justify-center items-center bg-gray-100">
    <form class="w-[500px] mx-auto p-4 bg-white rounded shadow-md" method="post" action="{{ route('product.store') }}"
        enctype="multipart/form-data">
        @csrf
        <h2 class="text-2xl font-bold mb-4 select-none">File Upload</h2>
        <input type="file" id="file" name="images[]" class="hidden" multiple>
        <label for="file"
            class="cursor-pointer flex justify-center items-center w-full h-12 px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            <span class="ml-2">Select a file</span>
        </label>

        <button type="submit" class="bg-orange-400 rounded-md px-4 py-2 mt-5 mx-auto block">
            Submit
        </button>
    </form>
</body>

</html>
