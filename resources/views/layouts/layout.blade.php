@section('header')
    @include('layouts.partials.header')
@show
<body>
    @section('navigation')
         @include('layouts.partials.nav')
    @show

    @yield('content')

    @section('scripts')
        @include('layouts.partials.scripts')
    @show

</body>