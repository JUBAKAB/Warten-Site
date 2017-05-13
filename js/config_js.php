<script>
    <?php
$php_array = $imageSponsor;
$js_array = json_encode($php_array);
echo "let javascript_array = ". $js_array . ";\n";
?>
    const imgSlider = document.getElementsByClassName("img_slider");
    // JS hover autogeneration
    function changeImage(imageSource, i, choose) { // Image nom , incrementation de la boucle,choix entre hover et nonHover
        if (choose) {
            let img = new Image();
            img.src = "img/" + javascript_array[i] + "hover.png";
            imageSource.src = img.src;
        } else {
            let img = new Image();
            img.src = "img/" + javascript_array[i] + ".png";
            imageSource.src = img.src; 
        }
    }
  

</script>
