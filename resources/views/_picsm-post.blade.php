<div style="padding-bottom:50px" class="border-2 border-gray-300 rounded-xl p-6 bg-gray-100 col-span-4 sm-space">
    @if (isset($pic_array))
        <h2 class="text-1xl"><strong> Lorem Picsm Post </strong> </h2><br>
        @foreach ($pic_array as $product)

            <img class="img-size" src="{{ $product['download_url'] }}.jpg">

            <h4> Posted by : {{ $product['author'] }} <h4>
                    <br>
        @endforeach
    @endif
</div>
