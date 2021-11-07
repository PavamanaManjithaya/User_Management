@include('layouts.header')
<div class="p-4">
    @include('layouts.messeges')
    <div class="content p-4">

        <div class="module">
            <div class="module-head">
                <h3>All Users</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>State</th>
                            <th>City</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) > 0)
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mob_no }}</td>
                                    <td>{{ $user->state }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>
                                        <a href="{{ route('user.show', [$user->id]) }}"><button
                                                class="btn btn-primary">Profile</button></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.edit', [$user->id]) }}"><button
                                                class="btn btn-primary">Edit</button></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', [$user->id]) }}"
                                            id="delete-form{{ $user->id }}" method="POST">@csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="#" onclick="if(confirm('Do You Want to delete??')){
                                    event.preventDefault();
                                    document.getElementById('delete-form{{ $user->id }}').submit()
                                }
                                else{
                                    event.preventDefault();
                                }">
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </a>


                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>No Users to display..</tr>
                        @endif

                    </tbody>
                </table>
                <span class="p-3">
                    <a href="/"><button
                        class="btn btn-dark float-left">Back</button></a>
                </span>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
