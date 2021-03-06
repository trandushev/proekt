<?php require_once __DIR__.'/../include/header.php'; ?>
<?php require_once __DIR__.'/../include/nav.php'; ?>
<!-- Portfolio Section -->
<div class="container" xmlns="http://www.w3.org/1999/html">
    <html lang="en">
    <head>
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <meta charset="utf-8">
        <title>Bootstrap Image Gallery</title>
        <meta name="description" content="Bootstrap Image Gallery is an extension to blueimp Gallery, a touch-enabled, responsive and customizable image and video gallery. It displays images and videos in the modal dialog of the Bootstrap framework, features swipe, mouse and keyboard navigation, transition effects, fullscreen support and on-demand content loading and can be extended to display additional content types.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/bootstrap-image-gallery.css">
        <link rel="stylesheet" href="css/demo.css">
    </head>
    <body>

    <div class="container">
        </br>
        <form class="form-inline">
            <div class="form-group">
                <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
                    <i class="glyphicon glyphicon-picture"></i>
                    Зареди Фото Галерията
                </button>
            </div>

        </form>
        <br>
        <?php foreach ($allImages as $image): ?><!-- The container for the list of example images -->
        <div id="links" class="col-sm-6">

                    <a  href="admin/uploads/tours/<?php echo $image->getImage(); ?>">
                        <img style="height: 400px;width: 600px" class="img-responsive img-portfolio img-hover" src="admin/uploads/tours/<?php echo $image->getImage(); ?>" alt="">
                    </a>
        </div>
        <?php endforeach; ?>
        <br>
    </div>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.js"></script>
    <script src="js/demo.js"></script>
    </body>
    </html>

<?php require_once __DIR__.'/../include/footer.php'; ?>
