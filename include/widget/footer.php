</div>
</div>
</div>
<script src="./public/js/vendor.min.js"></script>
<script src="./public/libs/flatpickr/flatpickr.min.js"></script>
<script src="./public/libs/apexcharts/apexcharts.min.js"></script>
<script src="./public/libs/selectize/js/standalone/selectize.min.js"></script>
<script src="./public/js/pages/dashboard-1.init.js"></script>
<script src="./public/js/app.min.js"></script>
<script src="./public/libs/summernote/summernote.min.js"></script>
<script src="./public/js/prototypes.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            callbacks: {
                onImageUpload: async function(files, editor, welEditable) {
                    await window.uploadImage(files[0])
                }
            }
        });

        $("#post_feature_image").on("change", async function(e) {
            $file = e.target.files[0]
            await window.uploadImage($file, $(this).data('target'))
        })
    });
</script>