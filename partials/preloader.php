<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="preloader">
    <div class="skeleton-container">
        <!-- Common Header skeleton -->
        <div class="sk-header">
            <div class="sk-item sk-logo sk-shimmer"></div>
            <div class="sk-nav">
                <div class="sk-item sk-nav-link sk-shimmer"></div>
                <div class="sk-item sk-nav-link sk-shimmer"></div>
                <div class="sk-item sk-nav-link sk-shimmer"></div>
                <div class="sk-item sk-nav-link sk-shimmer"></div>
            </div>
            <div class="sk-item sk-header-btn sk-shimmer"></div>
        </div>

        <?php if ($current_page === 'index.php'): ?>
            <!-- Homepage skeleton -->
            <div class="sk-hero-slider">
                <div class="sk-item sk-hero-title sk-shimmer"></div>
                <div class="sk-item sk-hero-subtitle sk-shimmer"></div>
                <div class="sk-hero-btns">
                    <div class="sk-item sk-hero-btn sk-shimmer"></div>
                    <div class="sk-item sk-hero-btn sk-shimmer"></div>
                </div>
            </div>
            <div class="sk-section-title sk-item sk-shimmer"></div>
            <div class="sk-tabs-row">
                <div class="sk-item sk-tab-pill sk-shimmer"></div>
                <div class="sk-item sk-tab-pill sk-shimmer"></div>
                <div class="sk-item sk-tab-pill sk-shimmer"></div>
                <div class="sk-item sk-tab-pill sk-shimmer"></div>
                <div class="sk-item sk-tab-pill sk-shimmer"></div>
            </div>
            <div class="sk-grid">
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
            </div>

        <?php elseif ($current_page === 'about.php'): ?>
            <!-- About Us skeleton -->
            <div class="sk-hero" style="height: 180px; background-color: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; padding: 20px; border-radius: 8px; margin-bottom: 50px;">
                <div class="sk-item sk-hero-title sk-shimmer" style="width: 300px; height: 35px; margin-bottom: 0;"></div>
            </div>
            <div class="sk-two-col">
                <div class="sk-item sk-detail-img sk-shimmer"></div>
                <div class="sk-detail-text-block">
                    <div class="sk-section-title-left sk-item sk-shimmer"></div>
                    <div class="sk-item sk-text-para sk-shimmer"></div>
                    <div class="sk-item sk-text-para sk-shimmer"></div>
                    <div class="sk-item sk-text-para sk-shimmer"></div>
                    <div class="sk-item sk-text-para-short sk-shimmer"></div>
                </div>
            </div>
            <div class="sk-section-title sk-item sk-shimmer" style="margin-top: 40px;"></div>
            <div class="sk-grid">
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer" style="height: 180px;"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer" style="height: 180px;"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer" style="height: 180px;"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                </div>
            </div>

        <?php elseif ($current_page === 'commercial.php'): ?>
            <!-- Commercial B2B skeleton -->
            <div class="sk-hero" style="height: 180px; background-color: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; padding: 20px; border-radius: 8px; margin-bottom: 50px;">
                <div class="sk-item sk-hero-title sk-shimmer" style="width: 350px; height: 35px; margin-bottom: 0;"></div>
            </div>
            <div class="sk-product-row">
                <div class="sk-item sk-product-img sk-shimmer"></div>
                <div class="sk-product-info">
                    <div class="sk-item sk-product-title sk-shimmer"></div>
                    <div class="sk-item sk-product-price sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                </div>
            </div>
            <div class="sk-product-row">
                <div class="sk-product-info">
                    <div class="sk-item sk-product-title sk-shimmer"></div>
                    <div class="sk-item sk-product-price sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                </div>
                <div class="sk-item sk-product-img sk-shimmer"></div>
            </div>
            <div class="sk-form-card">
                <div class="sk-item sk-shimmer" style="width: 250px; height: 25px; margin-bottom: 25px;"></div>
                <div class="sk-form-row">
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                </div>
                <div class="sk-form-row">
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                </div>
                <div class="sk-item sk-form-textarea sk-shimmer"></div>
                <div class="sk-item sk-form-btn sk-shimmer"></div>
            </div>

        <?php elseif ($current_page === 'residential.php'): ?>
            <!-- Residential Custom skeleton -->
            <div class="sk-hero" style="height: 180px; background-color: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; padding: 20px; border-radius: 8px; margin-bottom: 50px;">
                <div class="sk-item sk-hero-title sk-shimmer" style="width: 350px; height: 35px; margin-bottom: 0;"></div>
            </div>
            <div class="sk-two-col" style="margin-bottom: 50px;">
                <div class="sk-item sk-detail-img sk-shimmer" style="height: 320px;"></div>
                <div class="sk-detail-text-block">
                    <div class="sk-item sk-product-title sk-shimmer"></div>
                    <div class="sk-item sk-text-para sk-shimmer"></div>
                    <div class="sk-item sk-text-para sk-shimmer"></div>
                    <div class="sk-item sk-text-para-short sk-shimmer"></div>
                </div>
            </div>
            <div class="sk-product-row">
                <div class="sk-item sk-product-img sk-shimmer"></div>
                <div class="sk-product-info">
                    <div class="sk-item sk-product-title sk-shimmer"></div>
                    <div class="sk-item sk-product-price sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                </div>
            </div>
            <div class="sk-product-row">
                <div class="sk-product-info">
                    <div class="sk-item sk-product-title sk-shimmer"></div>
                    <div class="sk-item sk-product-price sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                    <div class="sk-item sk-product-spec sk-shimmer"></div>
                </div>
                <div class="sk-item sk-product-img sk-shimmer"></div>
            </div>
            <div class="sk-form-card">
                <div class="sk-item sk-shimmer" style="width: 250px; height: 25px; margin-bottom: 25px;"></div>
                <div class="sk-form-row">
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                </div>
                <div class="sk-form-row">
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                    <div class="sk-item sk-form-input sk-shimmer"></div>
                </div>
                <div class="sk-item sk-form-textarea sk-shimmer"></div>
                <div class="sk-item sk-form-btn sk-shimmer"></div>
            </div>

        <?php else: ?>
            <!-- Fallback General skeleton -->
            <div class="sk-hero-slider" style="height: 250px;">
                <div class="sk-item sk-hero-title sk-shimmer" style="width: 50%;"></div>
                <div class="sk-item sk-hero-subtitle sk-shimmer" style="width: 30%;"></div>
            </div>
            <div class="sk-grid">
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
                <div class="sk-card">
                    <div class="sk-item sk-card-img sk-shimmer"></div>
                    <div class="sk-item sk-card-title sk-shimmer"></div>
                    <div class="sk-item sk-card-text sk-shimmer"></div>
                    <div class="sk-item sk-card-text-short sk-shimmer"></div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>