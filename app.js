	if(localStorage.getItem("cart")){
            var cart = JSON.parse(localStorage.getItem('cart'));
            if(cart.length>0){
                document.getElementById("cartCount").innerHTML = cart.length;
            }
			
    }

		function addToCart(id) {
			
			if(localStorage.getItem("cart")){
				var cart = JSON.parse(localStorage.getItem('cart'));
				if(cart.includes(id)){
					console.log('Already in cart')
				} else {
					cart.push(id);
					localStorage.setItem("cart", JSON.stringify(cart));
				}
			
			} else {
				var cart = [];
				cart.push(id)
				localStorage.setItem("cart", JSON.stringify(cart));
			}

			document.getElementById("cartCount").innerHTML = cart.length;
			
			console.log(localStorage.getItem("cart"));
		}