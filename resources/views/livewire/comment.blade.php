<div class="blog-right-side">
    <!-- Comments Form -->
    <div id="success">@include('home.message')</div>
    <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                @csrf
                <div class="form-group">
                    <textarea wire:model="comment" class="form-control" rows="3"></textarea>
                </div>
                @auth
                    <button type="submit" class="btn btn-primary">Submit</button>
                @endauth
                @guest
                    <button type="button" class="btn btn-primary" disabled><a style="text-decoration: none; color: white;" href="{{ route('login') }}">For Submit your Comment, Please Login</a></button>
                @endguest
            </form>
        </div>
    </div>
</div>
