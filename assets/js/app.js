;(function(){
    const getProduct    = document.getElementById('product');
    const totalPrice    = document.getElementById('total_price');
    const getPrice      = document.getElementById('price');
    const getQuantity   = document.getElementById('quantity');

    if( !getProduct || !getPrice || !getQuantity ){
        return false;
    }

    /**
     * Select product
     */
    if( getProduct ){
        getProduct.onchange = ()=>{
            const product = getProduct.value;
            const tShirtPrice = 19.99;
            const hoodiePrice = 29.22;
            const quantity    = 1;

            if( getQuantity ){
                getQuantity.value = quantity;
            }
            
           if( product ){
                if( 't-shirt' == product ){
                    totalPrice.value    = tShirtPrice;
                    getPrice.value      = tShirtPrice;
                }else if(  'hoodie' == product ){
                    totalPrice.value    = hoodiePrice;
                    getPrice.value      = hoodiePrice;
                }
           }else{
                totalPrice.value    = '';
                getPrice.value      = '';
                getQuantity.value   = '';
           }
        }
    }

    /**
     * Set product price
     */
    if( getQuantity ){
        getQuantity.onchange = () =>{
            setPrice();
        }
        getQuantity.onkeyup = () =>{
            setPrice();
        }
    }

    const setPrice = () =>{
        const quantity      = Number( getQuantity.value );
        const tShirtPrice   = 19.99 * quantity;
        const hoodiePrice   = 29.22 * quantity;
        const product       = getProduct.value;
        
        if( quantity ){
            if( 't-shirt' == product ){
                totalPrice.value = tShirtPrice;
            }else if(  'hoodie' == product ){
                totalPrice.value = hoodiePrice;
            }
        }else{
            totalPrice.value = '';
        }
    }

})();