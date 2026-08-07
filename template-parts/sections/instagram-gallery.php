<section class="instagram-gallery">

    <div class="container">

        <div class="section-heading">

            <span class="section-subtitle">
                Follow Our Journey
            </span>

            <h2 class="section-title">
                @CyberSplash
            </h2>

        </div>

        <div class="instagram-grid">

            <?php for ( $i = 1; $i <= 6; $i++ ) : ?>

                <a href="#" class="instagram-item">

                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/instagram-' . $i . '.png' ); ?>"
                        alt="Instagram Image <?php echo esc_attr( $i ); ?>">

                    <span class="instagram-overlay">

                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">

                            <path d="M7 2H17C19.76 2 22 4.24 22 7V17C22 19.76 19.76 22 17 22H7C4.24 22 2 19.76 2 17V7C2 4.24 4.24 2 7 2Z" stroke="white" stroke-width="2"/>

                            <circle cx="12" cy="12" r="4" stroke="white" stroke-width="2"/>

                            <circle cx="17.5" cy="6.5" r="1.2" fill="white"/>

                        </svg>

                    </span>

                </a>

            <?php endfor; ?>

        </div>

    </div>

</section>