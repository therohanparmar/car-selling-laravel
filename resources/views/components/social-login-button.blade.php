@props(['btnTitle' => '', 'imagePath' => ''])
<button class="btn btn-default flex justify-center items-center gap-1">
    <img src="{{ $imagePath }}" alt="" style="width: 20px" />
    {{ $btnTitle }}
</button>
