<h1>Index of books</h1>

@foreach ($books as $i => $b)
    <h2>{{ $b->title }}</h2>
    <p>{{ $b->authors }}</p>
    <img src="{{ $b->image }}"/>
    <p>
        <a href="{{ action('BookController@show', $b->id) }}">Detail of book</a>
    </p>

    {{--    <p>--}}
    {{--        {{ url('/books/' . $b->id) }}--}}
    {{--    </p>--}}

    {{--    <p>--}}
    {{--        {{ action('BookController@index') }}--}}
    {{--    </p>--}}
    {{--    --}}
    {{--    <p>--}}
    {{--        {{ action('Auth\LoginController@showLoginForm') }}--}}
    {{--        {{ route('login') }}--}}
    {{--    </p>--}}

    {{--    <p>--}}
    {{--        {{ route('books') }}--}}
    {{--    </p>--}}




@endforeach