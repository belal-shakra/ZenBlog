<div class="row justify-content-center mt-5">
    @auth
        <div class="col-lg-12">
            <h5 class="comment-title">Leave a Comment</h5>
            <div class="row">
                <form action="{{ route('comment.store', $blog) }}" method="post">
                    @csrf

                    <div class="col-12 mb-3">
                        <x-form.textarea name="comment" placeholder="Message" :value="old('message')"/>
                    </div>

                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" value="Comment">
                    </div>
                </form>
            </div>
        </div>
    @endauth


    @guest
        <div>
            <p>
                To add a comment
                <a href="{{ route('login') }}" style="color: rgb(0, 68, 255)">login now</a>
            </p>
        </div>
    @endguest

</div>
