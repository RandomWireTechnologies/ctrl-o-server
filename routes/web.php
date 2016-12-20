<?php

/**
 * routes/web.php
 *
 * This file is where you may define all of the routes that are handled
 * by your application. Just tell Laravel the URIs it should respond
 * to using a Closure or controller method. Build something great!
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

/*
|--------------------------------------------------------------------------
| Allowed Controller Methods/Routes
|--------------------------------------------------------------------------
|
| When creating resourceful controllers for routing, only the following
| methods should be present in a controller:
|
| __construct, index, show, create, store, edit, update, delete, exists
|
| Any other methods needing to be routed to a controller should be
| absctracted to a trait.
|
*/

Route::get('/', [
    'as'   => 'app.index',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::get('/logout', [
    'as'   => 'auth.logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::post('/login', [
    'as'   => 'auth.login.store',
    'uses' => 'Auth\LoginController@login'
]);

Route::get('/login', [
    'as'   => 'auth.login.show',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('/password/email', [
    'as'   => 'auth.forgot.store',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);

Route::get('/password/reset', [
    'as'   => 'auth.forgot.show',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);

Route::post('/password/reset', [
    'as'   => 'auth.reset.store',
    'uses' => 'Auth\ResetPasswordController@reset'
]);

Route::get('/password/reset/{token}', [
    'as'   => 'auth.reset.show',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

Route::get('/register', [
    'as'   => 'auth.register.show',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('/register', [
    'as'   => 'auth.register.store',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('/register/activate/{activationToken}', [
    'as'   => 'auth.register.activate',
    'uses' => 'Auth\RegisterController@activate'
]);

Route::group(['middleware' => ['auth']], function() {

    /*
    |--------------------------------------------------------------------------
    | GET Routes
    |--------------------------------------------------------------------------
    */
   
    Route::get('/admin', [
        'as'   => 'admin.index',
        'uses' => 'AdminController@index'
    ]);

    Route::get('/admin/new', [
        'as'   => 'admin.new-user',
        'uses' => 'AdminController@newUser'
    ]);

    Route::get('/admin/register', [
        'as'   => 'admin.register',
        'uses' => 'AdminController@register'
    ]);

    Route::get('/cards', [
        'as'   => 'cards.index',
        'uses' => 'CardController@index'
    ]);

    Route::post('/cards', [
        'as'   => 'cards.store',
        'uses' => 'CardController@store'
    ]);

    Route::get('/cards/create', [
        'as'   => 'cards.create',
        'uses' => 'CardController@create'
    ]);

    Route::post('/cards/{id}', [
        'as'   => 'cards.update',
        'uses' => 'CardController@update'
    ]);

    Route::post('/cards/{id}/destroy', [
        'as'   => 'cards.destroy',
        'uses' => 'CardController@destroy'
    ]);

    Route::get('/cards/{id}/edit', [
        'as'   => 'cards.edit',
        'uses' => 'CardController@edit'
    ]);

    Route::resource('users', 'UserController', ['except' => 'show']);

    Route::get('/dashboard', [
        'as'   => 'app.dashboard',
        'uses' => 'DashboardController@index'
    ]);

    Route::get('/membership', [
        'as'   => 'membership.index',
        'uses' => 'MembershipController@index'
    ]);

    Route::get('/profile', [
        'as'   => 'profile.index',
        'uses' => 'DashboardController@profile'
    ]);

    /*
    |--------------------------------------------------------------------------
    | POST Routes
    |--------------------------------------------------------------------------
    */
    
    Route::post('/profile', [
        'as'   => 'profile.update',
        'uses' => 'DashboardController@updateProfile'
    ]);

    Route::post('/profile/password', [
        'as'   => 'profile.password',
        'uses' => 'DashboardController@updatePassword'
    ]);

    Route::post('admin/new', [
        'as'   => 'admin.update',
        'uses' => 'AdminController@newUser'
    ]);

    Route::post('/admin/register', [
        'as'   => 'admin.store',
        'uses' => 'AdminController@store'
    ]);

    /*
    |--------------------------------------------------------------------------
    | DEMO Routes (remove when complete)
    |-------------------------------------------------------------------------- 
    */

    Route::get('/admin/demo', [
        'as'   => 'demo.index',
        'uses' => 'DemoController@index'
    ]);

    /*
    |--------------------------------------------------------------------------
    | DEMO Features
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/demo/features/faq', [
        'as'   => 'features.faq',
        'uses' => 'DemoController@featureFaq'
    ]);

    Route::get('/admin/demo/features/userlist', [
        'as'   => 'features.userlist',
        'uses' => 'DemoController@featureUserlist'
    ]);

    Route::get('/admin/demo/features/invoice', [
        'as'   => 'features.invoice',
        'uses' => 'DemoController@featureInvoice'
    ]);

    Route::get('/admin/demo/features/blank', [
        'as'   => 'features.blank',
        'uses' => 'DemoController@featureBlank'
    ]);

    Route::get('/admin/demo/features/profile', [
        'as'   => 'features.profile',
        'uses' => 'DemoController@featureProfile'
    ]);

    Route::get('/admin/demo/features/search', [
        'as'   => 'features.search',
        'uses' => 'DemoController@featureSearch'
    ]);

    Route::get('/admin/demo/features/gallery', [
        'as'   => 'features.gallery',
        'uses' => 'DemoController@featureGallery'
    ]);

    Route::get('/admin/demo/features/gallery-grid', [
        'as'   => 'features.gallery-grid',
        'uses' => 'DemoController@featureGalleryGrid'
    ]);

    Route::get('/admin/demo/features/error-400', [
        'as'   => 'features.error-400',
        'uses' => 'DemoController@featureError400'
    ]);

    Route::get('/admin/demo/features/error-403', [
        'as'   => 'features.error-403',
        'uses' => 'DemoController@featureError403'
    ]);

    Route::get('/admin/demo/features/error-404', [
        'as'   => 'features.error-404',
        'uses' => 'DemoController@featureError404'
    ]);

    Route::get('/admin/demo/features/error-405', [
        'as'   => 'features.error-405',
        'uses' => 'DemoController@featureError405'
    ]);

    Route::get('/admin/demo/features/error-500', [
        'as'   => 'features.error-500',
        'uses' => 'DemoController@featureError500'
    ]);

    Route::get('/admin/demo/features/error-503', [
        'as'   => 'features.error-503',
        'uses' => 'DemoController@featureError503'
    ]);

    Route::get('/admin/demo/features/maps', [
        'as'   => 'features.maps',
        'uses' => 'DemoController@featureMaps'
    ]);

    Route::get('/admin/demo/features/vector-map', [
        'as'   => 'features.vector-map',
        'uses' => 'DemoController@featureVectorMap'
    ]);

    Route::get('/admin/demo/features/login', [
        'as'   => 'features.login',
        'uses' => 'DemoController@featureLogin'
    ]);

    Route::get('/admin/demo/features/login_v2', [
        'as'   => 'features.login-v2',
        'uses' => 'DemoController@featureLoginV2'
    ]);

    Route::get('/admin/demo/features/login_v3', [
        'as'   => 'features.login-v3',
        'uses' => 'DemoController@featureLoginV3'
    ]);

    Route::get('/admin/demo/features/register', [
        'as'   => 'features.register',
        'uses' => 'DemoController@featureRegister'
    ]);

    Route::get('/admin/demo/features/register_v2', [
        'as'   => 'features.register-v2',
        'uses' => 'DemoController@featureRegisterV2'
    ]);

    Route::get('/admin/demo/features/register_v3', [
        'as'   => 'features.register-v3',
        'uses' => 'DemoController@featureRegisterV3'
    ]);

    Route::get('/admin/demo/features/forgot_password', [
        'as'   => 'features.forgot-password',
        'uses' => 'DemoController@featureForgotPassword'
    ]);

    Route::get('/admin/demo/features/forgot_password_v2', [
        'as'   => 'features.forgot-password-v2',
        'uses' => 'DemoController@featureForgotPasswordV2'
    ]);

    Route::get('/admin/demo/features/lockscreen', [
        'as'   => 'features.lockscreen',
        'uses' => 'DemoController@featureLockscreen'
    ]);

    Route::get('/admin/demo/features/lockscreen_v2', [
        'as'   => 'features.lockscreen-v2',
        'uses' => 'DemoController@featureLockscreenV2'
    ]);

    Route::get('/admin/demo/features/maintenance', [
        'as'   => 'features.maintenance',
        'uses' => 'DemoController@featureMaintenance'
    ]);

    Route::get('/admin/demo/features/email', [
        'as'   => 'features.email',
        'uses' => 'DemoController@featureEmail'
    ]);

    Route::get('/admin/demo/features/contacts', [
        'as'   => 'features.contacts',
        'uses' => 'DemoController@featureContacts'
    ]);

    Route::get('/admin/demo/features/calendar', [
        'as'   => 'features.calendar',
        'uses' => 'DemoController@featureCalendar'
    ]);

    Route::get('/admin/demo/features/project', [
        'as'   => 'features.project',
        'uses' => 'DemoController@featureProject'
    ]);

    Route::get('/admin/demo/features/mailbox', [
        'as'   => 'features.mailbox',
        'uses' => 'DemoController@featureMailbox'
    ]);

    Route::get('/admin/demo/features/message', [
        'as'   => 'features.message',
        'uses' => 'DemoController@featureMessage'
    ]);

    Route::get('/admin/demo/features/media', [
        'as'   => 'features.media',
        'uses' => 'DemoController@featureMedia'
    ]);

    /*
    |--------------------------------------------------------------------------
    | DEMO Components
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/demo/components/panel-structure', [
        'as'   => 'components.panel-structure',
        'uses' => 'DemoController@componentPanelStructure'
    ]);

    Route::get('/admin/demo/components/panel-action', [
        'as'   => 'components.panel-action',
        'uses' => 'DemoController@componentPanelAction'
    ]);

    Route::get('/admin/demo/components/panel-transition', [
        'as'   => 'components.panel-transition',
        'uses' => 'DemoController@componentPanelTransition'
    ]);

    Route::get('/admin/demo/components/buttons', [
        'as'   => 'components.buttons',
        'uses' => 'DemoController@componentButtons'
    ]);

    Route::get('/admin/demo/components/icons', [
        'as'   => 'components.icons',
        'uses' => 'DemoController@componentIcons'
    ]);

    Route::get('/admin/demo/components/list', [
        'as'   => 'components.list',
        'uses' => 'DemoController@componentList'
    ]);

    Route::get('/admin/demo/components/dropdowns', [
        'as'   => 'components.dropdowns',
        'uses' => 'DemoController@componentDropdowns'
    ]);

    Route::get('/admin/demo/components/image', [
        'as'   => 'components.image',
        'uses' => 'DemoController@componentImage'
    ]);

    Route::get('/admin/demo/components/modals', [
        'as'   => 'components.modals',
        'uses' => 'DemoController@componentModals'
    ]);

    Route::get('/admin/demo/components/scrollable', [
        'as'   => 'components.scrollable',
        'uses' => 'DemoController@componentScrollable'
    ]);

    Route::get('/admin/demo/components/typography', [
        'as'   => 'components.typography',
        'uses' => 'DemoController@componentTypography'
    ]);

    Route::get('/admin/demo/components/utilities', [
        'as'   => 'components.utilities',
        'uses' => 'DemoController@componentUtilities'
    ]);

    Route::get('/admin/demo/components/colors', [
        'as'   => 'components.colors',
        'uses' => 'DemoController@componentColors'
    ]);

    Route::get('/admin/demo/components/carousel', [
        'as'   => 'components.carousel',
        'uses' => 'DemoController@componentCarousel'
    ]);

    Route::get('/admin/demo/components/tabs-accordions', [
        'as'   => 'components.tabs-accordions',
        'uses' => 'DemoController@componentTabsAccordions'
    ]);

    Route::get('/admin/demo/components/badges-labels', [
        'as'   => 'components.badges-labels',
        'uses' => 'DemoController@componentBadgesLabels'
    ]);

    Route::get('/admin/demo/components/tooltip-popover', [
        'as'   => 'components.tooltip-popover',
        'uses' => 'DemoController@componentTooltipPopover'
    ]);

    Route::get('/admin/demo/components/progress_bars', [
        'as'   => 'components.progress-bars',
        'uses' => 'DemoController@componentProgressBars'
    ]);

    Route::get('/admin/demo/components/animation', [
        'as'   => 'components.animation',
        'uses' => 'DemoController@componentAnimation'
    ]);

    Route::get('/admin/demo/components/highlight', [
        'as'   => 'components.highlight',
        'uses' => 'DemoController@componentHighlight'
    ]);

    Route::get('/admin/demo/components/alertify', [
        'as'   => 'components.alertify',
        'uses' => 'DemoController@componentAlertify'
    ]);

    Route::get('/admin/demo/components/masonry', [
        'as'   => 'components.masonry',
        'uses' => 'DemoController@componentMasonry'
    ]);

    Route::get('/admin/demo/components/rating', [
        'as'   => 'components.rating',
        'uses' => 'DemoController@componentRating'
    ]);

    Route::get('/admin/demo/components/context-menu', [
        'as'   => 'components.context-menu',
        'uses' => 'DemoController@componentContextMenu'
    ]);

    Route::get('/admin/demo/components/sortable-nestable', [
        'as'   => 'components.sortable-nestable',
        'uses' => 'DemoController@componentSortableNestable'
    ]);

    Route::get('/admin/demo/components/toastr', [
        'as'   => 'components.toastr',
        'uses' => 'DemoController@componentToastr'
    ]);

    Route::get('/admin/demo/components/lightbox', [
        'as'   => 'components.lightbox',
        'uses' => 'DemoController@componentLightbox'
    ]);

    Route::get('/admin/demo/components/treeview', [
        'as'   => 'components.treeview',
        'uses' => 'DemoController@componentTreeview'
    ]);

    Route::get('/admin/demo/components/google_maps', [
        'as'   => 'components.google-maps',
        'uses' => 'DemoController@componentGoogleMaps'
    ]);

    Route::get('/admin/demo/components/vector_maps', [
        'as'   => 'components.vector-maps',
        'uses' => 'DemoController@componentVectorMaps'
    ]);

    Route::get('/admin/demo/components/bootbox_sweetalert', [
        'as'   => 'components.bootbox-sweetalert',
        'uses' => 'DemoController@componentBootboxSweetalert'
    ]);

    Route::get('/admin/demo/components/alerts', [
        'as'   => 'components.alerts',
        'uses' => 'DemoController@componentAlerts'
    ]);

    Route::get('/admin/demo/components/ribbon', [
        'as'   => 'components.ribbon',
        'uses' => 'DemoController@componentRibbon'
    ]);

    Route::get('/admin/demo/components/pricing-tables', [
        'as'   => 'components.pricing-tables',
        'uses' => 'DemoController@componentPricingTables'
    ]);

    Route::get('/admin/demo/components/overlay', [
        'as'   => 'components.overlay',
        'uses' => 'DemoController@componentOverlay'
    ]);

    Route::get('/admin/demo/components/step', [
        'as'   => 'components.step',
        'uses' => 'DemoController@componentStep'
    ]);

    Route::get('/admin/demo/components/cover', [
        'as'   => 'components.cover',
        'uses' => 'DemoController@componentCover'
    ]);

    Route::get('/admin/demo/components/timeline-simple', [
        'as'   => 'components.timeline-simple',
        'uses' => 'DemoController@componentTimelineSimple'
    ]);

    Route::get('/admin/demo/components/timeline', [
        'as'   => 'components.timeline',
        'uses' => 'DemoController@componentTimeline'
    ]);

    Route::get('/admin/demo/components/testimonials', [
        'as'   => 'components.testimonials',
        'uses' => 'DemoController@componentTestimonials'
    ]);

    Route::get('/admin/demo/components/blockquotes', [
        'as'   => 'components.blockquotes',
        'uses' => 'DemoController@componentBlockquotes'
    ]);

    Route::get('/admin/demo/components/breadcrumbs', [
        'as'   => 'components.breadcrumbs',
        'uses' => 'DemoController@componentBreadcrumbs'
    ]);

    Route::get('/admin/demo/components/comments', [
        'as'   => 'components.comments',
        'uses' => 'DemoController@componentComments'
    ]);

    Route::get('/admin/demo/components/media', [
        'as'   => 'components.media',
        'uses' => 'DemoController@componentMedia'
    ]);

    Route::get('/admin/demo/components/chat', [
        'as'   => 'components.chat',
        'uses' => 'DemoController@componentChat'
    ]);

    Route::get('/admin/demo/components/nav', [
        'as'   => 'components.nav',
        'uses' => 'DemoController@componentNav'
    ]);

    Route::get('/admin/demo/components/navbars', [
        'as'   => 'components.navbars',
        'uses' => 'DemoController@componentNavbars'
    ]);

    Route::get('/admin/demo/components/pagination', [
        'as'   => 'components.pagination',
        'uses' => 'DemoController@componentPagination'
    ]);

    Route::get('/admin/demo/components/headers', [
        'as'   => 'components.headers',
        'uses' => 'DemoController@componentHeaders'
    ]);

    Route::get('/admin/demo/components/general', [
        'as'   => 'components.general',
        'uses' => 'DemoController@componentGeneral'
    ]);

    Route::get('/admin/demo/components/material-element', [
        'as'   => 'components.material-element',
        'uses' => 'DemoController@componentMaterialElement'
    ]);

    Route::get('/admin/demo/components/layouts', [
        'as'   => 'components.layouts',
        'uses' => 'DemoController@componentLayouts'
    ]);

    Route::get('/admin/demo/components/validation', [
        'as'   => 'components.validation',
        'uses' => 'DemoController@componentValidation'
    ]);

    Route::get('/admin/demo/components/masks', [
        'as'   => 'components.masks',
        'uses' => 'DemoController@componentMasks'
    ]);

    Route::get('/admin/demo/components/form-advanced', [
        'as'   => 'components.form-advanced',
        'uses' => 'DemoController@componentFormAdvanced'
    ]);

    Route::get('/admin/demo/components/form-wizard', [
        'as'   => 'components.form-wizard',
        'uses' => 'DemoController@componentFormWizard'
    ]);

    Route::get('/admin/demo/components/editor-ace', [
        'as'   => 'components.editor-ace',
        'uses' => 'DemoController@componentEditorAce'
    ]);

    Route::get('/admin/demo/components/editor-markdown', [
        'as'   => 'components.editor-markdown',
        'uses' => 'DemoController@componentEditorMarkdown'
    ]);

    Route::get('/admin/demo/components/editor-markdown-flav', [
        'as'   => 'components.editor-markdown-flav',
        'uses' => 'DemoController@componentEditorMarkdownFlav'
    ]);

    Route::get('/admin/demo/components/code-editor', [
        'as'   => 'components.code-editor',
        'uses' => 'DemoController@componentCodeEditor'
    ]);

    Route::get('/admin/demo/components/image-cropping', [
        'as'   => 'components.image-cropping',
        'uses' => 'DemoController@componentImageCropping'
    ]);

    Route::get('/admin/demo/components/basic', [
        'as'   => 'components.basic',
        'uses' => 'DemoController@componentBasic'
    ]);

    Route::get('/admin/demo/components/bootstrap', [
        'as'   => 'components.bootstrap',
        'uses' => 'DemoController@componentBootstrap'
    ]);

    Route::get('/admin/demo/components/floatthead', [
        'as'   => 'components.floatthead',
        'uses' => 'DemoController@componentFloatthead'
    ]);

    Route::get('/admin/demo/components/responsive', [
        'as'   => 'components.responsive',
        'uses' => 'DemoController@componentResponsive'
    ]);

    Route::get('/admin/demo/components/editable', [
        'as'   => 'components.editable',
        'uses' => 'DemoController@componentEditable'
    ]);

    Route::get('/admin/demo/components/datatable', [
        'as'   => 'components.datatable',
        'uses' => 'DemoController@componentDatatable'
    ]);

    Route::get('/admin/demo/components/ajax_datatable', [
        'as'   => 'components.ajax-datatable',
        'uses' => 'DemoController@componentAjaxDatatable'
    ]);

    Route::get('/admin/demo/components/jsgrid', [
        'as'   => 'components.jsgrid',
        'uses' => 'DemoController@componentJsgrid'
    ]);

    Route::get('/admin/demo/components/footable', [
        'as'   => 'components.footable',
        'uses' => 'DemoController@componentFootable'
    ]);

    Route::get('/admin/demo/components/chart', [
        'as'   => 'components.chart',
        'uses' => 'DemoController@componentChart'
    ]);

    Route::get('/admin/demo/components/gauges', [
        'as'   => 'components.gauges',
        'uses' => 'DemoController@componentGuages'
    ]);

    Route::get('/admin/demo/components/flot', [
        'as'   => 'components.flot',
        'uses' => 'DemoController@componentFlot'
    ]);

    Route::get('/admin/demo/components/peitycharts', [
        'as'   => 'components.peitycharts',
        'uses' => 'DemoController@componentPeitycharts'
    ]);

    Route::get('/admin/demo/components/morrischarts', [
        'as'   => 'components.morrischarts',
        'uses' => 'DemoController@componentMorrischarts'
    ]);

    Route::get('/admin/demo/components/chartist', [
        'as'   => 'components.chartist',
        'uses' => 'DemoController@componentChartist'
    ]);

    Route::get('/admin/demo/components/c3-chart', [
        'as'   => 'components.c3-chart',
        'uses' => 'DemoController@componentC3Chart'
    ]);

    Route::get('/admin/demo/components/easypiechart', [
        'as'   => 'components.easypiechart',
        'uses' => 'DemoController@componentEasypieChart'
    ]);

    Route::get('/admin/demo/components/echarts', [
        'as'   => 'components.echarts',
        'uses' => 'DemoController@componentEcharts'
    ]);

    Route::get('/admin/demo/components/rickshaw', [
        'as'   => 'components.rickshaw',
        'uses' => 'DemoController@componentRickshaw'
    ]);

    Route::get('/admin/demo/components/sparkline', [
        'as'   => 'components.sparkline',
        'uses' => 'DemoController@componentSparkline'
    ]);

    Route::get('/admin/demo/components/static-widget', [
        'as'   => 'components.static-widget',
        'uses' => 'DemoController@componentStaticWidget'
    ]);

    Route::get('/admin/demo/components/data-widget', [
        'as'   => 'components.data-widget',
        'uses' => 'DemoController@componentDataWidget'
    ]);

    Route::get('/admin/demo/components/blog-widget', [
        'as'   => 'components.blog-widget',
        'uses' => 'DemoController@componentBlogWidget'
    ]);

    Route::get('/admin/demo/components/social-widget', [
        'as'   => 'components.social-widget',
        'uses' => 'DemoController@componentSocialWidget'
    ]);

    Route::get('/admin/demo/components/chart-widget', [
        'as'   => 'components.chart-widget',
        'uses' => 'DemoController@componentChartWidget'
    ]);

});

