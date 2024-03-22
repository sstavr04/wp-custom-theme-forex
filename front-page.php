<?php 
# Front page template
# A static page could be set as the front page from wordpress settings
get_header(); 

?>

<main role="main" aria-label="Content">
        <div id="homepage" class="page-4xc">
            <?php if ( 'page' == get_option('show_on_front') ) : ?>
                <!-- If a static page is selected as the front-page show the content of the page-->
                <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>
                
                <?php endwhile; ?>
                <?php endif; ?>

            <?php else: ?>

            <!-- Custom implementation of front page with HTML and CSS -->

            <!-- MAIN SECTION -->
            <div class="row site-box" style="padding: 64px 32px;">
                <div class="column column-50 align-self-center">
                    <h1>Discover the Power of Our Forex Platform</h1>
                    <p class="subtext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    <a class="btn" href="/platform/">Learn more</a>
                </div>
                <div class="column column-50" style="justify-content:center;">
                <img alt="Rocket in space" src="<?php echo get_template_directory_uri() ?>/images/front-page-1.png">

                </div>
            </div>

            <!-- Features SECTION -->
            <div class="bg-gray features">
                <div class="site-box" style="padding: 64px 32px;">
                    <p class="row-yellow-subheading">
                        Our values
                    </p>
                    <h2>
                        Experience the Power of Forex Trading
                    </h2>
                    <p class="subtext-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="row site-box">
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13M16 3.13C16.8604 3.3503 17.623 3.8507 18.1676 4.55231C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89317 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Real-time Analytics</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20.84 4.60999C20.3292 4.099 19.7228 3.69364 19.0554 3.41708C18.3879 3.14052 17.6725 2.99817 16.95 2.99817C16.2275 2.99817 15.5121 3.14052 14.8446 3.41708C14.1772 3.69364 13.5708 4.099 13.06 4.60999L12 5.66999L10.94 4.60999C9.9083 3.5783 8.50903 2.9987 7.05 2.9987C5.59096 2.9987 4.19169 3.5783 3.16 4.60999C2.1283 5.64169 1.54871 7.04096 1.54871 8.49999C1.54871 9.95903 2.1283 11.3583 3.16 12.39L4.22 13.45L12 21.23L19.78 13.45L20.84 12.39C21.351 11.8792 21.7563 11.2728 22.0329 10.6053C22.3095 9.93789 22.4518 9.22248 22.4518 8.49999C22.4518 7.77751 22.3095 7.0621 22.0329 6.39464C21.7563 5.72718 21.351 5.12075 20.84 4.60999V4.60999Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>  
                        </div>
                        <h3>Low Spreads</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M23 6L13.5 15.5L8.5 10.5L1 18M23 6H17M23 6V12" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>24/7 Support</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="row site-box" style="padding: 64px 32px;">
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M8 14C8 14 9.5 16 12 16C14.5 16 16 14 16 14M9 9H9.01M15 9H15.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                        <h3>Low Commissions</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M4 15C4 15 5 14 8 14C11 14 13 16 16 16C19 16 20 15 20 15V3C20 3 19 4 16 4C13 4 11 2 8 2C5 2 4 3 4 3V15ZM4 15V22" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Fast Execution</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="column column-33 column-center">
                        <div class="circle-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Fast Execution</h3>
                        <p class="subtext">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>



            <!-- Pricing tiers SECTION -->
            <div class="site-box pricing-tiers" style="padding: 64px 32px;">
                <p class="row-yellow-subheading">
                    Accounts
                </p>
                <h2>
                    Matching the needs of every trader
                </h2>
                <p class="subtext-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <div class="row" style="justify-content:center;margin-top:60px;">
                    <div class="column column-33 column-center account-box">
                        <div class="column" style="width:100%;align-items: center;">
                            <div class="circle-icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>STANDARD</h3>
                            <p class="subtext">
                                Account
                            </p>
                        </div>
                        <div class="flex-ul" style="padding-left:0;">
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                        </div>
                        <div class="pricing-tier-button">
                            <a class="btn" href="/platform/">Get started</a>
                        </div>
                    </div>
                    <div class="column column-33 column-center account-box">
                        <div class="column" style="width:100%;align-items: center;">
                            <div class="circle-icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>PRO</h3>
                            <p class="subtext">
                                Account
                            </p>
                        </div>
                        <div class="flex-ul" style="padding-left:0;">
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                        </div>
                        <div class="pricing-tier-button">
                            <a class="btn" href="/platform/">Get started</a>
                        </div>
                    </div>
                    <div class="column column-33 column-center account-box">
                        <div class="column" style="width:100%;align-items: center;">
                            <div class="circle-icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="#E2B205" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>VIP</h3>
                            <p class="subtext">
                                Account
                            </p>
                        </div>
                        <div class="flex-ul" style="padding-left:0;">
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect width="24" height="24" rx="12" fill="#F4E2A1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0964 7.39004L9.93638 14.3L8.03638 12.27C7.68638 11.94 7.13638 11.92 6.73638 12.2C6.34638 12.49 6.23638 13 6.47638 13.41L8.72638 17.07C8.94638 17.41 9.32638 17.62 9.75638 17.62C10.1664 17.62 10.5564 17.41 10.7764 17.07C11.1364 16.6 18.0064 8.41004 18.0064 8.41004C18.9064 7.49004 17.8164 6.68004 17.0964 7.38004V7.39004Z" fill="#947505"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                        </div>
                        <div class="pricing-tier-button">
                            <a class="btn" href="/platform/">Get started</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA SECTION -->
            <div class="bg-gray">
                <div class="row site-box" style="padding: 96px 32px;">
                    <div class="column column-50" style="justify-content:center;">
                        <img alt="Astronauts handshake" src="<?php echo get_template_directory_uri() ?>/images/front-page-2.png">
                    </div>
                    <div class="column column-50 align-self-center">
                        <h1>Unlock Your Potential with Forex Trading</h1>

                        <div class="flex-ul">
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                                        <rect y="0.5" width="28" height="28" rx="14" fill="#FFF3C7"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9459 9.12169L11.5925 17.1834L9.37586 14.815C8.96753 14.43 8.32586 14.4067 7.85919 14.7334C7.40419 15.0717 7.27586 15.6667 7.55586 16.145L10.1809 20.415C10.4375 20.8117 10.8809 21.0567 11.3825 21.0567C11.8609 21.0567 12.3159 20.8117 12.5725 20.415C12.9925 19.8667 21.0075 10.3117 21.0075 10.3117C22.0575 9.23836 20.7859 8.29336 19.9459 9.11002V9.12169Z" fill="#FAC711"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                                        <rect y="0.5" width="28" height="28" rx="14" fill="#FFF3C7"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9459 9.12169L11.5925 17.1834L9.37586 14.815C8.96753 14.43 8.32586 14.4067 7.85919 14.7334C7.40419 15.0717 7.27586 15.6667 7.55586 16.145L10.1809 20.415C10.4375 20.8117 10.8809 21.0567 11.3825 21.0567C11.8609 21.0567 12.3159 20.8117 12.5725 20.415C12.9925 19.8667 21.0075 10.3117 21.0075 10.3117C22.0575 9.23836 20.7859 8.29336 19.9459 9.11002V9.12169Z" fill="#FAC711"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                            <div class="flex-ul-li">
                                <div class="flex-ul-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                                        <rect y="0.5" width="28" height="28" rx="14" fill="#FFF3C7"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9459 9.12169L11.5925 17.1834L9.37586 14.815C8.96753 14.43 8.32586 14.4067 7.85919 14.7334C7.40419 15.0717 7.27586 15.6667 7.55586 16.145L10.1809 20.415C10.4375 20.8117 10.8809 21.0567 11.3825 21.0567C11.8609 21.0567 12.3159 20.8117 12.5725 20.415C12.9925 19.8667 21.0075 10.3117 21.0075 10.3117C22.0575 9.23836 20.7859 8.29336 19.9459 9.11002V9.12169Z" fill="#FAC711"/>
                                    </svg>
                                </div>
                                <span>Lorem Ipsum dummy text.</span>
                            </div>
                        </div>
                        <div style="display:flex;gap:12px;">
                            <a class="btn-cta" href="/platform/">Learn more</a>
                            <a class="btn" href="/platform/">Get started</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-box" style="padding: 90px 32px;">
                <h2>
                    Frequently asked questions
                </h2>
                <p class="subtext-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <div class="row" style="margin-top:64px;">
                    <div class="faq-column">
                        <div class="faq-term open">
                            <div class="row">
                                <div class="column" style="flex:1;">
                                    <h3 class="faq-question">Is there a free trial available?</h3>
                                    <p class="faq-answer" id="faq-answer-1">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-term">
                            <div class="row">
                                <div class="column" style="flex:1">
                                    <h3 class="faq-question">Can I change my plan later?</h3>
                                    <p class="faq-answer" id="faq-answer-2">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-term">
                            <div class="row">
                                <div class="column" style="flex:1">
                                    <h3 class="faq-question">What is your cancellation policy?</h3>
                                    <p class="faq-answer" id="faq-answer-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="3"></span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-term">
                            <div class="row">
                                <div class="column" style="flex:1">
                                    <h3 class="faq-question">Can other info be added to an invoice?</h3>
                                    <p class="faq-answer" id="faq-answer-4">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="4"></span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-term">
                            <div class="row">
                                <div class="column" style="flex:1">
                                    <h3 class="faq-question">How does billing work?</h3>
                                    <p class="faq-answer" id="faq-answer-5">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="5"></span>
                                </div>
                            </div>
                        </div>
                        <div class="faq-term">
                            <div class="row">
                                <div class="column" style="flex:1">
                                    <h3 class="faq-question">How do I change my account email?</h3>
                                    <p class="faq-answer" id="faq-answer-6">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                                <div class="column">
                                    <span class="faq-toggle-icon" data-question="6"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>

</main>

<?php get_footer(); ?>
