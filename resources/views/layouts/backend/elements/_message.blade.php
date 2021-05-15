<div id="success_msg">
    @if (session()->has('success'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach((array) session()->get('success') as $msg)
                    <li><span class="mdi mdi-check"></span>&nbsp;{{$msg}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div id="error_msg">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li><span class="mdi mdi-alert"></span>&nbsp;{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
