<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HomeRoutes
Route::get('/','App\Http\Controllers\HomeController@index1');
Route::get('/home1','App\Http\Controllers\HomeController@index');
Route::get('/home2','App\Http\Controllers\HomeController@index2');
Route::get('/home','App\Http\Controllers\HomeController@home');
Route::get('/shop','App\Http\Controllers\HomeController@shop');
Route::get('/shop/website','App\Http\Controllers\HomeController@website');
Route::get('/shop/website/cat/{cat}','App\Http\Controllers\HomeController@website_cat');
Route::get('/shop/website/{name}','App\Http\Controllers\HomeController@website_details');
Route::get('/shop/website/link/{name}','App\Http\Controllers\HomeController@link');
Route::get('/shop/cat/{cat}','App\Http\Controllers\HomeController@shop_cat');
Route::get('/shop/{name}','App\Http\Controllers\HomeController@shop_details');
Route::get('/portfolio','App\Http\Controllers\HomeController@portfolio');
Route::get('/our-work','App\Http\Controllers\HomeController@portfolio');
Route::get('/portfolio/{id}','App\Http\Controllers\HomeController@portfolio_detail');
Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/contact-us','App\Http\Controllers\HomeController@contact');
Route::get('/services','App\Http\Controllers\HomeController@services');
Route::get('/our-services','App\Http\Controllers\HomeController@services');
Route::get('/service/{name}','App\Http\Controllers\HomeController@service');
Route::get('/service/{name}/{extra}','App\Http\Controllers\HomeController@service_extra');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/about-us','App\Http\Controllers\HomeController@about');
Route::get('/what-we-do','App\Http\Controllers\HomeController@who');
Route::get('/terms','App\Http\Controllers\HomeController@terms');
Route::get('/privacy','App\Http\Controllers\HomeController@privacy');
Route::get('/copyright','App\Http\Controllers\HomeController@copyright');
Route::get('/commingsoon','App\Http\Controllers\HomeController@commingsoon');
Route::post('/submitMessage','App\Http\Controllers\HomeController@submitMessage'); 
Route::post('/till','PaymentsConroller@till');
Route::post('/stk','PaymentsConroller@stk');
Route::get('/rfp','App\Http\Controllers\HomeController@rfp');

Route::get('/how','App\Http\Controllers\HomeController@how');
Route::get('/servicerequest/{id}','App\Http\Controllers\HomeController@servicerequest');
Route::post('/service_request','App\Http\Controllers\HomeController@service_request');
Route::post('/calculate','App\Http\Controllers\HomeController@calculate');
Route::post('/quote_request','App\Http\Controllers\HomeController@quote_request');
Route::post('/post_rfp','App\Http\Controllers\HomeController@post_rfp');
Route::get('/quote','App\Http\Controllers\HomeController@quote');
Route::get('/get-an-av-quote','App\Http\Controllers\HomeController@quote');

Route::get('/container/{id}','App\Http\Controllers\HomeController@container');

Route::get('/industry/{title}','App\Http\Controllers\HomeController@industry');
Route::get('/industries','App\Http\Controllers\HomeController@industries_one');
Route::get('/our-industries','App\Http\Controllers\HomeController@industries_one');
Route::get('/industries_two','App\Http\Controllers\HomeController@industries_two');
Route::get('/industries_three','App\Http\Controllers\HomeController@industries_three');
Route::get('/industries_four','App\Http\Controllers\HomeController@industries_four');
Route::get('/industries_five','App\Http\Controllers\HomeController@industries_five');
// Route::get('/instagram','App\Http\Controllers\HomeController@instafeeds');

// Version Control
Route::get('/version_control', 'App\Http\Controllers\HomeController@version');

//Check If Mail Exists
Route::post('/checkemail','App\Http\Controllers\HomeController@checkEmail');
//Subscribers
Route::post('/subscribe','App\Http\Controllers\HomeController@subscribe');
//Request Quote
Route::get('/request_quote','App\Http\Controllers\HomeController@request_quote');
//Search Site
Route::post('/searchsite','App\Http\Controllers\HomeController@searchsite');

//BlogRoutes
Route::get('/blog','BlogController@index');
Route::get('/blog/videos','BlogController@videos');
Route::get('/blog/{title}','BlogController@blog'); 
Route::get('/blog/cat/{cat}','BlogController@blogCat');
Route::post('/blog/search','BlogController@search_blog');
Route::get('/blog/tag/{tag}','BlogController@tag');
Route::post('/blog/comment','BlogController@add_comment');


