@php
    use App\Models\Restaurant;
@endphp

<h1>Create</h1>
{{$id}}

<form method="{{ isset($id) ? 'PUT' : 'POST' }}" action="{{ url('restaurants/create') }}">
    @csrf
    {{print_r($id);}}
    <!-- @if(isset($id))
        @method('PUT')
    @endif -->

    <!-- Other form fields go here (if needed) -->

    <button type="submit">Submit</button>
</form>
