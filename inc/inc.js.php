<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js" async></script>
<script src="js/bootstrap.min.js" async></script>
<script src="js/stellar.js" async></script>
<script src="vendors/owl-carousel/owl.carousel.min.js" async></script>
<script src="js/jquery.ajaxchimp.min.js" async></script>
<script src="js/waypoints.min.js" async></script>
<!-- <script src="js/mail-script.js" async></script> -->
<!-- <script src="js/contact.js" async></script> -->
<!-- <script src="js/jquery.form.js" async></script>
<script src="js/jquery.validate.min.js" async></script> -->
<!-- <script src="js/mail-script.js" async></script> -->
<script src="js/theme.js" async></script>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/privacidade.js"></script>

<?php include 'lgpd.php';?>

<script>
    const contentInfo = document.querySelector('.contentInfo')

    document.querySelector('.closeInfo').addEventListener('click', function() {
        contentInfo.classList.remove('show')
    })
    document.querySelector('.openInfo').addEventListener('click', function() {
        contentInfo.classList.add('show')
    });
</script>
