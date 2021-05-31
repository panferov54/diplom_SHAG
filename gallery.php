<!DOCTYPE html>
<html lang="ru" >
<head>
    <?php
    $website_title='PHP Блог';
    require 'blocks/head.php';
    ?>

</head>
<body style='background: url("img/camera.png")'>

<?php
require 'blocks/header.php';
?>


<div  id="image-gallery" class="text-center text-uppercase py-3"><h1 style="font-size: 3rem;">GALLERY</h1></div>
<div class="col-12 text-center my-4">
    <button id="soft__skills__button" class="text-center">Показать</button>
    <button id="soft__skills__button2" class="text-center" >Скрыть</button>

</div>
<div class="gallery text-center " id="soft__skills_block">

    <a data-fancybox="gallery"  href="img/gallery/big/img01.jpg" data-caption="street photo"><img src="img/gallery/small/img01s.jpg">
    </a>

    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg" data-caption="street photo">  <img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg" data-caption="street photo"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>
    <a data-fancybox="gallery" href="img/gallery/big/img01.jpg"><img src="img/gallery/small/img01s.jpg"></a>



</div>


<!--gallery end-->
<div  id="retoush" class="text-center text-uppercase pt-5"><h1 style="font-size: 2.5rem;">обработка фотографий</h1></div>

<div class="container mt-3 " style="margin-bottom: 80px">
    <div class="cocoen">
        <img src="img/before2.png" alt="" >
        <img src="img/after2.png" alt="" >
    </div>
</div>


<!--do-posle end-->






<?php
require 'blocks/footer.php';
?>


<script src="js/cocoen.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        new Cocoen();
    });
</script>
<script>
    $('[data-fancybox="gallery"]').fancybox({
        buttons : [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'download',
            'close'
        ],
        // loop: false,
        // gutter : 10,
        // keyboard: true,
        // arrows: true,
        // infobar: true,
        // smallBtn: true,
        // toolbar: auto,
        // protect: true,
        // modal: true,
        // idleTime: 3,
        // animationEffect: "zoom-in-out",
        // animationDuration: 600,
        // transitionEffect: "circular",
        // transitionDuration: 600,
        // slideClass: "myClass",
        // baseClass: "myclass",
        // slideShow: {
        //     autoStart: true,
        //     speed: 1000
        // },
        // youtube : {
        //     controls : 0,
        //     showinfo : 0
        // },
        // thumbs : {
        //     autoStart : true
        // }
    });
</script>
<script>
    $(function () {
        $('#soft__skills__button').on('click', function () {
            $('.gallery').fadeIn(1000).css('display', 'block');
            $('#soft__skills__button').css('display', 'none');
            $('#soft__skills__button2').css('display', 'block');

        })
        $('#soft__skills__button2').on('click', function () {
            $('.gallery').fadeOut(1000).css('display', 'none');
            $('#soft__skills__button2').css('display', 'none');
            $('#soft__skills__button').css('display', 'block');

        })
    })
</script>

</body>
</html>
