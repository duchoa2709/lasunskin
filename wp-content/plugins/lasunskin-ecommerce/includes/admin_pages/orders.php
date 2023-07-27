<div class="wrap">
    <h1 class="wp-heading-inline">
        Các Sản Phẩm</h1>

    <a href="http://localhost/lasunskin/wp-admin/post-new.php?post_type=product" class="page-title-action">Viết bài
        mới</a>
    <hr class="wp-header-end">


    <h2 class="screen-reader-text">Lọc danh sách bài đăng</h2>
    <ul class="subsubsub">
        <li class="all"><a href="edit.php?post_type=product" class="current" aria-current="page">Tất cả <span
                    class="count">(3)</span></a> |</li>
        <li class="publish"><a href="edit.php?post_status=publish&amp;post_type=product">Đã xuất bản <span
                    class="count">(3)</span></a></li>
    </ul>
    <form id="posts-filter" method="get">

        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input">Tìm các bài viết:</label>
            <input type="search" id="post-search-input" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="Tìm các bài viết">
        </p>

        <input type="hidden" name="post_status" class="post_status_page" value="all">
        <input type="hidden" name="post_type" class="post_type_page" value="product">



        <input type="hidden" id="_wpnonce" name="_wpnonce" value="10c881d8da"><input type="hidden"
            name="_wp_http_referer" value="/lasunskin/wp-admin/edit.php?post_type=product">
        <div class="tablenav top">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action" id="bulk-action-selector-top">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
                <label for="filter-by-date" class="screen-reader-text">Lọc theo ngày</label>
                <select name="m" id="filter-by-date">
                    <option selected="selected" value="0">Tất cả các ngày</option>
                    <option value="202307">Tháng Bảy 2023</option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            <div class="tablenav-pages one-page"><span class="displaying-num">3 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled"
                        aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện
                            tại</label><input class="current-page" id="current-page-selector" type="text" name="paged"
                            value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> trên
                            <span class="total-pages">1</span></span></span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
            </div>
            <br class="clear">
        </div>
        <h2 class="screen-reader-text">Danh sách bài viết</h2>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text"
                            for="cb-select-all-1">Chọn toàn bộ</label><input id="cb-select-all-1" type="checkbox"></td>
                    <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=title&amp;order=asc"><span>Tiêu
                                đề</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" id="taxonomy-product_cat" class="manage-column column-taxonomy-product_cat">Danh Mục
                    </th>
                    <th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=comment_count&amp;order=asc"><span><span
                                    class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span
                                    class="screen-reader-text">Bình luận</span></span><span
                                class="sorting-indicator"></span></a></th>
                    <th scope="col" id="date" class="manage-column column-date sortable asc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=date&amp;order=desc"><span>Thời
                                gian</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" id="product_price" class="manage-column column-product_price">Giá sản phẩm</th>
                    <th scope="col" id="product_price_sale" class="manage-column column-product_price_sale">Giá khuyến
                        mãi</th>
                    <th scope="col" id="product_stock" class="manage-column column-product_stock">Số lượng</th>
                </tr>
            </thead>

            <tbody id="the-list">
                <tr id="post-119"
                    class="iedit author-self level-0 post-119 type-product status-publish has-post-thumbnail hentry">
                    <th scope="row" class="check-column"> <label class="screen-reader-text" for="cb-select-119">
                            Chọn abc </label>
                        <input id="cb-select-119" type="checkbox" name="post[]" value="119">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “abc” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span>
                        </div>
                        <strong><a class="row-title"
                                href="http://localhost/lasunskin/wp-admin/post.php?post=119&amp;action=edit"
                                aria-label="“abc” (Chỉnh sửa)">abc</a></strong>

                        <div class="hidden" id="inline_119">
                            <div class="post_title">abc</div>
                            <div class="post_name">abc</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">closed</div>
                            <div class="_status">publish</div>
                            <div class="jj">25</div>
                            <div class="mm">07</div>
                            <div class="aa">2023</div>
                            <div class="hh">08</div>
                            <div class="mn">02</div>
                            <div class="ss">48</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="product_cat_119"></div>
                            <div class="sticky"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=119&amp;action=edit"
                                    aria-label="Sửa “abc”">Chỉnh sửa</a> | </span><span
                                class="inline hide-if-no-js"><button type="button" class="button-link editinline"
                                    aria-label="Chỉnh sửa nhanh “abc”" aria-expanded="false">Sửa nhanh</button> |
                            </span><span class="trash"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=119&amp;action=trash&amp;_wpnonce=e38d092a2c"
                                    class="submitdelete" aria-label="Bỏ “abc” vào thùng rác">Thùng rác</a> |
                            </span><span class="view"><a href="http://localhost/lasunskin/products/abc/" rel="bookmark"
                                    aria-label="Xem “abc”">Xem</a></span></div><button type="button"
                            class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="taxonomy-product_cat column-taxonomy-product_cat" data-colname="Danh Mục"><span
                            aria-hidden="true">—</span><span class="screen-reader-text">Không có chuyên mục</span></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <span aria-hidden="true">—</span><span class="screen-reader-text">Chưa có bình
                                luận</span><span
                                class="post-com-count post-com-count-pending post-com-count-no-pending"><span
                                    class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span
                                    class="screen-reader-text">Chưa có bình luận</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>25/07/2023 lúc 8:02 sáng</td>
                    <td class="product_price column-product_price" data-colname="Giá sản phẩm">34,513,232</td>
                    <td class="product_price_sale column-product_price_sale" data-colname="Giá khuyến mãi">78,943,435
                    </td>
                    <td class="product_stock column-product_stock" data-colname="Số lượng">1357</td>
                </tr>
                <tr id="post-117"
                    class="iedit author-self level-0 post-117 type-product status-publish has-post-thumbnail hentry product_cat-san-pham-cho-da-mun">
                    <th scope="row" class="check-column"> <label class="screen-reader-text" for="cb-select-117">
                            Chọn a </label>
                        <input id="cb-select-117" type="checkbox" name="post[]" value="117">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “a” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span>
                        </div>
                        <strong><a class="row-title"
                                href="http://localhost/lasunskin/wp-admin/post.php?post=117&amp;action=edit"
                                aria-label="“a” (Chỉnh sửa)">a</a></strong>

                        <div class="hidden" id="inline_117">
                            <div class="post_title">a</div>
                            <div class="post_name">a</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">closed</div>
                            <div class="_status">publish</div>
                            <div class="jj">25</div>
                            <div class="mm">07</div>
                            <div class="aa">2023</div>
                            <div class="hh">04</div>
                            <div class="mn">19</div>
                            <div class="ss">12</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="product_cat_117">8</div>
                            <div class="sticky"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=117&amp;action=edit"
                                    aria-label="Sửa “a”">Chỉnh sửa</a> | </span><span
                                class="inline hide-if-no-js"><button type="button" class="button-link editinline"
                                    aria-label="Chỉnh sửa nhanh “a”" aria-expanded="false">Sửa nhanh</button> |
                            </span><span class="trash"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=117&amp;action=trash&amp;_wpnonce=919761edba"
                                    class="submitdelete" aria-label="Bỏ “a” vào thùng rác">Thùng rác</a> | </span><span
                                class="view"><a href="http://localhost/lasunskin/products/a/" rel="bookmark"
                                    aria-label="Xem “a”">Xem</a></span></div><button type="button"
                            class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="taxonomy-product_cat column-taxonomy-product_cat" data-colname="Danh Mục"><a
                            href="edit.php?post_type=product&amp;product_cat=san-pham-cho-da-mun">Sản Phẩm Cho Da
                            Mụn</a></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <span aria-hidden="true">—</span><span class="screen-reader-text">Chưa có bình
                                luận</span><span
                                class="post-com-count post-com-count-pending post-com-count-no-pending"><span
                                    class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span
                                    class="screen-reader-text">Chưa có bình luận</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>25/07/2023 lúc 4:19 sáng</td>
                    <td class="product_price column-product_price" data-colname="Giá sản phẩm">12,345</td>
                    <td class="product_price_sale column-product_price_sale" data-colname="Giá khuyến mãi">11</td>
                    <td class="product_stock column-product_stock" data-colname="Số lượng">11</td>
                </tr>
                <tr id="post-69"
                    class="iedit author-self level-0 post-69 type-product status-publish has-post-thumbnail hentry product_cat-san-pham-cho-da-dau">
                    <th scope="row" class="check-column"> <label class="screen-reader-text" for="cb-select-69">
                            Chọn Remelas solution for melasma skin </label>
                        <input id="cb-select-69" type="checkbox" name="post[]" value="69">
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “Remelas solution for melasma skin” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span>
                        </div>
                        <strong><a class="row-title"
                                href="http://localhost/lasunskin/wp-admin/post.php?post=69&amp;action=edit"
                                aria-label="“Remelas solution for melasma skin” (Chỉnh sửa)">Remelas solution for
                                melasma skin</a></strong>

                        <div class="hidden" id="inline_69">
                            <div class="post_title">Remelas solution for melasma skin</div>
                            <div class="post_name">remelas-solution-for-melasma-skin</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">closed</div>
                            <div class="ping_status">closed</div>
                            <div class="_status">publish</div>
                            <div class="jj">19</div>
                            <div class="mm">07</div>
                            <div class="aa">2023</div>
                            <div class="hh">09</div>
                            <div class="mn">29</div>
                            <div class="ss">00</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="product_cat_69">9</div>
                            <div class="sticky"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=69&amp;action=edit"
                                    aria-label="Sửa “Remelas solution for melasma skin”">Chỉnh sửa</a> | </span><span
                                class="inline hide-if-no-js"><button type="button" class="button-link editinline"
                                    aria-label="Chỉnh sửa nhanh “Remelas solution for melasma skin”"
                                    aria-expanded="false">Sửa nhanh</button> | </span><span class="trash"><a
                                    href="http://localhost/lasunskin/wp-admin/post.php?post=69&amp;action=trash&amp;_wpnonce=b9113d16a2"
                                    class="submitdelete"
                                    aria-label="Bỏ “Remelas solution for melasma skin” vào thùng rác">Thùng rác</a> |
                            </span><span class="view"><a
                                    href="http://localhost/lasunskin/products/remelas-solution-for-melasma-skin/"
                                    rel="bookmark" aria-label="Xem “Remelas solution for melasma skin”">Xem</a></span>
                        </div><button type="button" class="toggle-row"><span class="screen-reader-text">Hiển thị chi
                                tiết</span></button>
                    </td>
                    <td class="taxonomy-product_cat column-taxonomy-product_cat" data-colname="Danh Mục"><a
                            href="edit.php?post_type=product&amp;product_cat=san-pham-cho-da-dau">Sản Phẩm Cho Da
                            Dầu</a></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <span aria-hidden="true">—</span><span class="screen-reader-text">Chưa có bình
                                luận</span><span
                                class="post-com-count post-com-count-pending post-com-count-no-pending"><span
                                    class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span
                                    class="screen-reader-text">Chưa có bình luận</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>19/07/2023 lúc 9:29 sáng</td>
                    <td class="product_price column-product_price" data-colname="Giá sản phẩm">1</td>
                    <td class="product_price_sale column-product_price_sale" data-colname="Giá khuyến mãi">9</td>
                    <td class="product_stock column-product_stock" data-colname="Số lượng">3</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td class="manage-column column-cb check-column"><label class="screen-reader-text"
                            for="cb-select-all-2">Chọn toàn bộ</label><input id="cb-select-all-2" type="checkbox"></td>
                    <th scope="col" class="manage-column column-title column-primary sortable desc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=title&amp;order=asc"><span>Tiêu
                                đề</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" class="manage-column column-taxonomy-product_cat">Danh Mục</th>
                    <th scope="col" class="manage-column column-comments num sortable desc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=comment_count&amp;order=asc"><span><span
                                    class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span
                                    class="screen-reader-text">Bình luận</span></span><span
                                class="sorting-indicator"></span></a></th>
                    <th scope="col" class="manage-column column-date sortable asc"><a
                            href="http://localhost/lasunskin/wp-admin/edit.php?post_type=product&amp;orderby=date&amp;order=desc"><span>Thời
                                gian</span><span class="sorting-indicator"></span></a></th>
                    <th scope="col" class="manage-column column-product_price">Giá sản phẩm</th>
                    <th scope="col" class="manage-column column-product_price_sale">Giá khuyến mãi</th>
                    <th scope="col" class="manage-column column-product_stock">Số lượng</th>
                </tr>
            </tfoot>

        </table>
        <div class="tablenav bottom">

            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng
                    loạt</label><select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>
            <div class="tablenav-pages one-page"><span class="displaying-num">3 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled"
                        aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="screen-reader-text">Trang hiện tại</span><span id="table-paging"
                        class="paging-input"><span class="tablenav-paging-text">1 trên <span
                                class="total-pages">1</span></span></span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
            </div>
            <br class="clear">
        </div>

    </form>


    <form method="get">
        <table style="display: none">
            <tbody id="inlineedit">
                <tr id="inline-edit"
                    class="inline-edit-row inline-edit-row-post quick-edit-row quick-edit-row-post inline-edit-product"
                    style="display: none">
                    <td colspan="8" class="colspanchange">
                        <div class="inline-edit-wrapper" role="region" aria-labelledby="quick-edit-legend">
                            <fieldset class="inline-edit-col-left">
                                <legend class="inline-edit-legend" id="quick-edit-legend">Sửa nhanh</legend>
                                <div class="inline-edit-col">



                                    <label>
                                        <span class="title">Tiêu đề</span>
                                        <span class="input-text-wrap"><input type="text" name="post_title"
                                                class="ptitle" value=""></span>
                                    </label>


                                    <label>
                                        <span class="title">Đường dẫn</span>
                                        <span class="input-text-wrap"><input type="text" name="post_name" value=""
                                                autocomplete="off" spellcheck="false"></span>
                                    </label>




                                    <fieldset class="inline-edit-date">
                                        <legend><span class="title">Thời gian</span></legend>
                                        <div class="timestamp-wrap"><label><span
                                                    class="screen-reader-text">Tháng</span><select class="form-required"
                                                    name="mm">
                                                    <option value="01" data-text="Th1">01-Th1</option>
                                                    <option value="02" data-text="Th2">02-Th2</option>
                                                    <option value="03" data-text="Th3">03-Th3</option>
                                                    <option value="04" data-text="Th4">04-Th4</option>
                                                    <option value="05" data-text="Th5">05-Th5</option>
                                                    <option value="06" data-text="Th6">06-Th6</option>
                                                    <option value="07" data-text="Th7" selected="selected">07-Th7
                                                    </option>
                                                    <option value="08" data-text="Th8">08-Th8</option>
                                                    <option value="09" data-text="Th9">09-Th9</option>
                                                    <option value="10" data-text="Th10">10-Th10</option>
                                                    <option value="11" data-text="Th11">11-Th11</option>
                                                    <option value="12" data-text="Th12">12-Th12</option>
                                                </select></label> <label><span class="screen-reader-text">Ban
                                                    ngày</span><input type="text" name="jj" value="25" size="2"
                                                    maxlength="2" autocomplete="off" class="form-required"></label>,
                                            <label><span class="screen-reader-text">Năm</span><input type="text"
                                                    name="aa" value="2023" size="4" maxlength="4" autocomplete="off"
                                                    class="form-required"></label> vào lúc <label><span
                                                    class="screen-reader-text">Giờ</span><input type="text" name="hh"
                                                    value="08" size="2" maxlength="2" autocomplete="off"
                                                    class="form-required"></label>:<label><span
                                                    class="screen-reader-text">Phút</span><input type="text" name="mn"
                                                    value="02" size="2" maxlength="2" autocomplete="off"
                                                    class="form-required"></label></div><input type="hidden" id="ss"
                                            name="ss" value="48">
                                    </fieldset>
                                    <br class="clear">



                                    <div class="inline-edit-group wp-clearfix">
                                        <label class="alignleft">
                                            <span class="title">Mật khẩu</span>
                                            <span class="input-text-wrap"><input type="text" name="post_password"
                                                    class="inline-edit-password-input" value=""></span>
                                        </label>

                                        <span class="alignleft inline-edit-or">
                                            – HOẶC – </span>
                                        <label class="alignleft inline-edit-private">
                                            <input type="checkbox" name="keep_private" value="private">
                                            <span class="checkbox-title">Riêng tư</span>
                                        </label>
                                    </div>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-center inline-edit-categories">
                                <div class="inline-edit-col">


                                    <span class="title inline-edit-categories-label">Danh Mục</span>
                                    <input type="hidden" name="tax_input[product_cat][]" value="0">
                                    <ul class="cat-checklist product_cat-checklist">

                                        <li id="product_cat-9" class="popular-category"><label class="selectit"><input
                                                    value="9" type="checkbox" name="tax_input[product_cat][]"
                                                    id="in-product_cat-9"> Sản Phẩm Cho Da Dầu</label></li>

                                        <li id="product_cat-8" class="popular-category"><label class="selectit"><input
                                                    value="8" type="checkbox" name="tax_input[product_cat][]"
                                                    id="in-product_cat-8"> Sản Phẩm Cho Da Mụn</label></li>
                                    </ul>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-right">
                                <div class="inline-edit-col">







                                    <div class="inline-edit-group wp-clearfix">


                                        <label class="alignleft">
                                            <input type="checkbox" name="comment_status" value="open">
                                            <span class="checkbox-title">Cho phép gửi phản hồi</span>
                                        </label>



                                    </div>



                                    <div class="inline-edit-group wp-clearfix">

                                        <label class="inline-edit-status alignleft">
                                            <span class="title">Trạng thái</span>
                                            <select name="_status">

                                                <option value="publish">Đã xuất bản</option>
                                                <option value="future">Đã lên lịch</option>

                                                <option value="pending">Chờ duyệt</option>
                                                <option value="draft">Bản nháp</option>
                                            </select>
                                        </label>


                                    </div>


                                </div>
                            </fieldset>


                            <div class="submit inline-edit-save">
                                <input type="hidden" id="_inline_edit" name="_inline_edit" value="1b11b62afe"> <button
                                    type="button" class="button button-primary save">Cập nhật</button>

                                <button type="button" class="button cancel">Hủy</button>

                                <span class="spinner"></span>

                                <input type="hidden" name="post_view" value="list">
                                <input type="hidden" name="screen" value="edit-product">
                                <input type="hidden" name="post_author" value="">

                                <div class="notice notice-error notice-alt inline hidden">
                                    <p class="error"></p>
                                </div>
                            </div>
                        </div> <!-- end of .inline-edit-wrapper -->

                    </td>
                </tr>

                <tr id="bulk-edit"
                    class="inline-edit-row inline-edit-row-post bulk-edit-row bulk-edit-row-post bulk-edit-product"
                    style="display: none">
                    <td colspan="8" class="colspanchange">
                        <div class="inline-edit-wrapper" role="region" aria-labelledby="bulk-edit-legend">
                            <fieldset class="inline-edit-col-left">
                                <legend class="inline-edit-legend" id="bulk-edit-legend">Chỉnh sửa hàng loạt</legend>
                                <div class="inline-edit-col">



                                    <div id="bulk-title-div">
                                        <div id="bulk-titles"></div>
                                    </div>






                                </div>
                            </fieldset>
                            <fieldset class="inline-edit-col-center inline-edit-categories">
                                <div class="inline-edit-col">


                                    <span class="title inline-edit-categories-label">Danh Mục</span>
                                    <input type="hidden" name="tax_input[product_cat][]" value="0">
                                    <ul class="cat-checklist product_cat-checklist">

                                        <li id="product_cat-9" class="popular-category"><label class="selectit"><input
                                                    value="9" type="checkbox" name="tax_input[product_cat][]"
                                                    id="in-product_cat-9"> Sản Phẩm Cho Da Dầu</label></li>

                                        <li id="product_cat-8" class="popular-category"><label class="selectit"><input
                                                    value="8" type="checkbox" name="tax_input[product_cat][]"
                                                    id="in-product_cat-8"> Sản Phẩm Cho Da Mụn</label></li>
                                    </ul>


                                </div>
                            </fieldset>


                            <fieldset class="inline-edit-col-right">
                                <div class="inline-edit-col">







                                    <div class="inline-edit-group wp-clearfix">


                                        <label class="alignleft">
                                            <span class="title">Bình luận</span>
                                            <select name="comment_status">
                                                <option value="">— Không đổi —</option>
                                                <option value="open">Cho phép</option>
                                                <option value="closed">Không cho phép</option>
                                            </select>
                                        </label>



                                    </div>



                                    <div class="inline-edit-group wp-clearfix">

                                        <label class="inline-edit-status alignleft">
                                            <span class="title">Trạng thái</span>
                                            <select name="_status">
                                                <option value="-1">— Không đổi —</option>

                                                <option value="publish">Đã xuất bản</option>

                                                <option value="private">Riêng tư</option>

                                                <option value="pending">Chờ duyệt</option>
                                                <option value="draft">Bản nháp</option>
                                            </select>
                                        </label>


                                    </div>


                                </div>
                            </fieldset>


                            <div class="submit inline-edit-save">
                                <input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary"
                                    value="Cập nhật">
                                <button type="button" class="button cancel">Hủy</button>


                                <input type="hidden" name="post_view" value="list">
                                <input type="hidden" name="screen" value="edit-product">

                                <div class="notice notice-error notice-alt inline hidden">
                                    <p class="error"></p>
                                </div>
                            </div>
                        </div> <!-- end of .inline-edit-wrapper -->

                    </td>
                </tr>

            </tbody>
        </table>
    </form>

    <div id="ajax-response"></div>
    <div class="clear"></div>
</div>