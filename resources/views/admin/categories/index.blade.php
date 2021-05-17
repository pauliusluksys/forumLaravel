<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-row">
            Categories
            <form method="GET" action="{{route('categories.index')}}">
                <div class="d-flex flex-row">
                    <div>Sort By Desc</div>
                    <div>
                    <label class="c-switch c-switch-primary">

                        <input type="checkbox" class="c-switch-input" unchecked name="isDesc">
                        <span class="c-switch-slider"></span>
                    </label>
                    </div>

                    <div class="d-flex flex-row" >
                    <label for="exampleFormControlInput1" style="width:150px;">type to search:</label>
                    <input type="text" class="form-control" name="searchText" id="exampleFormControlInput1"
                           placeholder="type to search">

                    </div>
                    <button type="submit" class="btn btn-primary">Show</button>

                    </div>
            </form>
        </div>
    </x-slot>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>

        </tr>

        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="col">{{$category->id}}</th>
                <th scope="col">{{$category->name}}</th>

            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
