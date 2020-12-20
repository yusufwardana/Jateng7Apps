  </main>
    <!-- footer-->
<?php
//echo footermenu($ur);
?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="vendor/swiper/js/swiper.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script src="js/google-forms-css.js"></script>
<script>
new googleFormsCSS({
  formURL: '<?php echo $gForm; ?>', // example form
  confirmationURL: 'thank_you.html', // optional
  placeholderText: '1000', // optional
});
</script>
</body>
</html>
