# PHP integration

The php integration is installable over composer

```
composer require arkham/komentify
```

## How to use

```php
use Komentify\IntegrationHandler;

$integrationHandler = new IntegrationHandler([
    'appId' => 'myAppId',
    'elementId' => 'divWrapperId'
]);

echo $integrationHandler->getScriptSnippet();
```

The options that can be specified are specified [here](/javascript/)
