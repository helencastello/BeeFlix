<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
    <tr>
        <a class="navbar-brand"
           href="{{  url()->previous() }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> <span style="margin-left: 1em">Back</span> </a>
        <a class="navbar-brand"
           href="{{ url('/') }}">
            <img src="{{asset('/images/beeflix.png')}}" height="30dp" width="30dp" class="d-inline-block align-top" alt="">
            BeeFlix
        </a>
        <a class="navbar-brand"
           href="{{ url('/') }}" class="btn btn-default">All Movies</a>
    </tr>
</nav>
