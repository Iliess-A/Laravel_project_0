@php
    use App\Models\Restaurant;
@endphp

<h1>Create</h1>

<form method="{{ isset($id) ? 'PUT' : 'POST' }}" action="{{ url('restaurants/create') }}">
    @csrf
    <!-- cette partie me permet de verifier que je suis dans le bon formulaire POST et non PUT ou inverssement  -->
    {{isset($id)? "Vous essayer de modifier ce formulaire : ".$id : "Pas d'id donc formulaire de creation" ;}}<br>

    <label for="name_restaurant">Name of the restaurant : </label>
    <input type="text" name="name_restaurant" id="name_restaurant"><br>

    <label for="adress_restaurant">Adress of the restaurant : </label>
    <input type="text" name="adress_restaurant" id="adress_restaurant"><br>

    <label for="zipCode_restaurant">Zip code of the restaurant : </label>
    <input type="number" name="zipCode_restaurant" id="zipCode_restaurant"><br>

    <label for="town_restaurant">Town of the restaurant : </label>
    <input type="text" name="town_restaurant" id="town_restaurant"><br>

    <label for="country_restaurant">Country of the restaurant : </label>
    <input type="text" name="country_restaurant" id="country_restaurant"><br>

    <label for="description_restaurant">Description of the restaurant : </label>
    <textarea type="text" name="description_restaurant" id="description_restaurant"></textarea><br>

    <label for="review_restaurant">Review of the restaurant on 10 : </label>
    <input type="number" max="10" name="review_restaurant" id="review_restaurant"><br>

    <button type="submit">Submit</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
