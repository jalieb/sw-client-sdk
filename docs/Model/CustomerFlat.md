# CustomerFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**group_id** | **string** |  | 
**default_payment_method_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**language_id** | **string** |  | 
**last_payment_method_id** | **string** |  | [optional] 
**default_billing_address_id** | **string** |  | 
**default_shipping_address_id** | **string** |  | 
**auto_increment** | **int** |  | [optional] 
**customer_number** | **string** |  | 
**salutation_id** | **string** |  | 
**first_name** | **string** |  | 
**last_name** | **string** |  | 
**company** | **string** |  | [optional] 
**email** | **string** |  | 
**title** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**active** | **bool** |  | [optional] 
**double_opt_in_registration** | **bool** |  | [optional] 
**double_opt_in_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**double_opt_in_confirm_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**hash** | **string** |  | [optional] 
**guest** | **bool** |  | [optional] 
**first_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**newsletter** | **bool** |  | [optional] 
**birthday** | **string** |  | [optional] 
**last_order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_count** | **int** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**remote_address** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**group** | [**\Swagger\Client\Model\CustomerGroupFlat**](CustomerGroupFlat.md) |  | [optional] 
**default_payment_method** | [**\Swagger\Client\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**sales_channel** | [**\Swagger\Client\Model\SalesChannelFlat**](SalesChannelFlat.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**last_payment_method** | [**\Swagger\Client\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**default_billing_address** | [**\Swagger\Client\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**default_shipping_address** | [**\Swagger\Client\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**salutation** | [**\Swagger\Client\Model\SalutationFlat**](SalutationFlat.md) |  | [optional] 
**addresses** | [**\Swagger\Client\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**order_customers** | [**\Swagger\Client\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**tags** | [**\Swagger\Client\Model\TagFlat**](TagFlat.md) |  | [optional] 
**promotions** | [**\Swagger\Client\Model\PromotionFlat**](PromotionFlat.md) |  | [optional] 
**product_reviews** | [**\Swagger\Client\Model\ProductReviewFlat**](ProductReviewFlat.md) |  | [optional] 
**recovery_customer** | [**\Swagger\Client\Model\CustomerRecoveryFlat**](CustomerRecoveryFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

