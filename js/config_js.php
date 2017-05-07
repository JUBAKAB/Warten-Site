<script>
<?php
$php_array = $imageSponsor;
$js_array = json_encode($php_array);
echo "var javascript_array = ". $js_array . ";\n";
?>
    
    
    
function changeImage(imageSource,i,choose){
    if(choose){
    var img = new Image();
    img.src = "img/"+ javascript_array[i] +"hover.png";   
    imageSource.src= img.src;
    }else{
    var img = new Image();
    img.src = "img/"+ javascript_array[i] +".png";   
    imageSource.src= img.src;
    }
}
    
var array_slider = document.getElementsByClassName("img_slider");
    
</script>