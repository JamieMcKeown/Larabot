@extends('custom.master')

@section('title')
TF Laravel
@endsection

@section('bodyContent')
<div class="container">
    <a href="{{route('logoff')}}"class="logout">Log-Off</a>
    <form class="message" action="{{route('enteredMsg')}}" method="POST">
        @csrf

        <input type="text" name="message" placeholder="Enter your message...">
        <input type="submit">
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
    <div class="convoWindow">
      @foreach($convos as $convo)

        <div class="individualResponse">
            <div class="user">
                <h3>{{$convo['senderName']}}</h3>
                <p>{{$convo['message']}}</p>
            </div>
            <div class="bot">
                <p>
                    <h3>Jamie-Bot Says: </h3>{{$convo['botAnswer']}}
                </p>
                <audio src="https://code.responsivevoice.org/getvoice.php?t={{$convo['botAnswer']}}.&amp;tl=en-CA&amp;sv=g3&amp;vn=&amp;pitch=0.8&amp;rate=0.5&amp;vol=1&amp;gender=female" type="audio/mpeg" controls="" ></audio>
            </div>
        </div>
      @endforeach
        
    </div>
@endsection