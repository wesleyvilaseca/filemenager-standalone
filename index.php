<?php include './config/config.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--css fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
    <title>File maneger</title>
</head>

<body>

    <div class="container">
        <h4> File maneger </h4>
        <div class="row v-center">
            <div class="col-xl-1 col-md-2 col-sm-12">
                <img class="image-preview" src="<?= URL_BASE ?>assets/img/images/noimage.png" width="100%" alt="">
            </div>
            <div class="col-xl-11 col-md-10 col-sm-12">
                <div class="input-group">
                    <input id="image-input" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <a class="btn btn-outline-success filemaneger iframe-btn" href="<?= FILEMANAGER['DIALOG'] ?>" id="button-addon2"><i class="fas fa-file-upload"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--js fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>

<!-- bootstrajs -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

</html>

<style>
    .v-center {
        align-items: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>

<script>
var url_base = "<?= FILEMANAGER['UPLOAD_DIR'] ?>";
    $('.filemaneger').fancybox({
        'width': 500,
        'height': 500,
        'type': 'iframe',
        'autoScale': false, //if using older fancybox
        'autoSize': false, //if using newer fancybox
        'autoDimensions': false,
        'iframe': {
            'css': {
                'height': '100%'
            }
        }
    });

    function responsive_filemanager_callback(field_id){
        var url = url_base +  $('#' + field_id).val();
        $('.image-preview').attr('src', url);
    }
</script>