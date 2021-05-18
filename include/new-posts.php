<div class="mt-2">
    <div class="row">
        <div class="col-md-12 card card-body">
            <div class="text-end">
                <button class="btn btn-secondary btn-primary">
                    Save
                </button>
                <button class="btn btn-md btn-primary">
                    Publish
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 card card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8">
                    <h3>Post Information</h3>
                    <hr />
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Post Name</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter post slug</small>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Post Slug</label>
                        <input type="text" id="simpleinput" class="form-control disabled" disabled>
                        <small class="text-muted">Enter post slug</small>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <div class="form-floating mb-3 ">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Select Post Category</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Select your Post Ads</label>
                    </div>
                    <h3>Meta Information</h3>
                    <hr />
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Meta Title</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter Meta Title</small>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Meta Description</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter Meta Description</small>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Meta Keywords</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter Meta Keywords</small>
                    </div>
                    <h3>OG Information</h3>
                    <hr />
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">OG Title</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter OG Title</small>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">OG Description</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter OG Description</small>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">OG Image</label>
                        <input type="text" id="simpleinput" class="form-control">
                        <small class="text-muted">Enter OG Image</small>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="bg-custom h-10">
                        <img src="https://www.postplanner.com/hs-fs/hubfs/facebook-link-post-1200x628.jpg?width=1200&name=facebook-link-post-1200x628.jpg" id="feature_image" alt="" height="100%" width="100%" />
                    </div>
                    <div class="position-relative mt-3">
                        <input type="hidden" name="post_feature_image" />
                        <input type="file" class="opacity-0 position-absolute z-index-1" data-target="post_feature_image" id="post_feature_image">
                        <button class="btn btn-dark btn-sm position-absolute w-100">upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>