// Cart Routes
Route::get('/cart','CartController@index');
Route::get('/cart/destroy/{rowId}','CartController@destroy');
Route::get('cart/addItem/{id}','CartController@addItem');
Route::get('cart/addCart/{id}','CartController@addCart');
Route::post('/cart/update/{id}', 'CartController@update');


// Checkout Routes
Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/formvalidate', 'CheckoutController@formvalidate');
Route::get('checkout/placeOrder', 'CheckoutController@placeOrder');

//Payment pages
Route::get('mpesa/lipa_na_mpesa','PaymentsConroller@lipa_na_mpesa');
// Payments Routes
Route::get('mpesa/confirm','PaymentsConroller@confirm');
Route::get('mpesa/validate','PaymentsConroller@validation');
Route::get('mpesa/register','PaymentsConroller@register');
Route::get('/form','PayPalController@form');

use Dymantic\InstagramFeed\Profile;
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    Profile::where('username','stagepassav')->first()->refreshFeed(6);
    // return what you want
    echo "Done";
});

Auth::routes();

Route::group(['prefix'=>'admin'], function(){

  
//Login route

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminsController@index')->name('admin.index');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Testimonial
Route::get('/addTestimonial', 'AdminsController@addTestimonial');
Route::post('/add_Testimonial', 'AdminsController@add_Testimonial');
Route::get('/testimonials','AdminsController@testimonials');
Route::get('/editTestimonial/{id}', 'AdminsController@editTestimonial');
Route::get('/deleteTestimonial/{id}', 'AdminsController@deleteTestimonial');
Route::post('/edit_Testimonial/{id}', 'AdminsController@edit_Testimonial');

//Terms Privacy copyright
//copyright
Route::get('/copyright','AdminsController@copyright');
Route::post('/edit_copyright', 'AdminsController@edit_copyright');
//Privacy
Route::get('/privacy','AdminsController@privacy');
Route::get('/addPrivacy', 'AdminsController@addPrivacy');
Route::get('/editPrivacy/{id}', 'AdminsController@editPrivacy');
Route::post('/add_privacy', 'AdminsController@add_privacy');
Route::get('/delete_privacy/{id}','AdminsController@delete_privacy');
Route::post('/edit_privacy/{id}', 'AdminsController@edit_privacy');

//values
Route::get('/values','AdminsController@values');
Route::get('/addValues', 'AdminsController@addValues');
Route::get('/editValues/{id}', 'AdminsController@editValues');
Route::post('/add_values', 'AdminsController@add_values');
Route::get('/delete_values/{id}','AdminsController@delete_values');
Route::post('/edit_values/{id}', 'AdminsController@edit_values');

//Who
Route::get('/who','AdminsController@who');
Route::get('/editWho/{id}', 'AdminsController@editWho');
Route::get('/delete_who/{id}','AdminsController@delete_who');
Route::post('/edit_who/{id}', 'AdminsController@edit_who');

//Terms
Route::get('/terms','AdminsController@terms');
Route::get('/addTerms', 'AdminsController@addTerms');
Route::get('/editTerm/{id}', 'AdminsController@editTerm');
Route::post('/add_term', 'AdminsController@add_term');
Route::post('/edit_term/{id}', 'AdminsController@edit_term');
Route::get('/delete_term/{id}','AdminsController@delete_term');
//About
Route::get('/about','AdminsController@about');
Route::post('/about_save', 'AdminsController@about_save');
//Services
Route::get('/services','AdminsController@services');
Route::get('/deleteService/{id}','AdminsController@deleteService');
Route::post('/edit_Services/{id}', 'AdminsController@edit_Services');
Route::get('/editServices/{id}', 'AdminsController@editServices');
Route::get('/addService', 'AdminsController@addService');
Route::post('/add_Service', 'AdminsController@add_Service');

//Services Extras
Route::get('/extras/{serivice_id}','AdminsController@extras');
Route::get('/deleteExtras/{id}','AdminsController@deleteExtras');
Route::post('/edit_Extras/{id}', 'AdminsController@edit_Extras');
Route::get('/editExtras/{id}', 'AdminsController@editExtras');
Route::get('/addExtras/{service_id}', 'AdminsController@addExtra');
Route::post('/add_Extra', 'AdminsController@add_Extra');

//Industries
Route::get('/industries','AdminsController@industries');
Route::get('/deleteIndustries/{id}','AdminsController@deleteIndustries');
Route::post('/edit_Industries/{id}', 'AdminsController@edit_Industries');
Route::get('/editIndustries/{id}', 'AdminsController@editIndustries');
Route::get('/addIndustries', 'AdminsController@addIndustries');
Route::post('/add_Industries', 'AdminsController@add_Industries');

//Pricing
Route::get('/pricing','AdminsController@pricing');
Route::get('/deletePricing/{id}','AdminsController@deletePricing');
Route::post('/edit_Pricing/{id}', 'AdminsController@edit_Pricing');
Route::get('/editPricing/{id}', 'AdminsController@editPricing');
Route::get('/addPricing', 'AdminsController@addPricing');
Route::post('/add_Pricing', 'AdminsController@add_Pricing');

//Video
Route::get('/videos','AdminsController@videos');
Route::get('/deleteVideo/{id}','AdminsController@deleteVideo'); 
Route::post('/edit_Video/{id}', 'AdminsController@edit_Video');
Route::get('/editVideo/{id}', 'AdminsController@editVideo');

//Porfolio
Route::get('/portfolio','AdminsController@portfolio');
Route::get('/deletePortfolio/{id}','AdminsController@deletePortfolio');
Route::post('/edit_Portfolio/{id}', 'AdminsController@edit_Portfolio');
Route::get('/editPortfolio/{id}', 'AdminsController@editPortfolio');
Route::get('/addPortfolio', 'AdminsController@addPortfolio');
Route::post('/add_Portfolio', 'AdminsController@add_Portfolio');

//How It Works
Route::get('/how','AdminsController@how');
Route::get('/deleteHow/{id}','AdminsController@deleteHow');
Route::post('/edit_How/{id}', 'AdminsController@edit_How');
Route::get('/editHow/{id}', 'AdminsController@editHow');
Route::get('/addHow', 'AdminsController@addHow');
Route::post('/add_How', 'AdminsController@add_How');

//Gallery
Route::get('/gallery','AdminsController@gallery');
Route::get('/editGallery/{id}','AdminsController@editGallery');
Route::get('/deleteGallery/{id}','AdminsController@deleteGallery');
Route::post('/save_gallery/{id}', 'AdminsController@save_gallery');
Route::get('/addGallery', 'AdminsController@addGallery');
Route::get('/galleryList', 'AdminsController@galleryList');
Route::post('/add_Gallery', 'AdminsController@add_Gallery');

//Slider
Route::get('/slider','AdminsController@slider');
Route::get('/editSlider/{id}','AdminsController@editSlider');
Route::get('/deleteSlider/{id}','AdminsController@deleteSlider');
Route::post('/edit_Slider/{id}', 'AdminsController@edit_Slider');
Route::get('/addSlider', 'AdminsController@addSlider');
Route::post('/add_Slider', 'AdminsController@add_Slider');

//Banner
Route::get('/banner','AdminsController@banners');
Route::get('/editBanner/{id}','AdminsController@editBanner');
Route::post('/edit_Banner/{id}', 'AdminsController@edit_Banner');

//Clients
Route::get('/addClient', 'AdminsController@addClient');
Route::post('/add_Client', 'AdminsController@add_Client');
Route::get('/clients','AdminsController@clients');
Route::get('/editClient/{id}', 'AdminsController@editClient');
Route::get('/deleteClient/{id}', 'AdminsController@deleteClient');
Route::post('/edit_Client/{id}', 'AdminsController@edit_Client');

//Statisctics
Route::get('/stats','AdminsController@stats');
Route::get('/editStats/{id}', 'AdminsController@editStats');
Route::get('/deleteStats/{id}', 'AdminsController@deleteStats');
Route::post('/edit_Stats/{id}', 'AdminsController@edit_Stats');

//Pages
Route::get('/pages','AdminsController@pages');
Route::get('/editPage/{id}','AdminsController@editPage');
Route::get('/deletePage/{id}','AdminsController@deletePage');
Route::post('/edit_Page/{id}', 'AdminsController@edit_Page');
Route::get('/addPage', 'AdminsController@addPage');
Route::post('/add_Page', 'AdminsController@add_Page');
Route::post('/set_Page/{name}', 'AdminsController@set_Page');
Route::get('/setPage/{name}', 'AdminsController@setPage');


//Priducts
Route::get('/products','AdminsController@products');
Route::get('/editProduct/{id}','AdminsController@editProduct');
Route::get('/deleteProduct/{id}','AdminsController@deleteProduct');
Route::post('/edit_Product/{id}', 'AdminsController@edit_Product');
Route::get('/addProduct', 'AdminsController@addProduct');
Route::post('/add_Product', 'AdminsController@add_Product');


//Admin
Route::get('/admins','AdminsController@admins');
Route::get('/editAdmin/{id}','AdminsController@editAdmin');
Route::get('/deleteAdmin/{id}','AdminsController@deleteAdmin');
Route::post('/edit_Admin/{id}', 'AdminsController@edit_Admin');
Route::get('/addAdmin', 'AdminsController@addAdmin');
Route::post('/add_Admin', 'AdminsController@add_Admin');

//Orders
Route::get('/orders','AdminsController@orders');
Route::get('/editOrders/{id}','AdminsController@editOrders');
Route::get('/deleteOrders/{id}','AdminsController@deleteOrders');
Route::get('/confrimOrder/{id}','AdminsController@confrimOrder');
Route::post('/edit_Orders/{id}', 'AdminsController@edit_Orders');
Route::get('/addOrder', 'AdminsController@addOrder');
Route::post('/add_Order', 'AdminsController@add_Order');

//User
Route::get('/users','AdminsController@users');
Route::get('/editUser/{id}','AdminsController@editUser');
Route::get('/deleteUser/{id}','AdminsController@deleteUser');
Route::post('/edit_User/{id}', 'AdminsController@edit_User');
Route::get('/addUser', 'AdminsController@addUser');
Route::post('/add_User', 'AdminsController@add_User');

//Blog Controls
Route::get('/blog','AdminsController@blog');
Route::get('/editBlog/{id}','AdminsController@editBlog'); 
Route::get('/delete_Blog/{id}','AdminsController@delete_Blog');
Route::post('/edit_Blog/{id}', 'AdminsController@edit_Blog');
Route::get('/addBlog', 'AdminsController@addBlog');
Route::post('/add_blog', 'AdminsController@add_Blog');
//Categories Control
Route::get('/categories','AdminsController@categories');
Route::get('/editCategories/{id}','AdminsController@editCategories');
Route::get('/deleteCategory/{id}','AdminsController@deleteCategory');
Route::post('/edit_Category/{id}', 'AdminsController@edit_Category');
Route::get('/addCategory', 'AdminsController@addCategory');
Route::post('/add_Category', 'AdminsController@add_Category');

//Service Renreded Control
Route::get('/service_rendered','AdminsController@service_rendered');
Route::get('/editService_rendered/{id}','AdminsController@editService_rendered');
Route::get('/deleteService_rendered/{id}','AdminsController@deleteService_rendered');
Route::post('/edit_Service_rendered/{id}', 'AdminsController@edit_Service_rendered');
Route::get('/addService_rendered', 'AdminsController@addService_rendered');
Route::post('/add_Service_rendered', 'AdminsController@add_Service_rendered');

//Daily
Route::get('/daily','AdminsController@daily');
Route::get('/editDaily/{id}','AdminsController@editDaily');
Route::get('/deleteDaily/{id}','AdminsController@deleteDaily');
Route::post('/edit_Daily/{id}', 'AdminsController@edit_Daily');
Route::get('/addDaily', 'AdminsController@addDaily');
Route::post('/add_Daily', 'AdminsController@add_Daily');


//Sub Categories
Route::get('/subCategories','AdminsController@subCategories');
Route::get('/editSubCategories/{id}','AdminsController@editSubCategories');
Route::get('/deleteSubCategory/{id}','AdminsController@deleteSubCategory');
Route::post('/edit_SubCategory/{id}', 'AdminsController@edit_SubCategory');
Route::get('/addSubCategory', 'AdminsController@addSubCategory');
Route::post('/add_SubCategory', 'AdminsController@add_SubCategory');

//Active Services
Route::get('/traceServices','AdminsController@traceServices');
Route::get('/editTraceServices/{id}','AdminsController@editTraceServices');
Route::get('/deleteTraceServices/{id}','AdminsController@deleteTraceServices');
Route::post('/edit_TraceServices/{id}', 'AdminsController@edit_TraceServices');
Route::get('/addTraceServices', 'AdminsController@addTraceServices');
Route::post('/add_TraceServices', 'AdminsController@add_TraceServices');

// Generic Routes
Route::get('/form','AdminsController@form');
Route::get('/list','AdminsController@list');
Route::get('/formfile','AdminsController@formfile');
Route::get('/formfiletext','AdminsController@formfiletext');

//Payments
Route::get('/payments','AdminsController@payments');

//Notifications
Route::get('/notifications','AdminsController@notifications');
Route::get('/notification/{id}','AdminsController@notification');
Route::get('/deleteNotification/{id}','AdminsController@deleteNotification');

//Service Requests
Route::get('/requests','AdminsController@quoterequeste');
Route::get('/markRequest/{id}/{status}/{type}','AdminsController@markRequest');

//Comments
Route::get('/comments','AdminsController@comments');
Route::get('/approve/{id}','AdminsController@approve');
Route::get('/decline/{id}','AdminsController@decline');

// Error Pages
Route::get('/403','AdminsController@error403');
Route::get('/404','AdminsController@error404');
Route::get('/405','AdminsController@error405');
Route::get('/500','AdminsController@error500');
Route::get('/503','AdminsController@error503');

// Subscribers Mail
Route::post('/updatemail','AdminsController@updatemail');


//Updates
Route::get('/updates','AdminsController@updates');
Route::get('/update/{id}','AdminsController@update');
Route::get('/mark/{id}','AdminsController@mark');

//profile
Route::get('/profile','AdminsController@profile');
Route::post('/profile_save/{id}','AdminsController@profile_save');
Route::get('/editFile/{id}','AdminsController@editFile');
Route::post('/edit_File/{id}','AdminsController@edit_File');

// Gallery
Route::get('/gallery','AdminsController@gallery');

//Under Contruction
Route::get('/under_construction','AdminsController@under_construction');

//Wizard
Route::get('/wizard','AdminsController@wizard');

//Maps
Route::get('/maps','AdminsController@maps');
// SiteSettings
Route::get('/sitesettings','AdminsController@sitesettings');
Route::post('/savesitesettings','AdminsController@savesitesettings');
//Messages
Route::get('/allMessages', 'AdminsController@allMessages');
Route::get('/unread', 'AdminsController@unread');
Route::get('/read/{id}', 'AdminsController@read');
Route::post('/reply/{id}', 'AdminsController@reply');
Route::get('/deleteMessage/{id}', 'AdminsController@deleteMessage');

//Subscribers
Route::get('/subscribers', 'AdminsController@subscribers');
Route::get('/mailSubscribers/{email}', 'AdminsController@mailSubscribers');
Route::get('/mailSubscriber/{email}', 'AdminsController@mailSubscriber');
Route::get('/deleteSubscriber/{id}', 'AdminsController@deleteSubscriber');
// Version Control
Route::get('/version', 'AdminsController@version');

// Seo Settings
// SeoSettings
Route::get('/seosettings','AdminsController@seosettings');
Route::post('/saveseosettings','AdminsController@saveseosettings');
});

