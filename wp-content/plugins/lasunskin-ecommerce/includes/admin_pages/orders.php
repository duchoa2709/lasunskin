<?php
    $lassunskinOrder = new lasunskinOrder();
    $result = $lassunskinOrder->all();
    dd($result);
?>
<div class="wrap">
    <h1 class="wp-heading-inline">Quản lý đơn hàng</h1>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all"><a href="" class="current">Tất cả <span class="count">(3)</span></a>
            |</li>
        <li class="publish"><a href="">Đơn hàng mới</a> |</li>
        <li class="publish"><a href="">Đơn hàng đã hoàn thành</a> |
        </li>
        <li class="publish"><a href="">Đơn hàng đã hủy</a></li>
    </ul>
    <form id="posts-filter" method="get">
        <input type="hidden" name="page" value="wp2023-orders">
        <input type="hidden" name="paged" value="1">
        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input">Tìm các bài viết:</label>
            <input type="search" id="post-search-input" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="Tìm các bài viết">
        </p>
        <div class="tablenav top">
            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
                <select name="action" id="bulk-action-selector-top">
                    <option value="-1">Hành động</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">

                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label>
                <select name="status" id="cat" class="postform">
                    <option value="0">Tất cả trạng thái</option>
                    <option class="level-0" value="pending">Đơn hàng mới</option>
                    <option class="level-0" value="completed">Đơn đã hoàn thành</option>
                    <option class="level-0" value="canceled">Đơn đã hủy</option>
                </select>
                <input type="submit" id="post-query-submit" class="button" value="Lọc">
            </div>

            <div class="tablenav-pages">
                <span class="displaying-num">3 mục</span>
                <span class="pagination-links">
                    <a class="prev-page button" href="">
                        <span aria-hidden="true">‹</span>
                    </a>
                    <span class="screen-reader-text">Trang hiện tại</span>
                    <span id="table-paging" class="paging-input">
                        <span class="tablenav-paging-text">1 trên
                            <span class="total-pages">1</span>
                        </span>
                    </span>
                    <a class="next-page button" href="">
                        <span aria-hidden="true">›</span>
                    </a>
                </span>

            </div> <br class="clear">
        </div>
        <h2 class="screen-reader-text">Danh sách bài viết</h2>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text"
                            for="cb-select-all-1">Chọn toàn bộ</label><input id="cb-select-all-1" type="checkbox"></td>
                    <th class="manage-column column-primary">Mã đơn hàng</th>
                    <th class="manage-column">Tổng tiền</th>
                    <th class="manage-column">Khách hàng</th>
                    <th class="manage-column">Điện thoại</th>
                    <th class="manage-column">Trạng thái</th>
                    <th class="manage-column">Thời gian</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <tr id="post-3" class="iedit author-self level-0 post-3 status-publish hentry">
                    <th scope="row" class="check-column">
                        <input id="cb-select-3" type="checkbox" name="post[]" value="3">
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <strong>
                            <a class="row-title" href=""># 3</a>
                        </strong>
                    </td>
                    <td>20,000</td>
                    <td>NVC</td>
                    <td>0123456789</td>
                    <td>
                        <select name="" id="" class="order_status" data-order_id="3">
                            <option selected="" value="pending">Đơn hàng mới</option>
                            <option value="completed">Đơn đã hoàn thành</option>
                            <option value="canceled">Đơn đã hủy</option>
                        </select>
                    </td>
                    <td class="date column-date">2023-02-09</td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text"
                            for="cb-select-all-1">Chọn toàn bộ</label><input id="cb-select-all-1" type="checkbox"></td>
                    <th class="manage-column column-primary">Mã đơn hàng</th>
                    <th class="manage-column">Tổng tiền</th>
                    <th class="manage-column">Khách hàng</th>
                    <th class="manage-column">Điện thoại</th>
                    <th class="manage-column">Trạng thái</th>
                    <th class="manage-column">Thời gian</th>
                </tr>
            </tfoot>
        </table>
        <div class="tablenav bottom">
            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
                <select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>

            <div class="tablenav-pages">
                <span class="displaying-num">3 mục</span>
                <span class="pagination-links">
                    <a class="prev-page button" href="">
                        <span aria-hidden="true">‹</span>
                    </a>
                    <span class="screen-reader-text">Trang hiện tại</span>
                    <span id="table-paging" class="paging-input">
                        <span class="tablenav-paging-text">1 trên
                            <span class="total-pages">1</span>
                        </span>
                    </span>
                    <a class="next-page button" href="">
                        <span aria-hidden="true">›</span>
                    </a>
                </span>

            </div> <br class="clear">
        </div>
    </form>
</div>