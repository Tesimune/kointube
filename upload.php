<?php
include_once 'layouts/header.php'
?>

<div style="padding: 100px; padding-top: 200px; background-image: url(' images/uploads/error-bg.jpg'); ">
    <div class="col-md-15 col-sm-15 col-xs-15">
        <div class="form-style-1 user-pro" action="#">
            <form action="db/upload.php" method="post" id="fileUpload" enctype="multipart/form-data">
                <div>
                    <label for="">Title</label>
                    <input type="text" name="title" placeholder="Title" />
                </div>
                <br>
                <div>
                    <label for="">Description</label>
                    <input type="text" name="description" placeholder="Description" />
                </div>
                <br>

                <div>
                    <label for="">Category</label>
                    <select name="categories" id="" placeholder="Select Category">
                        <option value="series">Series</option>
                        <option value="sci-fi">sci_fi</option>
                        <option value="movies">movies</option>

                    </select>
                </div>
                <br>
                <div>
                    <label for="">Price</label>
                    <input type="number" name="price" placeholder="₦100.00" />
                </div>
                <br>
                <div>
                    <label for="">Thumbnail</label>
                    <input type="file" file-type="image" file-size="2048" accept="image/jpeg,png,jpg,bmp" name="thumbnail" />
                </div>
                <br>
                <div>
                    <label for="">Video</label>
                    <input type="file" file-type="video" file-size="2048" accept="video/mp4,mpeg" name="video" />
                </div>
                <br>
                <div>
                    <label for="">trailer</label>
                    <input type="file" file-type="video" file-size="2048" accept="video/mp4" name="trailer" />
                </div>

                <br>

                <button class="redbtn" type="submit">Upload Video</button>

            </form>

        </div>
    </div>
</div>
<script>
    let fileUpload = document.forms.fileUpload;
    let fileInputs = fileUpload.querySelectorAll('input[type=file]');
    fileInputs.forEach(input => {
        let fileType = input.getAttribute('file-type');
        let fileSize = input.getAttribute('file-size');
        input.onchange = (e) => {
            const error = '<span style="color: red">Invalid file type</span>';
            let video = document.createElement('video');
            let file = input.files[0];
            if (!file.type.includes(fileType)) input.parentElement.innerHTML += error;
            let fileUrl = URL.createObjectURL(file);
        }
    });
</script>

<?php include_once 'layouts/footer.php' ?>