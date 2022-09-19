<?php  
    function contient($title,$desp,$pricw,$img,$productid){
        
        $lememnt='
        
        <div class="pro">
        <form action="ecommerce1.php" method="post">
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
        
        <button type=\"submit\" class=\"btn btn-warning my-3\" name="add"><h4 class="cart" ><i class="fal fa-solid fa-cart-shopping"></h4></i></button>
        <input type="hidden" name="product_id" value='.$productid.'>
        </form>
        </div>'
        ;
    echo $lememnt;
    }
