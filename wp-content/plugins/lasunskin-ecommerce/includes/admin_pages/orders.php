<?php
    $lassunskinOrder = new lasunskinOrder();
    $result = $lassunskinOrder->paginate(2);

    extract($result);

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    if ($action == 'trash') {
        $orderIds = $_REQUEST['post'];
        if (count($orderIds)) {
            foreach ($orderIds as $orderId) {
                $lassunskinOrder->trash($orderId);
            }
        }
        custom_redirect('admin.php?page=lasunskin-orders');
        exit();
    }

    if (isset ($_GET['order_id']) && $_GET['order_id'] != ''){
        include lasunskin_PATH.'includes/admin_pages/orders/edit.php';
    }
    else {
        include lasunskin_PATH.'includes/admin_pages/orders/list.php';
    }
?>


<script>
    // duong dan xu li ajax
    let ajax_url = '<?= admin_url('admin-ajax.php'); ?>';
    jQuery(document).ready(function(){
        jQuery('.order_status').on('change',function(){
            let status = jQuery(this).val();
            var orderId = jQuery(this).attr("data-order-id");
            
            jQuery.ajax({
                url     : ajax_url,
                method  : 'POST',
                dataType:'json',
                data: {
                    action  : 'lasunkin_order_change_status',
                    order_id: orderId,
                    status  : status
                },
                success : function(res){
                    arlet('Cập nhật trạng thái thành công');
                },
                error   : function(error){
                    arlet('Cập nhật trạng thái thất bại');
                }
            })
        })
    })
</script>