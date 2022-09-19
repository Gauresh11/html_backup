<?php  
    function contient($title,$desp,$pricw,$img){
        
        $lememnt='<div class="pro">
        <a href="#"><img src="'.$img.'" alt=""></a>
        <div class="des">
            <span>'.$title.'</span>
            <h5>'.$desp.'</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>'.$pricw.'</h4>
        </div>
        <a href="#"><h4 class="cart"><i class="fal fa-solid fa-cart-shopping"></h4></i></a>
        </div>'
        ;
    echo $lememnt;
    }
