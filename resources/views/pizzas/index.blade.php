@extends("layouts.layout")

@section("content")

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto ">
        <div class="flex flex-col items-center text-gray-300 justify-center pt-8 ">
            <h1>Pizzas</h1>
            <div class="text-gray-600 text-lg">
                @if(count($pizzas)>0)
                @foreach($pizzas as $pizza)
                <p>{{$loop->index+1 }} {{$pizza["name"]}} - {{$pizza['type']}} - {{$pizza["base"]}}</p>
                @endforeach
                @else
                <h3 class="text-xl">You don't ordered any pizza</h3>
                @endif
            </div>




        </div>
    </div>
</div>
</div>
@endsection
