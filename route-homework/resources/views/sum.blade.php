<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <div class="w-full max-w-xs">
    <form method="post" action="" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      <!-- {{ csrf_field() }} -->
      <div class="mb-4">
        <label for="soA" class="block text-gray-700 text-sm font-bold mb-2">So A</label>
        <input type="number" id="soA" name="soA" placeholder="Enter A" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-12">
        <label for="soB" class="block text-gray-700 text-sm font-bold mb-2">So B</label>
        <input type="number" id="soB" name="soB" placeholder="Enter B" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Submit
        </button>
        <input type="number" class="appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-transparent" placeholder="Result" disabled="" value="<?php if (isset($sum)) echo $sum; ?>">
      </div>
    </form>
  </div>
</body>

</html>