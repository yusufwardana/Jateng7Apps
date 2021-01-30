 
    <!-- footer-->
<?php

if($ur["datapage"]== "greeting"){
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script type="application/javascript" src="js/birth.js?'.time().'"></script>';
	 
}else{
echo ' </main>';

        if(isset($_GET["inp"]) || isset($_GET["page"]) || isset($_GET["bm"])) {
        	echo footermenu($ur);
        }else{
        	echo footermenu($ur);
        }
	echo '   <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="vendor/swiper/js/swiper.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>';
    echo '<script src="js/google-forms-css.js?'.time().'"></script>';	
}






?>

<script>
new googleFormsCSS({
  formURL: '<?php echo $gForm; ?>', 
  confirmationURL: '/?page=thankyou', 

});
</script>


</body>
</html>
