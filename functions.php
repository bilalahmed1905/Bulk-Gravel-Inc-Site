<?php 
function starRating($rating) {
        $string = "";

        for ($count=1; $count <= $rating; $count++) {
              $string.='<i class="fa fa-star fa-3x" aria-hidden="true"></i>';   
        }

        return $string;
                
}
?>