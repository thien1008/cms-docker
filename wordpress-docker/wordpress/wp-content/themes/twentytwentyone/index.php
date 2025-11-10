<?php get_header(); ?>

<style>

 .custom-posts-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #ffffff;
}

.post-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
   
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    background: #ffffff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    transition: box-shadow 0.3s ease;
    gap: 20px;
}

.post-item:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.post-content-section {
    flex: 1;
    display: flex;
    gap: 20px;
}

.post-image {
    flex: 0 0 280px;
}

.post-image img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
}

.post-details {
    flex: 1;
	padding: 15px;
    padding-left:0px;
}

.post-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 15px;
}

.post-date-display {
    display: flex;
    align-items: center;       /* canh giữa theo chiều dọc */
    border: 1px solid #e0e0e0; /* viền mảnh */
    padding: 10px 15px;
    border-top: none;
border-left: none;
    font-family: 'Arial', sans-serif;
    width: fit-content;        /* ô gọn theo nội dung */
}

.post-date-display .post-day {
    font-size: 48px;        /* số ngày to */
    font-weight: bold;
    color: #0d47a1;
    line-height: 1;
    margin-right: 10px;     /* khoảng cách sang cột tháng-năm */
}

.post-date-display .post-month-year {
    display: flex;
    flex-direction: column; /* xếp tháng và năm dọc */
    text-align: left;
}

.post-date-display .post-month {
    font-size: 14px;
    text-transform: uppercase;
    color: #777;            /* màu xám */
    line-height: 1.2;
}

.post-date-display .post-year {
    font-size: 18px;
    color: #1976d2;         /* màu xanh nổi bật */
    line-height: 1.2;
    font-weight: 500;
}


.post-title {
    margin: 0 0 5px 0;       /* khoảng cách với categories */
    font-size: 22px;
    font-weight: bold;
    line-height: 1.3;
}

.post-title a {
    color: black;
    text-decoration: none;
    display: -webkit-box;
    -webkit-line-clamp: 2;   /* tối đa 2 dòng */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.post-title a:hover {
    text-decoration: underline;
}

.post-categories {
    font-size: 12px;
    color: #6c757d;
}

.post-categories a {
    color: #0d47a1;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;
}

.post-categories a:hover {
    text-decoration: underline;
}

.post-excerpt {
    font-size: 15px;
    line-height: 1.6;
    color: #666;
    margin: 0;
}

.no-posts {
    text-align: center;
    padding: 60px 20px;
    color: #666;
    font-size: 18px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .post-item {
        flex-direction: column;
        
    }
    
    .post-content-section {
        flex-direction: column;
        gap: 15px;
    }
    
    .post-image {
        flex: none;
        order: -1;
    }
    
    .post-image img {
        height: 200px;
    }
    
    .post-header {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
    
    .post-day {
        font-size: 36px;
    }
    
    .post-title {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .custom-posts-container {
        padding: 15px;
    }
    
    .post-item {
        padding: 15px;
        margin-bottom: 20px;
    }
    
    .post-title {
        font-size: 18px;
    }
    
    .post-excerpt {
        font-size: 14px;
    }
    
    .post-day {
        font-size: 32px;
    }
}
</style>
<div class="custom-posts-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post-item">
                <div class="post-content-section">
                    <div class="post-image">
                    <!-- wp:post-featured-image {"width":280,"height":180,"scale":"cover","className":"custom-post-image"} /-->
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('medium_large', ['style' => 'width:100%; height:180px; object-fit:cover; border-radius:6px; border:1px solid #e0e0e0;']);
						} else {
							echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/placeholder.png') . '" alt="Placeholder" style="width:100%; height:180px; object-fit:cover; border-radius:6px; border:1px solid #e0e0e0;">';
						}
						?>
                    </div>
                    <!--/wp:post-featured-image-->
                    <div class="post-details">
                        <div class="post-header">
                            <div class="post-date-display">
                                <div class="post-day"><?php echo get_the_date('d'); ?></div>
                                <div class="post-month-year">
                                    <div class="post-month">
                                    THÁNG <?php echo get_the_date('n'); ?> 
                                </div>
                                 <div class="post-year">
                                    <?php echo get_the_date('Y'); ?>
                                </div>
                                </div>
                               
                            </div>
                            <div class="post-title-categories" style="">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                                <div class="post-categories">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<span style="color: blue; font-size: 12px; margin-right: 8px;">Categories:</span>';
                                foreach ($categories as $category) {
                                    echo '<a style="color: #6c757d;" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                                }
                            }
                            ?>
                        </div>
                            </div>
                            
                            
                        </div>
                        
                    
                        
                        <div class="post-excerpt">
                            <?php 
                            $excerpt = get_the_excerpt();
                            if ($excerpt) {
                                echo wp_trim_words($excerpt, 25, '...');
                            } else {
                                echo wp_trim_words(get_the_content(), 25, '...');
                            }
							
                            ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
		<div class="pagination-wrapper">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '&larr; Trang trước',
                'next_text' => 'Trang sau &rarr;',
            ));
            ?>
        </div>
        
    <?php else : ?>
        <div class="no-posts">
            <p><?php _e('Không tìm thấy bài viết nào.', 'twentytwentyone'); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>