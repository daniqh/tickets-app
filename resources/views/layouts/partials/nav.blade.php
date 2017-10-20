<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://danielqh.com" target="_blank">duilio.me</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                   {!! Html::menu('tickets.menu') !!}
                    @include('layouts.partials.login')

                </div>
            </div>
        </div>
    </div>
</nav>