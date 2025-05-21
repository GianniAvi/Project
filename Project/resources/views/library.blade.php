<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if($courses->isEmpty())
                <p>No has comprado ningún curso todavía.</p>
            @else
                <ul>
                    @foreach($courses as $course)
                        <li>{{ $course->name }}</li>
                    @endforeach
                </ul>
            @endif
        </h2>    
    </x-slot>
</x-app-layout>
