<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Tải Font Awesome qua link (thay vì @import để tránh lỗi tải) -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
	#main{
		padding: 0 !important;
	}
    /* Footer */
    #footer {
        background: #007b5e !important;
        color: #ffffff;
        padding: 20px 0;
    }
    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color: #ffffff;
        font-size: 18px;
    }
    #footer .footer-widget {
        margin-bottom: 15px;
    }
    #footer .footer-widget ul {
        list-style: none;
        padding: 0;
    }
    #footer .footer-widget ul li {
        padding: 5px 0;
    }
    #footer .footer-widget ul li a {
        color: white;
        text-decoration: none;
    }
    #footer .footer-widget ul li a:hover {
        color: #eeeeee;
    }
    #footer .social {
        text-align: center;
        margin: 20px 0;
    }
    #footer .social li {
        display: inline-block;
        margin: 0 10px;
    }
    
    #footer .footer-bottom {
        text-align: center;
        padding-top: 10px;
        border-top: 1px solid #ffffff;
    }
    @media (max-width: 767px) {
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            margin-bottom: 10px;
        }
        #footer .col-md-4 {
            margin-bottom: 20px;
        }
    }

    /* Tùy chỉnh danh sách trang (Pages List) */
    .wp-block-page-list {
        list-style-type: none;
        padding: 0;
        color: #ffffff;
        background-color: #007b5e;
    }
    .wp-block-page-list li {
        padding: 5px 0;
        margin-left: 10px;
    }
    .wp-block-page-list li a {
        color: #ffffff;
        text-decoration: none;
        position: relative;
        padding-left: 20px;
    }
    .wp-block-page-list li a::before {
        content: "\f101"; /* Unicode fa-angle-double-right */
        font-family: 'FontAwesome'; /* Sửa: Dấu nháy đơn */
        position: absolute;
        left: 0;
        color: #ffffff;
        font-size: 16px;
    }
    /* Fallback nếu Font Awesome không tải: Hiển thị >> */
    .wp-block-page-list li a:before:not([class*="fa"]) {
        content: ">> " !important;
        font-family: inherit !important;
    }
    /* Đánh dấu trang hiện tại */
    .wp-block-page-list li.current-menu-item a {
        font-weight: bold;
        color: #ffffff;
        
    }
    .wp-block-page-list li a:hover {
        color: #eeeeee;
    }
    .wp-block-page-list li a:hover::before {
        color: #eeeeee;
    }

    /* Responsive cho Pages List */
    @media (max-width: 767px) {
        .wp-block-page-list li {
            margin-left: 5px;
        }
        .wp-block-page-list li a {
            padding-left: 15px;
        }
        .wp-block-page-list li a::before {
            font-size: 14px;
        }
    }

    /* Tùy chỉnh danh sách danh mục (Categories List) */
    .wp-block-categories-list {
        list-style-type: none;
        padding: 0;
    }
    .wp-block-categories li {
        padding: 5px 0;
        margin-left: 10px;
    }
    .wp-block-categories li a {
        text-decoration: none;
        position: relative;
        padding-left: 20px;
    }
    .wp-block-categories li a::before {
        content: "\f101"; /* Unicode fa-angle-double-right */
        font-family: 'FontAwesome'; /* Sửa: Dấu nháy đơn */
        position: absolute;
        left: 0;
        color: inherit;
        font-size: 16px;
    }
    /* Fallback nếu Font Awesome không tải: Hiển thị >> */
    .wp-block-categories li a:before:not([class*="fa"]) {
        content: ">> " !important;
        font-family: inherit !important;
    }

    /* Responsive cho Categories List */
    @media (max-width: 767px) {
        .wp-block-categories li {
            margin-left: 5px;
        }
        .wp-block-categories li a {
            padding-left: 15px;
        }
        .wp-block-categories li a::before {
            font-size: 14px;
        }
    }

   .wp-block-pages-list__item:hover {
    transform: translateX(20px);
    font-weight: bold;
        transition: 5s;
}

.cat-item:hover{
 transform: translateX(20px);
}
#footer .social i {
    color: white;           /* màu mặc định */
    font-size: 20px;        /* size mặc định */
    transition: all 0.3s ease; /* hiệu ứng chỉ áp dụng cho từng icon */
}

#footer .social i:hover {
    color: #eeeeee !important; 
    font-size: 30px;
    transform: scale(1.2);   /* phóng to mượt */
}



</style>

<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <h5 style="margin-left:10px;"> Quick links</h5> <!-- Thêm | để giống hình ảnh -->
                <?php if (is_active_sidebar('footer-widget-1')) : ?>
                    <?php dynamic_sidebar('footer-widget-1'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <h5 style="margin-left:10px;"> Quick links</h5>
                <?php if (is_active_sidebar('footer-widget-3')) : ?> <!-- Sửa: footer-widget-2 thay vì 3 -->
                    <?php dynamic_sidebar('footer-widget-3'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <h5 style="margin-left:10px;"> Quick links</h5>
                <?php if (is_active_sidebar('footer-widget-3')) : ?>
                    <?php dynamic_sidebar('footer-widget-3'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 social" >
                <ul class="list-unstyled list-inline" style="height:20px;">
                    <li class="list-inline-item"><a  href="https://www.facebook.com"><i style='color:white;' class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="mailto:info@example.com"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-bottom">
            <div class="col-12">
                <p>National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                <p>© All right Reversed. <a style='color:white!important' href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
            </div>
        </div>
    </div>
</section>
<!-- ./Footer -->