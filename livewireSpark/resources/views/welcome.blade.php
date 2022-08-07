<!DOCTYPE html>
<html>
<head>
    <title>Stripe Checkout </title>
    <script src="https://js.stripe.com/v3/"></script>
    <link href ="style.css" rel="stylesheet" type ="text/css">
    </head>
    <body>
  <button id="checkout">CheckOut</button>

<script>
var stripe = Stripe("pk_test_51LOkgXDVWgydybi3mm6cYW121LFZRDx2Nxqtjpxhabjeuhfu0GgfbM0H82JsWKVNKPOoBr48xmT3CJSSgfAmBlfU00tykAfeLA")
document.getElementById("checkout").addEventListener("click",function(){
stripe.redirectToCheckout({
    lineItems: [
        {
            price: "price_1LPte6DVWgydybi3TsZINlSA",
            quantity:1,

        },
         
    ],
    mode: "payment",
    successUrl:"https://www.google.com/",
    cancelUrl :"https://www.twitter.com/",
})
.then(function(result){

}); 

})

</script>
    </body>
</html>