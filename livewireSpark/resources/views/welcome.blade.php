<!DOCTYPE html>
<html>
<head>
    <title>Stripe Checkout </title>
    <script src="https://js.stripe.com/v3/"></script>
    <link href ="style.css" rel="stylesheet" type ="text/css">
    </head>
    <body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
  <button id="checkout">CheckOut</button>
</div>
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