@extends("public.layout")


@section('content')
    <section class="text-gray-600 body-font flex justify-center">
        @foreach ($teachers as $item)
            <div class=" bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8 object-center object-cover rounded-full h-36 w-36"
                    style="background-image: url('/{{ isset($item->profile_uri) ? $item->profile_uri : '' }}'); background-position:center;background-repeat:no-repeat;background-size:cover">

                </div>
                <div class="text-center">
                    <p class="text-xl text-gray-700 font-bold mb-2">{{ $item->name }}</p>
                    <p class="text-base text-gray-700 font-semibold uppercase">{{ $item->role }}</p>
                    <p class="text-base text-gray-400 font-normal capitalize">Faculty of {{ $item->faculty }}</p>
                    <p class="text-base text-gray-400 font-normal">{{ $item->contact }}</p>
                </div>
            </div>
        @endforeach
    </section>



@endsection
