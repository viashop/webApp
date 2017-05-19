<!doctype html>
<html lang="pt-br">

@include('theme::partials.head')

<body>

<div class="wrapper">

    @include('theme::partials.sidebar')

    <div class="main-panel">

        @include('theme::partials.navbar')

        <div class="content">
            <div class="container-fluid">
                @yield('main-content')
            </div>
        </div>

        @include('theme::partials.footer')

    </div>
</div>


<!-- Not Remove span #worldMap BUG in Javascript Browser Firefox -->
<div id="worldMap" style="height: 0px;"></div>
<!-- Not Remove span #worldMap BUG in Javascript Browser Firefox -->


@include('theme::partials.scriptshtml')
@include('theme::partials.scripts-message')

@if(Request::is('painel/account/personal'))
    @include('theme::partials.pwstrength')
@endif

</body>


</html>
