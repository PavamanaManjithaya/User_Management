@include('layouts.header')
<div class="p-4">
    @include('layouts.messeges')

    <div class="content p-3">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name</label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter a Name"
                            value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="mob_no">Mobile Number</label>

                        <input type="text" name="mob_no" id="mob_no" class="form-control"
                            placeholder="Enter Mobile Number" value="{{ $user->mob_no }}" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="email">Email</label>

                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                            value="{{ $user->email }}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="state">State</label>

                        <input type="text" name="state" id="state" class="form-control" placeholder="Enter State Name"
                            value="{{ $user->state }}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="city">City</label>

                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name"
                            value="{{ $user->city }}" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <hr>
                        <div class="text-center">
                            <input type="submit" class="btn btn-info">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    @include('layouts.footer')
</div>
