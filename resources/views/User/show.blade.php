@include('layouts.header')
<div class="p-4">
    @include('layouts.messeges')
    <div class="content p-4">

        <div class="module">
            
            <div class="module-head">
                <h3>User Profile</h3>
            </div>
            <div class="module-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                           <td>NAME</td>
                           <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                         </tr>
                         <tr>
                            <td>Mobile No.</td>
                            <td>{{ $user->mob_no }}</td>
                         </tr>
                         <tr>
                            <td>State</td>
                            <td>{{ $user->state }}</td>
                         </tr>
                         <tr>
                            <td>City</td>
                            <td>{{ $user->city }}</td>
                         </tr>
                    </thead>
                </table>
            </div>
            <span class="p-3">
                <a href="{{ route('user.index') }}"><button
                    class="btn btn-primary float-left">Back</button></a>
            </span>
            
        </div>
    </div>
</div>


@include('layouts.footer')
