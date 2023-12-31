@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-12 pt-16">
        <div class="top-rated-shows">
            <h2 class="uppercase tracking-wider text-[#00eeff] text-2xl font-semibold">Top Rated Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div> <!-- end top-rated-shows -->

        <div class="popular-tv py-16">
            <h2 class="uppercase tracking-wider text-[#00eeff] text-2xl font-semibold">Popular Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach

            </div>
        </div> <!-- end popular-tv -->

    </div>
@endsection
