@php
    use App\Models\Restaurant;
@endphp

<h1>Create</h1>

<form method="{{ isset($id) ? 'PUT' : 'POST' }}" action="{{ url('restaurants/create') }}">
    @csrf
    <!-- cette partie me permet de verifier que je suis dans le bon formulaire POST et non PUT ou inverssement  -->
    {{isset($id)? $id : "pas d'id donc formulaire de creation" ;}}

    <button type="submit">Submit</button>
</form>
