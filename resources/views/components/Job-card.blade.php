@props(['Job'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="./Jobs/{{$Job->id}}">{{$Job->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$Job->company}}</div>
            <x-Job-tags :tagsCsv="$Job->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$Job->location}}
            </div>
        </div>
    </div>
</x-card>