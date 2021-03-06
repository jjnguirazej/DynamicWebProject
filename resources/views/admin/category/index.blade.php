<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All category
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
               <div class="col-md-8">
                   <div class="card">
                       @if (session('success'))
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <strong>Category inserted sucessfull</strong>
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                       @endif
                       <div class="card-header">All categorry</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sl Number</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">User</th>
                                    <th scope="col">created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i = 1)

                                @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->user_id}}</td>
                                    <td>{{$category->created_at}}</td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>

                   </div>
               </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add categorry</div>
                        <div class="card-body">
                            <form action="{{route('store.category')}}" method ="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input class="form-control" id="category_name" name="category_name" aria-describedby="emailHelp" >
                               @error('category_name')
                                  <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">add Category</button>
                            </form>
                        </div>

                    </div>
                </div>
                    </div>
        </div>
    </div>
</x-app-layout>

