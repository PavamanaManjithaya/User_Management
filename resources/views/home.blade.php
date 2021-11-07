@include('layouts.header')
<div class="container">
    <main role="main" class="container">
        <div class="row p-4">
            <h1>CRUD Operation</h1>
            <div class="col-lg-12">
                <p class="lead">To perform basic crud operations...</p>
            </div>
            <div class="container">
                <span class="p-4">
                    <a class="btn btn-lg btn-primary" href="{{ route('user.create') }}" role="button">Add User</a>
                </span>
                <span class="p-4">
                    <a class="btn btn-lg btn-primary" href="{{ route('user.index') }}" role="button">View Users</a>
                </span>
            </div>



        </div>
    </main>
</div>
@include('layouts.footer')
