# # PaymentReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | In which format is the report delivered in |
**callback_url** | **string** | To which URL is the report delivered to. Callback URLs must use HTTPS |
**payment_status** | **string** | How are the payments statuses filtered. \&quot;Default\&quot; includes both paid and settled payments. \&quot;Paid\&quot; includes paid payments that have not been settled yet. \&quot;All\&quot; includes everything, for example unpaid or failed payments. | [optional] [default to 'default']
**start_date** | **string** | Filter out payments created before given datetime. | [optional]
**end_date** | **string** | Filter out payments created after given datetime. | [optional]
**limit** | **int** | Limit the amount of payments included in the report. | [optional] [default to 50000]
**report_fields** | **string[]** | Limit the amount of fields included in the report. By default all fields are included. | [optional]
**submerchant** | **int** | Get submerchant&#39;s payment report | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
