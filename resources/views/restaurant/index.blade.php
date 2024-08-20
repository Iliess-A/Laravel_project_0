@foreach($restaurants as $restaurant)
    <h2>{{ $restaurant->name }} <strong>(Article created by {{ $restaurant->review }})</strong></h2>
    <p>{{ $restaurant->description }}</p>
@endforeach