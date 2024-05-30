<?php

return [
    'name' => 'Shippo',
    'description' => 'All of the Carriers and Stores You Need',
    'note_0' => 'Before activating, please read the instructions below',
    'note_1' => 'Need to use cities, states, countries from Admin -> Locations, <a href=":link" target="_blank" rel="noopener noreferrer">:link</a>',
    'note_2' => 'Enabled "Load countries, states, cities from plugin location?" and "Enable Zip Code?" for Shippo to work correctly',
    'note_3' => 'Update city, state, country with location plugin data, enter and check the address and zip code in "<a href=":link" target="_blank">Basic information</a>"',
    'note_4' => 'Vendor needs to update Company & Zip Code. Update city, state, country with location plugin data',
    'note_5' => 'Shippo only allows to create transactions with shipment/rate within 24 hours, if more than 24 hours, please update the rate again',
    'note_6' => 'COD payment method refer <a href=":link" target="_blank" rel="noopener noreferrer">here</a>',
    'configuration_instruction' => 'Configuration instruction for :name',
    'configuration_requirement' => 'To use :name, you need',
    'service_registration' => 'Register with :name',
    'after_service_registration_msg' => 'After registration at :name, you will have API Key',
    'enter_api_key' => 'Enter API Key into the box in right hand',
    'please_provide_information' => 'Please provide information',
    'sandbox_mode' => 'Test mode',
    'activate' => 'Activate',
    'disabled_in_demo_mode' => 'You cannot update Shippo settings in demo mode!',
    'parcel' => 'Parcel',
    'estimated_days' => 'Estimated delivery in :day day(s)',
    'from_address' => 'From address',
    'to_address' => 'To address',
    'check_validate_token' => 'Check validate token?',
    'saved_shipping_settings_success' => 'Saved settings successfully!',
    'token_name_is_required' => ':name is required for the integration to work',
    'token_name_is_invalid' => ':name is invalid',
    'live_api_token' => 'Live API Token',
    'test_api_token' => 'Test API Token',
    'print_label' => 'Print label',
    'transaction' => [
        'created' => 'Created transaction #:tracking',
        'view_and_create' => 'View and Create transaction',
        'create' => 'Create transaction',
        'created_success' => 'Created transaction successfully!',
        'updated' => 'Updated transaction #:tracking',
    ],
    'tracking' => [
        'updated' => 'Updated tracking #:tracking',
        'statuses' => [
            'pre_transit' => 'The label is created but before the package is dropped off or picked up by the carrier.',
            'transit' => 'The package has been scanned by the carrier and is in transit.',
            'delivered' => 'The package has been successfully delivered.',
            'returned' => 'The package is en route to be returned to the sender, or has been returned successfully.',
            'failure' => 'The carrier indicated that there has been an issue with the delivery. This can happen for various reasons and depends on the carrier. This status does not indicate a technical, but a delivery issue.',
            'unknown' => 'The package has not been found via the carrier’s tracking system.',
        ],
    ],
    'view_other_exchange_rates' => 'View :count other exchange rates',
    'carrier_could_not_be_found' => 'The carrier for which the order was selected could not be found',
    'update_rate' => 'Update rate',
    'updated_rate_success' => 'Created rate successfully!',
    'recheck_rate' => 'Recheck rate',
    'shipment_object_id_not_found' => 'No matching shipping #:id information found',
    'order_amount' => 'Order amount',
    'logging' => 'Logging?',
    'webhooks' => 'Webhooks?',
    'cache_response' => 'Cache response?',
    'not_available_in_cod_payment_method' => "Shippo options won't be shown if the selected payment method is COD!",
];
