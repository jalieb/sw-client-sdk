# Swagger\Client\SalesChannelApiApi

All URIs are relative to *http://0.0.0.0/sales-channel-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCart**](SalesChannelApiApi.md#createcart) | **POST** /checkout/cart | 
[**getCrossSelling**](SalesChannelApiApi.md#getcrossselling) | **GET** /product/{id}/cross-selling | 

# **createCart**
> \Swagger\Client\Model\InlineResponse200 createCart($token, $name)



Create a new Cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalesChannelApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | the cart token
$name = "name_example"; // string | the carts name

try {
    $result = $apiInstance->createCart($token, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelApiApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**string**](../Model/.md)| the cart token | [optional]
 **name** | **string**| the carts name | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCrossSelling**
> \Swagger\Client\Model\InlineResponse2001[] getCrossSelling($id)



Get the cross selling products for given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\SalesChannelApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the product from which the cross-selling products should be loaded

try {
    $result = $apiInstance->getCrossSelling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelApiApi->getCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the product from which the cross-selling products should be loaded |

### Return type

[**\Swagger\Client\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

