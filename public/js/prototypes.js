window.uploadImage = async function(file, type = "summernote") {
    const setting = await window._setting()
    var data = new FormData();
    data.append("image", file);
    data.append("fileUpload", true);
    if (typeof file == "object") {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: setting.api,
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                method: 'POST',
                success: function(url) {
                    const response = JSON.parse(url)
                    if (type == "summernote") {
                        var image = $('<img>').attr('src', response.url);
                        $('#summernote').summernote("insertNode", image[0]);
                    } else {
                        $("#feature_image").attr('src', response.url);
                        $(`input[name=${type}`).val(response.filename)
                    }
                    resolve(true)
                },
                error: function(data) {
                    console.log(data);
                    reject(false)
                }
            })
        })
    }
}