// Users Routes
Auth::routes();
Route::group(['prefix'=>'clientarea'], function(){
Route::get('/','ClientController@index');
Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/profile','ClientController@profile');
Route::get('/place','ClientController@place');
Route::post('/save','ClientController@save');
Route::post('/place_order','ClientController@place_order');

Route::get('/pay/{invoice}','PaymentConroller@pay');

});

// Paypall Checkout
Route::get('/paypal/{order?}', [
    'name' => 'PayPal Express Checkout', 
    'as' => 'order.paypal',
    'uses' => 'PayPalController@form',
]);

Route::post('/checkout/payment/{order}/paypal', [
    'name' => 'PayPal Express Checkout',
    'as' => 'checkout.payment.paypal',
    'uses' => 'PayPalController@checkout',
]);

Route::get('/paypal/checkout/{order}/completed', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.completed',
    'uses' => 'PayPalController@completed',
]);

Route::get('/paypal/checkout/{order}/cancelled', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.cancelled',
    'uses' => 'PayPalController@cancelled',
]);

Route::post('/webhook/paypal/{order?}/{env?}', [
    'name' => 'PayPal Express IPN',
    'as' => 'webhook.paypal.ipn',
    'uses' => 'PayPalController@webhook',
]);


Route::get('/instagram/feed', [
    'name' => 'Instagram Feed',
    'as' => 'app.instagram.feed',
    'uses' => 'InstagramController@feed',
]);