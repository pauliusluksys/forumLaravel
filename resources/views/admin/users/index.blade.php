<x-app-layout>
    <x-slot name="header">
        Users
    </x-slot>
    <table class="table">
        <thead>

        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">email verification status</th>

        </tr>

        </thead>
        <tbody>
        <tr>
            <th scope="col">{{$user->id}}</th>
            <th scope="col">{{$user->name}}</th>
            <th scope="col">@if ($user->email_verified_at!==null){{$user->email_verified_at}}
                @else Not verrified @endif</th>

        </tr>
        </tbody>
    </table>
</x-app-layout>
