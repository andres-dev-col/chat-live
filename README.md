# Live Chat Application

This is a live chat application built with Laravel and Livewire.

## Features

*   User management
*   Chat management
*   Real-time messaging

## Technologies Used

*   Laravel
*   Livewire
*   PHP
*   MySQL
*   CSS
*   JavaScript

## Installation

1.  Clone the repository:

    ```
    git clone <repository-url>
    ```
2.  Install Composer dependencies:

    ```
    composer install
    ```
3.  Copy the `.env.example` file to `.env` and configure your database settings.
4.  Generate an application key:

    ```
    php artisan key:generate
    ```
5.  Run database migrations:

    ```
    php artisan migrate
    ```
6.  Seed the database (optional):

    ```
    php artisan db:seed
    ```
7.  Install NPM dependencies:

    ```
    npm install
    ```
8.  Compile assets:

    ```
    npm run dev
    ```
9.  Create an account on [Pusher](https://pusher.com/) and create a new app.
10. Add the Pusher credentials to your `.env` file:

    ```
    PUSHER_APP_ID=your-app-id
    PUSHER_APP_KEY=your-app-key
    PUSHER_APP_SECRET=your-app-secret
    PUSHER_APP_CLUSTER=your-app-cluster
    ```
11. Start the development server:

    ```
    php artisan serve
    ```

## Contributing

Contributions are welcome! Please submit a pull request with your changes.

## License

[MIT](https://opensource.org/licenses/MIT)
