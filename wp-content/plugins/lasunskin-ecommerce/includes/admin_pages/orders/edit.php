<?php
    $orderId = isset($_GET['order_id']) ? $_GET['order_id'] : '';
    if ($orderId != '') {
        $objLasunskinOrder = new lasunskinOrder();
        $order = $objLasunskinOrder->find($orderId);
        $orderItems = $objLasunskinOrder->order_items($orderId);
    }
    pr($orderItems);
?>

<style>
    table.form-table.bordered th,table.form-table.bordered td {
        border: 1px solid #ccc;
        text-align: center;
    }
</style>
<div class="wrap">
    <h1 class="wp-heading-inline">Chi tiết đơn hàng số: <?=$order->id;?> </h1>
    <form id="posts-filter" method="post">
        <div id="poststuff">
            <div id="post-body" class="metabox-holder columns-2">
                <!-- Left columns -->
                <div id="post-body-content">
                    <!-- Thông tin đơn hàng -->
                    <div class="postbox ">
                        <div class="postbox-header">
                            <h2 class="hndle ui-sortable-handle">Thông tin đơn hàng</h2>
                        </div>
                        <div class="inside">
                            <table class="form-table  ">
                                <tr>
                                    <td>Mã đơn hàng</td>
                                    <td> <?=$order->id;?> </td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td> <?=date ('d-m-Y',strtotime($order->created));?> </td>
                                </tr>
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td> <?=$order->customer_name;?> </td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><?=$order->customer_phone;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?=$order->customer_email;?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td> <?=$order->customer_address;?> </td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>
                                        <textarea rows="5" class="large-text" readonly><?=$order->note;?></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- Chi tiết đơn hàng -->
                    <div class="postbox ">
                        <div class="postbox-header">
                            <h2 class="hndle">Chi tiết đơn hàng</h2>
                        </div>
                        <div class="inside">
                            <table class="form-table bordered">
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Iphone 11</td>
                                    <td>1</td>
                                    <td>20000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Iphone 12</td>
                                    <td>1</td>
                                    <td>20000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Right columns -->
                <div id="postbox-container-1">
                    <div class="postbox">
                        <div class="postbox-header">
                            <h2 class="hndle">Hành động</h2>
                        </div>
                        <div class="inside">
                            <div class="submitbox">
                                <p>
                                    <select name="order_status" class="large-text ">
                                        <option value="pending">Đơn hàng mới</option>
                                        <option value="completed">Đơn đã hoàn thành</option>
                                        <option value="canceled">Đơn đã hủy</option>
                                    </select>
                                </p>
                                <p>
                                    <input type="submit" name="submit" id="submit" class="button button-primary"
                                        value="Lưu thay đổi">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>