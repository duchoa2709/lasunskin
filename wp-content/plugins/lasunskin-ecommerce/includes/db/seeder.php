<?php
global $wpdb;
$tbl_orders = $wpdb->prefix.'lasunskin_orders';//wp_lsk_lasunskin_orders
$tbl_orders_detail = $wpdb->prefix.'lasunskin_orders_detail';//wp_lsk_lasunskin_orders_detail
//chen du lieu mau
$orders = [
    [
        'created'           => '2020-01-01',
        'total'             => 100000,
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'Nguyen Van A',
        'customer_phone'    => '0123456789',
        'customer_address'  => 'Ha Noi',
        'customer_email'    => 'AAA@gmail.com',
        'note'              => 'Khong co ghi chu',
    ],
    [
        'created'           => '2023-09-27',
        'total'             => 12345,
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'phan duc hoa',
        'customer_phone'    => '0123456789',
        'customer_address'  => 'hvm',
        'customer_email'    => 'duchoa27@gmail.com',
        'note'              => 'ehe',
    ],
    [
        'created'           => '2021-10-09',
        'total'             => 310323,
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'Dang Ngoc Khanh My',
        'customer_phone'    => '13131213213',
        'customer_address'  => 'dn',
        'customer_email'    => 'km@gmail.com',
        'note'              => 'giao nhanh',
    ],
];
global $wpdb;
foreach ($orders as $order) {
    $wpdb->insert($tbl_orders, $order);
}
$orders_detail = [
    [
        'order_id'      => 1,
        'product_id'    => 1,
        'quantity'      => 1,
        'price'         => 100000,
    ],
    [
        'order_id'      => 2,
        'product_id'    => 2,
        'quantity'      => 2,
        'price'         => 200000,
    ],
];
foreach ($orders_detail as $order_detail) {
    $wpdb->insert($tbl_orders_detail, $order_detail);
}