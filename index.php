<?php include 'header.php'; ?>
    
    <div class="stripe-checkout-wrapper">
        <div class="product-purchase-area">
            <h1><?php echo "Shop"; ?></h1>
            <form action="includes/checkout.php" method="post">
                <label for="fname"><?php echo "Product"; ?></label>
                <select name="product" id="product" required>
                    <option value=""><?php echo "Select"; ?></option>
                    <option value="t-shirt"><?php echo "T Shirt"; ?></option>
                    <option value="hoodie"><?php echo "Hoodie"; ?></option>
                </select>

                <label for="quantity"><?php echo "Quantity"; ?></label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="price"><?php echo "Price"; ?></label>
                <input type="number" id="price" name="price" readonly>

                <button type="submit"><?php echo "Purchase"; ?></button>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>
