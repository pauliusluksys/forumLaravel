<x-app-layout>
    <x-slot name="header">
        Posts
    </x-slot>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>

            </tr>

        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>

            <th scope="col">{{$post->id}}</th>
            <th scope="col">{{$post->title}}</th>

        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
