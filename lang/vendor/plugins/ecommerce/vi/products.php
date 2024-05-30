<?php

return [
    'name' => 'Sản phẩm',
    'description' => 'View and update your products settings',
    'create' => 'Thêm sản phẩm mới',
    'create_product_type' => [
        'physical' => 'New physical product',
        'digital' => 'New digital product',
    ],
    'edit' => 'Sửa sản phẩm - :name',
    'form' => [
        'name' => 'Tên sản phẩm',
        'name_placeholder' => 'Tên sản phẩm (Tối đa 120 chữ cái)',
        'description' => 'Mô tả ngắn',
        'description_placeholder' => 'Mô tả ngắn gọn cho sản phẩm (Tối đa 400 chữ cái)',
        'product' => 'Sản phẩm',
        'categories' => 'Danh mục',
        'options' => 'Lựa chọn',
        'total' => 'Tổng tiền',
        'sub_total' => 'Tổng cộng trước thuế',
        'tax' => 'Thuế',
        'shipping_fee' => 'Phí vận chuyển',
        'Discount' => 'Giảm giá',
        'content' => 'Chi tiết sản phẩm',
        'price' => 'Đơn giá',
        'price_sale' => 'Giá giảm',
        'quantity' => 'Số lượng',
        'brand' => 'Thương hiệu',
        'width' => 'Rộng',
        'height' => 'Cao',
        'weight' => 'Cân nặng',
        'image' => 'Hình ảnh',
        'product_type' => [
            'title' => 'Loại sản phẩm',
        ],
        'stock' => [
            'title' => 'Tình trạng kho',
            'in_stock' => 'Còn hàng',
            'out_stock' => 'Hết hàng',
            'allow_order_when_out' => 'Cho phép đặt hàng khi hết',
        ],
        'storehouse' => [
            'title' => 'Quản lý kho',
            'no_storehouse' => 'Không quản lý kho',
            'storehouse' => 'Quản lý kho',
            'quantity' => 'Số lượng',
        ],
        'shipping' => [
            'title' => 'Giao hàng',
            'length' => 'Chiều dài',
            'wide' => 'Chiều rộng',
            'height' => 'Chiều cao',
            'weight' => 'Cân nặng',
        ],
        'date' => [
            'start' => 'Ngày bắt đầu',
            'end' => 'Ngày kết thúc',
        ],
        'tags' => 'Nhãn',
        'tax' => 'Thuế',
    ],
    'price' => 'Giá cơ bản',
    'quantity' => 'Số lượng',
    'type' => 'Loại sản phẩm',
    'image' => 'Ảnh',
    'sku' => 'Mã sản phẩm',
    'variation_sku' => 'Variation SKU',
    'brand' => 'Thương hiệu',
    'cannot_delete' => 'Product could not be deleted',
    'product_deleted' => 'Product deleted',
    'product_collections' => 'Product collections',
    'products' => 'Sản phẩm',
    'menu' => 'Sản phẩm',
    'control' => [
        'button_add_image' => 'Thêm hình ảnh',
    ],
    'price_sale' => 'Giá giảm',
    'price_group_title' => 'Manager product price',
    'store_house_group_title' => 'Manager store house',
    'shipping_group_title' => 'Manager shipping',
    'overview' => 'Tổng quan',
    'attributes' => 'Thuộc tính',
    'product_has_variations' => 'Sản phẩm có nhiều phiên bản',
    'manage_products' => 'Quản lý danh sách sản phẩm',
    'add_new_product' => 'Tạo sản phẩm',
    'start_by_adding_new_product' => 'Bắt đầu bán hàng bằng việc thêm sản phẩm.',
    'edit_this_product' => 'Edit this product',
    'delete' => 'Delete',
    'related_products' => 'Related products',
    'cross_selling_products' => 'Cross-selling products',
    'up_selling_products' => 'Up-selling products',
    'grouped_products' => 'Grouped products',
    'search_products' => 'Search products',
    'selected_products' => 'Selected products',
    'edit_variation_item' => 'Edit',
    'variations_box_description' => 'Click on "Edit attribute" to add/remove attributes of variation or click on "Add new variation" to add variation.',
    'save_changes' => 'Save changes',
    'continue' => 'Continue',
    'edit_attribute' => 'Edit attribute',
    'select_attribute' => 'Select attribute',
    'add_new_variation' => 'Add new variation',
    'edit_variation' => 'Edit variation',
    'generate_all_variations' => 'Generate all variations',
    'generate_all_variations_confirmation' => 'Are you sure you want to generate all variations for this product?',
    'delete_variation' => 'Delete variation?',
    'delete_variation_confirmation' => 'Are you sure you want to delete this variation? This action cannot be undo.',
    'delete_variations_confirmation' => 'Are you sure you want to delete those variations? This action cannot be undo.',
    'product_create_validate_name_required' => 'Please enter product\'s name',
    'product_create_validate_sale_price_max' => 'The discount must be less than the original price',
    'product_create_validate_cost_per_item_max' => 'The cost per item must be less than the original price',
    'product_create_validate_sale_price_required_if' => 'Must enter a discount when you want to schedule a promotion',
    'product_create_validate_end_date_after' => 'End date must be after start date',
    'product_create_validate_start_date_required_if' => 'Discount start date cannot be left blank when scheduling is selected',
    'product_create_validate_sale_price' => 'Discounts cannot be left blank when scheduling is selected',
    'stock_statuses' => [
        'in_stock' => 'In stock',
        'out_of_stock' => 'Out of stock',
        'on_backorder' => 'On backorder',
    ],
    'stock_status' => 'Stock status',
    'processing' => 'Processing...',
    'delete_selected_variations' => 'Delete selected variations',
    'delete_variations' => 'Delete variations',
    'category' => 'Category',
    'product_price_flash_sale_warning' => 'This product is in flash sale <strong>:name</strong> so its price is <strong>:price</strong>.',
    'product_price_discount_warning' => 'This product is in discount <strong>:name</strong> so its price is <strong>:price</strong>.',
    'product_image' => 'Product image',
    'product_name' => 'Product name',
    'types' => [
        'physical' => 'Physical',
        'digital' => 'Digital',
    ],
    'digital_attachments' => [
        'title' => 'Digital attachments',
        'add' => 'Add Attachment',
        'file_name' => 'File name',
        'file_size' => 'File size',
        'unsaved' => 'Unsaved',
        'add_external_link' => 'Add external link',
        'enter_file_name' => 'Enter file name',
        'enter_external_link_download' => 'Enter external link download',
        'enter_file_size' => 'Enter file size',
        'external_link_download' => 'External link download',
        'generate_license_code_after_purchasing_product' => 'Generate license code after purchasing this product?',
    ],
    'this_action_will_reload_page' => 'This action will reload the page to update the data!',
    'select' => 'Select',
    'set_this_variant_as_default' => 'Set this variant as default',
    'download' => 'Download',
    'cross_sell_price_type' => [
        'title' => 'Price type',
        'fixed' => 'Fixed',
        'percent' => 'Percent',
    ],
    'form.stock.in_stock' => 'In stock',
];
