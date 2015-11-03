@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Send message</div>
                    <form action="{{ route('send') }}" method="POST">
                        <textarea name="message"></textarea> <br>
                        <input type="submit" value="send">
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection