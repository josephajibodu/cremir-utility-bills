<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Cremir Mobile Data</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        @vite('resources/js/config.js')

        <!-- Styles -->
        @vite(['resources/css/app.scss', 'resources/css/icons.scss', 'resources/js/app.js'])

        @stack('styles')

    </head>
    <body class="antialiased">
        <div class="flex wrapper">
            <!-- Sidenav Menu -->
            <div class="app-menu overflow-auto">
                <!-- Sidenav Brand Logo -->
                <a href="index.html" class="logo-box">
                    <!-- Light Brand Logo -->
                    <div class="logo-light">
                        <img
                            src="{{ asset('images/logo-light.png') }}"
                            class="logo-lg h-6"
                            alt="Light logo"
                        />
                        <img
                            src="{{ asset('images/logo-sm.png') }}"
                            class="logo-sm"
                            alt="Small logo"
                        />
                    </div>

                    <!-- Dark Brand Logo -->
                    <div class="logo-dark">
                        <img
                            src="{{ asset('images/logo-dark.png') }}"
                            class="logo-lg h-6"
                            alt="Dark logo"
                        />
                        <img
                            src="{{ asset('images/logo-sm.png') }}"
                            class="logo-sm"
                            alt="Small logo"
                        />
                    </div>
                </a>

                <!-- Sidenav Menu Toggle Button -->
                <button
                    id="button-hover-toggle"
                    class="absolute top-5 end-2 rounded-full p-1.5"
                >
                    <span class="sr-only">Menu Toggle Button</span>
                    <i class="mgc_round_line text-xl"></i>
                </button>

                <!--- Menu -->
                <div class="srcollbar" data-simplebar>
                    <ul class="menu" data-fc-type="accordion">
                        <li class="menu-title">Menu</li>

                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                                <span class="menu-text"> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title">Apps</li>

                        <li class="menu-item">
                            <a href="apps-calendar.html" class="menu-link">
                                <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                                <span class="menu-text"> Calendar </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="apps-tickets.html" class="menu-link">
                                <span class="menu-icon"><i class="mgc_coupon_line"></i></span>
                                <span class="menu-text"> Tickets </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="apps-file-manager.html" class="menu-link">
                                <span class="menu-icon"><i class="mgc_folder_2_line"></i></span>
                                <span class="menu-text"> File Manager </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="apps-kanban.html" class="menu-link">
                                <span class="menu-icon"><i class="mgc_task_2_line"></i></span>
                                <span class="menu-text">Kanban</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                <span class="menu-icon"
                ><i class="mgc_building_2_line"></i
                    ></span>
                                <span class="menu-text"> Project </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="apps-project-list.html" class="menu-link">
                                        <span class="menu-text">List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-project-detail.html" class="menu-link">
                                        <span class="menu-text">Detail</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-project-create.html" class="menu-link">
                                        <span class="menu-text">Create</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">Custom</li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                                <span class="menu-text"> Auth Pages </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="auth-login.html" class="menu-link">
                                        <span class="menu-text">Log In</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-recoverpw.html" class="menu-link">
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-lock-screen.html" class="menu-link">
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                                <span class="menu-text"> Extra Pages </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="pages-starter.html" class="menu-link">
                                        <span class="menu-text">Starter</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-timeline.html" class="menu-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-invoice.html" class="menu-link">
                                        <span class="menu-text">Invoice</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-gallery.html" class="menu-link">
                                        <span class="menu-text">Gallery</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-faqs.html" class="menu-link">
                                        <span class="menu-text">FAQs</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-pricing.html" class="menu-link">
                                        <span class="menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-maintenance.html" class="menu-link">
                                        <span class="menu-text">Maintenance</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-coming-soon.html" class="menu-link">
                                        <span class="menu-text">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-404.html" class="menu-link">
                                        <span class="menu-text">Error 404</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-404-alt.html" class="menu-link">
                                        <span class="menu-text">Error 404-alt</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-500.html" class="menu-link">
                                        <span class="menu-text">Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_layout_line"></i></span>
                                <span class="menu-text"> Layout </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a
                                        href="layout-hover-view.html"
                                        target="_blank"
                                        class="menu-link"
                                    >
                                        <span class="menu-text">Hovered Menu</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="layout-icon-view.html"
                                        target="_blank"
                                        class="menu-link"
                                    >
                                        <span class="menu-text">Icon View Menu</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="layout-compact-view.html"
                                        target="_blank"
                                        class="menu-link"
                                    >
                                        <span class="menu-text">Compact Menu</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="layout-mobile-view.html"
                                        target="_blank"
                                        class="menu-link"
                                    >
                                        <span class="menu-text">Mobile View Menu</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="layout-hidden.html"
                                        target="_blank"
                                        class="menu-link"
                                    >
                                        <span class="menu-text">Hidden Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">Elements</li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                <span class="menu-icon"
                ><i class="mgc_classify_2_line"></i
                    ></span>
                                <span class="menu-text"> Components </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="ui-accordions.html" class="menu-link">
                                        <span class="menu-text">Accordions</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-avatars.html" class="menu-link">
                                        <span class="menu-text">Avatars</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-buttons.html" class="menu-link">
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-badges.html" class="menu-link">
                                        <span class="menu-text">Badges</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-breadcrumbs.html" class="menu-link">
                                        <span class="menu-text">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-cards.html" class="menu-link">
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-collapse.html" class="menu-link">
                                        <span class="menu-text">Collapse</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-dismissible.html" class="menu-link">
                                        <span class="menu-text">Dismissible</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-dropdowns.html" class="menu-link">
                                        <span class="menu-text">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-progress.html" class="menu-link">
                                        <span class="menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-skeleton.html" class="menu-link">
                                        <span class="menu-text">Skeleton</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-spinners.html" class="menu-link">
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-list-group.html" class="menu-link">
                                        <span class="menu-text">List Group</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-ratio.html" class="menu-link">
                                        <span class="menu-text">Ratio</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-tabs.html" class="menu-link">
                                        <span class="menu-text">Tab</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-modals.html" class="menu-link">
                                        <span class="menu-text">Modals</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-offcanvas.html" class="menu-link">
                                        <span class="menu-text">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-popovers.html" class="menu-link">
                                        <span class="menu-text">Popovers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-tooltips.html" class="menu-link">
                                        <span class="menu-text">Tooltips</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-typography.html" class="menu-link">
                                        <span class="menu-text">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                                <span class="menu-text"> Extended </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="extended-swiper.html" class="menu-link">
                                        <span class="menu-text">Swiper</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-nestable.html" class="menu-link">
                                        <span class="menu-text">Nestable List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-ratings.html" class="menu-link">
                                        <span class="menu-text">Ratings</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-animation.html" class="menu-link">
                                        <span class="menu-text">Animation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-player.html" class="menu-link">
                                        <span class="menu-text">Player</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-scrollbar.html" class="menu-link">
                                        <span class="menu-text">Scrollbar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-sweet-alert.html" class="menu-link">
                                        <span class="menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-tour.html" class="menu-link">
                                        <span class="menu-text">Tour Page</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-tippy-tooltips.html" class="menu-link">
                                        <span class="menu-text">Tippy Tooltip</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="extended-lightbox.html" class="menu-link">
                                        <span class="menu-text">Lightbox</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                <span class="menu-icon"
                ><i class="mgc_file_check_line"></i
                    ></span>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="forms-elements.html" class="menu-link">
                                        <span class="menu-text">Form Elements</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-select.html" class="menu-link">
                                        <span class="menu-text">Select</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-range.html" class="menu-link">
                                        <span class="menu-text">Range</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-pickers.html" class="menu-link">
                                        <span class="menu-text">Pickers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-masks.html" class="menu-link">
                                        <span class="menu-text">Masks</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-editor.html" class="menu-link">
                                        <span class="menu-text">Editor</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-file-uploads.html" class="menu-link">
                                        <span class="menu-text">File Uploads</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-validation.html" class="menu-link">
                                        <span class="menu-text">Validation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-layout.html" class="menu-link">
                                        <span class="menu-text">Form Layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                <span class="menu-icon"
                ><i class="mgc_layout_grid_line"></i
                    ></span>
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="tables-basic.html" class="menu-link">
                                        <span class="menu-text">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tables-datatables.html" class="menu-link">
                                        <span class="menu-text">Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_dribbble_line"></i></span>
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="icons-mingcute.html" class="menu-link">
                                        <span class="menu-text">Mingcute</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons-feather.html" class="menu-link">
                                        <span class="menu-text">Feather</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons-material-symbols.html" class="menu-link">
                                        <span class="menu-text">Material Symbols </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="charts.html" class="menu-link">
                <span class="menu-icon"
                ><i class="mgc_chart_bar_line"></i
                    ></span>
                                <span class="menu-text"> Chart </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_location_line"></i></span>
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="maps-vector.html" class="menu-link">
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="maps-google.html" class="menu-link">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">Documentation</li>

                        <li class="menu-item">
                            <a
                                href="javascript:void(0)"
                                data-fc-type="collapse"
                                class="menu-link"
                            >
                                <span class="menu-icon"><i class="mgc_document_line"></i></span>
                                <span class="menu-text"> Documentation </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hidden">
                                <li class="menu-item">
                                    <a href="docs-introduction.html" class="menu-link">
                                        <span class="menu-text">Introduction</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="docs-installation.html" class="menu-link">
                                        <span class="menu-text">Installation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="docs-customization.html" class="menu-link">
                                        <span class="menu-text">Customization</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="docs-changelog.html" class="menu-link">
                                        <span class="menu-text">Changelog</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Help Box Widget -->
                    <div class="my-10 mx-5">
                        <div class="help-box p-6 bg-black/5 text-center rounded-md">
                            <div class="flex justify-center mb-4">
                                <svg width="30" height="18" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z"
                                        fill="#38BDF8"
                                    ></path>
                                </svg>
                            </div>
                            <h5 class="mb-2">Unlimited Access</h5>
                            <p class="mb-3">
                                Upgrade to plan to get access to unlimited reports
                            </p>
                            <a
                                href="javascript: void(0);"
                                class="btn btn-sm bg-secondary text-white"
                            >Upgrade</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidenav Menu End  -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="page-content">
                <!-- Topbar Start -->
                <header class="app-header flex items-center px-4 gap-3">
                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu" class="nav-link p-2">
                        <span class="sr-only">Menu Toggle Button</span>
                        <span class="flex items-center justify-center h-6 w-6">
              <i class="mgc_menu_line text-xl"></i>
            </span>
                    </button>

                    <!-- Topbar Brand Logo -->
                    <a href="index.html" class="logo-box">
                        <!-- Light Brand Logo -->
                        <div class="logo-light">
                            <img
                                src="assets/images/logo-light.png"
                                class="logo-lg h-6"
                                alt="Light logo"
                            />
                            <img
                                src="assets/images/logo-sm.png"
                                class="logo-sm"
                                alt="Small logo"
                            />
                        </div>

                        <!-- Dark Brand Logo -->
                        <div class="logo-dark">
                            <img
                                src="assets/images/logo-dark.png"
                                class="logo-lg h-6"
                                alt="Dark logo"
                            />
                            <img
                                src="assets/images/logo-sm.png"
                                class="logo-sm"
                                alt="Small logo"
                            />
                        </div>
                    </a>

                    <!-- Topbar Search Modal Button -->
                    <button
                        type="button"
                        data-fc-type="modal"
                        data-fc-target="topbar-search-modal"
                        class="nav-link p-2 me-auto"
                    >
                        <span class="sr-only">Search</span>
                        <span class="flex items-center justify-center h-6 w-6">
              <i class="mgc_search_line text-2xl"></i>
            </span>
                    </button>

                    <!-- Language Dropdown Button -->
                    <div class="relative">
                        <button
                            data-fc-type="dropdown"
                            data-fc-placement="bottom-end"
                            type="button"
                            class="nav-link p-2 fc-dropdown"
                        >
              <span class="flex items-center justify-center h-6 w-6">
                <img
                    src="{{ asset('images/flags/us.jpg') }}"
                    alt="user-image"
                    class="h-4 w-6"
                />
              </span>
                        </button>
                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2"
                        >
                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            >
                                <img
                                    src="assets/images/flags/germany.jpg"
                                    alt="user-image"
                                    class="h-4"
                                />
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            >
                                <img
                                    src="assets/images/flags/italy.jpg"
                                    alt="user-image"
                                    class="h-4"
                                />
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            >
                                <img
                                    src="assets/images/flags/spain.jpg"
                                    alt="user-image"
                                    class="h-4"
                                />
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            >
                                <img
                                    src="assets/images/flags/russia.jpg"
                                    alt="user-image"
                                    class="h-4"
                                />
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <!-- Fullscreen Toggle Button -->
                    <div class="md:flex hidden">
                        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                            <span class="sr-only">Fullscreen Mode</span>
                            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_fullscreen_line text-2xl"></i>
              </span>
                        </button>
                    </div>

                    <!-- Notification Bell Button -->
                    <div class="relative md:flex hidden">
                        <button
                            data-fc-type="dropdown"
                            data-fc-placement="bottom-end"
                            type="button"
                            class="nav-link p-2"
                        >
                            <span class="sr-only">View notifications</span>
                            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_notification_line text-2xl"></i>
              </span>
                        </button>
                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg"
                        >
                            <div
                                class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700"
                            >
                                <div class="flex items-center justify-between">
                                    <h6 class="text-sm">Notification</h6>
                                    <a
                                        href="javascript: void(0);"
                                        class="text-gray-500 underline"
                                    >
                                        <small>Clear All</small>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 h-80" data-simplebar>
                                <h5 class="text-xs text-gray-500 mb-2">Today</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary"
                                                >
                                                    <i class="mgc_message_3_line text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">
                                                    Datacorp
                                                    <small class="font-normal text-gray-500 ms-1"
                                                    >1 min ago</small
                                                    >
                                                </h5>
                                                <small class="noti-item-subtitle text-muted"
                                                >Caleb Flakelar commented on Admin</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white"
                                                >
                                                    <i class="mgc_user_add_line text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">
                                                    Admin
                                                    <small class="font-normal text-gray-500 ms-1"
                                                    >1 hr ago</small
                                                    >
                                                </h5>
                                                <small class="noti-item-subtitle text-muted"
                                                >New user registered</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img
                                                    src="{{ asset('images/users/avatar-2.jpg') }}"
                                                    class="rounded-full h-9 w-9"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">
                                                    Cristina Pride
                                                    <small class="font-normal text-gray-500 ms-1"
                                                    >1 day ago</small
                                                    >
                                                </h5>
                                                <small class="noti-item-subtitle text-muted"
                                                >Hi, How are you? What about our next meeting</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white"
                                                >
                                                    <i class="mgc_message_1_line text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted"
                                                >Caleb Flakelar commented on Admin</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img
                                                    src="{{ asset('images/users/avatar-4.jpg') }}"
                                                    class="rounded-full h-9 w-9"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">
                                                    Karen Robinson
                                                </h5>
                                                <small class="noti-item-subtitle text-muted"
                                                >Wow ! this admin looks good and awesome design</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a
                                href="javascript:void(0);"
                                class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold"
                            >
                                View All
                            </a>
                        </div>
                    </div>

                    <!-- Light/Dark Toggle Button -->
                    <div class="flex">
                        <button id="light-dark-mode" type="button" class="nav-link p-2">
                            <span class="sr-only">Light/Dark Mode</span>
                            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_moon_line text-2xl"></i>
              </span>
                        </button>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="relative">
                        <button
                            data-fc-type="dropdown"
                            data-fc-placement="bottom-end"
                            type="button"
                            class="nav-link"
                        >
                            <img
                                src="{{ asset('images/users/user-6.jpg') }}"
                                alt="user-image"
                                class="rounded-full h-10"
                            />
                        </button>
                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                        >
                            <a
                                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="pages-gallery.html"
                            >
                                <i class="mgc_pic_2_line me-2"></i>
                                <span>Gallery</span>
                            </a>
                            <a
                                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="apps-kanban.html"
                            >
                                <i class="mgc_task_2_line me-2"></i>
                                <span>Kanban</span>
                            </a>
                            <a
                                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="auth-login.html"
                            >
                                <i class="mgc_lock_line me-2"></i>
                                <span>Lock Screen</span>
                            </a>
                            <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700" />
                            <a
                                class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="auth-login.html"
                            >
                                <i class="mgc_exit_line me-2"></i>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </header>
                <!-- Topbar End -->

                <main class="flex-grow p-6 overflow-auto">
                    @yield('content')
                </main>

                <!-- Footer Start -->
                <footer
                    class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800"
                >
                    <div class="flex md:justify-between justify-center w-full gap-4">
                        <div>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            © Konrix -
                            <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
                        </div>
                        <div class="md:flex hidden gap-4 item-center md:justify-end">
                            <a
                                href="javascript: void(0);"
                                class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            >About</a
                            >
                            <span
                                class="border-e border-gray-300 dark:border-gray-700"
                            ></span>
                            <a
                                href="javascript: void(0);"
                                class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            >Support</a
                            >
                            <span
                                class="border-e border-gray-300 dark:border-gray-700"
                            ></span>
                            <a
                                href="javascript: void(0);"
                                class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            >Contact Us</a
                            >
                        </div>
                    </div>
                </footer>
                <!-- Footer End -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>

        <!-- Back to Top Button -->
        <button
            data-toggle="back-to-top"
            class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white"
        >
            <i class="mgc_arrow_up_line text-lg"></i>
        </button>

    </body>
    @stack('scripts')
</html>
