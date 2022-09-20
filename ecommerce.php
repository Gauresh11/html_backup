<?php
global $added;
function contient($title, $desp, $pricw, $img, $productid)
{
    $added = "";
    $lememnt = "
        <div class=\"pro\">
        <form action=\"ecommerce1.php\" method=\"post\">
        <a href=\"#\"><img src=\" $img \" alt=\"\"></a>
        <input type=\"hidden\" name=\"img\" value=\"$img\" />
        <div class=\"des\">
            <span name =\"tilt\" value=\"$title\">$title</span>
            <input type=\"hidden\" name=\"tit\" value=\"$title\">
            <h5 name = \"desp\" value=\"$desp\" >$desp</h5>
            <input type=\"hidden\" name=\"desp\" value=\"$desp\">
            <div class=\"star\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
            </div>
            <h4>₹$pricw</h4>
            <input type=\"hidden\" name=\"price\" value=\"$pricw\">
            </div>
        <span></span>
        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\"><h4 class=\"cart\" ><i class=\"fal fa-solid fa-cart-shopping\"></h4></i></button>
        <input type=\"hidden\" name=\"product_id\" value=$productid>
        </form>
        </div>";
    echo $lememnt;
}
function cartElement($producttitle, $productprice, $productimg, $productid,$qun)
{
    $count = 1;
    $element = "
        
                        <div class=\"border rounded\">
                            <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">$producttitle</h5>
                                    <small class=\"text-secondary\"></small>
                                    <h5 class=\"pt-2 itotal\">₹</h5>
                                    <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                    </form>
                                </div>
                                <div class=\"col-md-3 py-5\">
                                    <div>
                                    <input type=\"hidden\" class=\"iprices\" value=\"$productprice\"</input>
                                    <form  action=\"cart.php?action=add&id=$productid\"method=\"post\">
                                    <input  class=\"iquant\" type='number' name ='mod_qut' onchange='this.form.submit();' value='$qun' min ='1' max='10'></input>
                                    <input type=\"hidden\" name=\"id2\" value=\"$productid\">
                                    </form>
                                    <input type=\"hidden\" name=\"qu\" value=\"itotal\">
                                    </div>
                                </div>
                            </div>
                        </div>        
        ";
    echo  $element;
}
