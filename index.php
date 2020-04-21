<?php include "../php-ajax-dischi/dist/php/data.php"  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP-AJAX-DISCHI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script> <!-- Include Handlebars from a CDN --> -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> <!-- Font -->
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <img src="../php-ajax-dischi/dist/img/logo.png" alt="logo" />
            <button type="button" name="button"><a href="index.html">Go to jQuery version</a></button>
            <div class="container-select">
                    <select class="genre-selector" name="Genre">
                        <option value="">Choose genre</option>
                        <option value="alternative">Alternative</option>
                        <option value="punk">Punk</option>
                        <option value="rock">Rock</option>
                    </select>
            </div>
        </div>

    </header>

    <div class="albums-container container">
        <?php foreach ($albums as $key => $album) { ?>
            <div class="album" data-genre=<?php echo strtolower($album['genre']); ?>>
                <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['author']; ?> - <?php echo $album['title']; ?> - cover">
                <h3><?php echo $album['title']; ?></h3>
                <span class="author"><?php echo $album['author']; ?></span>
                <span class="year"><?php echo $album['year']; ?></span>
                </div>
        <?php } ?>

    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.genre-selector').change(function () {
           var genreSelected = $(this).val();
           // console.log(genreSelected); //debug
           if (genreSelected == "") {
               $('.album').show();
           } else {
               $('.album').each(function(){
                   if(genreSelected.toLowerCase() == $(this).data('genre').toLowerCase()) {
                       $(this).show();
                   } else {
                       $(this).hide();
                   }
               });
           }
        });
    });
</script>
</body>

</html>
