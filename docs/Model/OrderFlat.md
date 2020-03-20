# OrderFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**auto_increment** | **int** |  | [optional] 
**order_number** | **string** |  | [optional] 
**billing_address_id** | **string** |  | 
**billing_address_version_id** | **string** |  | [optional] 
**currency_id** | **string** |  | 
**language_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**order_date_time** | [**\DateTime**](\DateTime.md) |  | 
**order_date** | **string** |  | [optional] 
**price** | [**\Swagger\Client\Model\OrderFlatPrice**](OrderFlatPrice.md) |  | [optional] 
**amount_total** | **float** |  | [optional] 
**amount_net** | **float** |  | [optional] 
**position_price** | **float** |  | [optional] 
**tax_status** | **string** |  | [optional] 
**shipping_costs** | [**\Swagger\Client\Model\OrderFlatShippingCosts**](OrderFlatShippingCosts.md) |  | [optional] 
**shipping_total** | **float** |  | [optional] 
**currency_factor** | **float** |  | 
**deep_link_code** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**state_id** | **string** |  | 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**state_machine_state** | [**\Swagger\Client\Model\StateMachineStateFlat**](StateMachineStateFlat.md) |  | [optional] 
**order_customer** | [**\Swagger\Client\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**currency** | [**\Swagger\Client\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**addresses** | [**\Swagger\Client\Model\OrderAddressFlat**](OrderAddressFlat.md) |  | [optional] 
**deliveries** | [**\Swagger\Client\Model\OrderDeliveryFlat**](OrderDeliveryFlat.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\OrderLineItemFlat**](OrderLineItemFlat.md) |  | [optional] 
**transactions** | [**\Swagger\Client\Model\OrderTransactionFlat**](OrderTransactionFlat.md) |  | [optional] 
**documents** | [**\Swagger\Client\Model\DocumentFlat**](DocumentFlat.md) |  | [optional] 
**tags** | [**\Swagger\Client\Model\TagFlat**](TagFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

