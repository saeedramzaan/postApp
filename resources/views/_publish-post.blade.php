<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">

    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><strong>New Post</strong></label>
        </div>
        <div class="form-group">
            <input type="text" class="txtBox" placeholder="Title" name="title">
        </div>

        <textarea name="body" class="txtBox" placeholder="Write something?" required autofocus rows="4"
            cols="50"></textarea>
        <hr class="my-4">

        <footer class="lg:flex justify-between items-center">
            <div class="form-group">
                <label><strong>Select Image</strong></label>
                <input type="file" name="image" class="form-control">

            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10 btn">
                Post
            </button>
        </footer>

    </form>
</div>
