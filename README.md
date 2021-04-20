## Installation
    composer require intervention/image
## Integration
    In the app.php > providers
    Intervention\Image\ImageServiceProvider::class
    
    
    In the app.php > aliases
    'Image' => Intervention\Image\Facades\Image::class
## Publish configuration in Laravel
    php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"
## Publish configuration in Laravel <= 4
    php artisan config:publish intervention/image
