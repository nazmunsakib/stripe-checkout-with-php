# Stripe Checkout Pay API Integration in PHP

This repository provides a simple example of integrating Stripe Checkout Pay API into a PHP project. Stripe Checkout Pay API allows you to easily accept payments on your website or mobile app.

## Getting Started

Follow these steps to get started with the integration:

1. **Clone the Repository:** Clone this repository to your local machine using:

    ```bash
    git clone https://github.com/nazmunsakib/stripe-checkout-with-php.git
    ```

2. **Install Dependencies:** Navigate to the project directory and install the dependencies using Composer:

    ```bash
    cd stripe-checkout-with-php
    composer install
    ```

3. **Set up Stripe Account:** Sign up for a Stripe account if you haven't already. Obtain your API keys from the Stripe Dashboard.

4. **Configure API Keys:** Open the `config.php` file and replace `'YOUR_PUBLISHABLE_KEY'` and `'YOUR_SECRET_KEY'` with your actual Stripe publishable and secret API keys respectively.

5. **Test Locally:** Start the PHP server and test the integration locally:

    ```bash
    php -S localhost:8000
    ```

6. **Open Browser:** Visit `http://localhost/stripe-checkout-with-php/` in your browser to see the checkout page.

## Usage

This integration demonstrates a basic usage of Stripe Checkout Pay API. You can customize the integration according to your requirements by referring to the [Stripe Documentation](https://stripe.com/docs/api).

### Directory Structure

- `index.php`: Entry point of the application. Contains the checkout form.
- `includes/checkout.php`: PHP script to handle the payment charge using Stripe API.
- `success.PHP`: Page displayed after a successful payment.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
