@extends('app')

@section('content')
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
    <div class="container">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
             <div class="row">
                <div class="panel panel-default">

                    <div class="panel-heading">message</div>

                    <!--<form action="{{ route('send') }}" method="POST">
                        <textarea name="message"></textarea> <br>
                        <input type="submit" value="send">
                    </form>-->
                    <div class="panel-body">
                        <div id="messages" ></div>
                    </div>
                    <div class="panel-footer">
                        <input type="text" name="message" id="message_input"></input>
                        <button onclick="chat.send();">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    var socket = io.connect('http://localhost:8890');

    socket.on('message', function (data) {
        $( "#messages" ).append( "<p>"+data+"</p>" );
    
      });

    var chat = {
        send: function () {
            $.ajax({
                url: '{{ route('send') }}',
                type: 'POST',
                data: 'message='+$('#message_input').val(),
                success: function (response) {
                    $('#message_input').val('');
                }
            });
        }
    };

</script>

    
@endsection