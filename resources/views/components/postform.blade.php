<script src="https://cdn.tiny.cloud/1/8fjeupno2fz8ipbmivgcw5281soegnn2v56vw0fyloxcka07/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
<div class="container bg-light rounded-3 p-4">
    <h1 class="display-6 mb-4">Post a thread</h1>
    <form action="{{ route('post-thread') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="post-title" class="form-label visually-hidden">
                Post Title
            </label>
            <input type="text" name="post-title" placeholder="Title" id="post-title"
                   class="form-control form-control-lg">
        </div>
        <div class="mb-3">
            <label for="post-body" class="form-label visually-hidden">
                Post Body
            </label>
            <textarea name="post-body" id="post-body" cols="30" rows="15"
                      class="form-control">
                        </textarea>
        </div>
        <button type="submit" class="btn btn-primary px-3 py-2 rounded-3">Post thread</button>

    </form>
</div>
<script>
    tinymce.init({
        selector: '#post-body',
        plugins: 'lists link preview',
        menubar: 'edit format',
        toolbar: 'undo redo | bold italic underline | fontsizeselect | numlist bullist | styleselect | link | preview'
    })
</script>
