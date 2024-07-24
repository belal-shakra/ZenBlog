<!-- Modal -->
<div class="modal fade" id="my-blog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="my-blog">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure to delete this post ?
        </div>
        <div class="modal-footer">
            <form action="{{ route('blog.destroy', $blog) }}" method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
        </div>
    </div>
</div>
