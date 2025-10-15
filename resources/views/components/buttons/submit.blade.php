@props(['text' => ''])

<button 
    type="submit" 
    {{ $attributes->merge([
        'class' => 'text-white bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 hover:bg-gradient-to-br hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat'
    ])}}
>
    <i class="fa-solid fa-submit"></i>
    {{ $text }}
</button>