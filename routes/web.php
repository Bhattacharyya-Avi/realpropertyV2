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




Route::get('/','PageController@index');
Route::get('/logout','PageController@logout');

Route::get('/admin','AdminController@index')->name('admin.dashboard');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::name('/home')->get('/')->uses('PageController@index');
Route::get('/home','PageController@index');
Route::get('home','PageController@index');
Route::get('/house','PageController@index');
Route::get('/land','PageController@land');
Route::get('/apartment','PageController@apartment');
Route::get('/building','PageController@building');
Route::get('/warehouse','PageController@warehouse');
Route::get('/blog','PageController@blog');
Route::get('/about','PageController@about');
Route::get('/contactus','PageController@contactus');


Route::get('/add','PageController@addProperty');
Route::get('/add/house','PageController@addHouse');
Route::post('/add/house','PropertyController@addHouse');
Route::get('/add/land','PageController@addLand');
Route::post('/add/land','PropertyController@addLand');
Route::get('/add/building','PageController@addBuilding');
Route::post('/add/building','PropertyController@addBuilding');
Route::get('/add/apartment','PageController@addApartment');
Route::post('/add/apartment','PropertyController@addApartment');
Route::get('/add/warehouse','PageController@addWarehouse');
Route::post('/add/warehouse','PropertyController@addWarehouse');

//testing api access
Route::get('/add/map','PageController@dismap');



Route::get('/house/serach','PageController@housesearch');
Route::get('/house/{house}','HouseController@viewHouse');
Route::post('/house/{house}','HouseController@searchHouse');
Route::post('/house/{house}/offer','OfferController@houseOffer');
Route::post('/house/{house}/contactowner','UserEmailController@houseContact');
Route::post('/house/{house}/report','ReportPropertyController@houseReport');
Route::get('/house/{house}/favorite','FavoriteController@favoriteHouse');
Route::get('/profile/house/{house}/edit','HouseController@showEditHouse');
Route::get('/admin/house/{house}/edit','AdminController@showAdminEditHouse');
Route::post('/admin/house/{house}/edit','HouseController@editHouse');
Route::post('/profile/house/{house}/edit','HouseController@editHouse');
Route::post('/profile/house/{house}/delete','HouseController@deleteHouse');
Route::post('/admin/house/{house}/delete','HouseController@deleteHouse');

Route::get('/land/serach','PageController@landsearch');
Route::get('/land/{land}','LandController@viewLand');
Route::post('/land/{land}','LandController@searchLand');
Route::post('/land/{land}/offer','OfferController@landOffer');
Route::post('/land/{land}/contactowner','UserEmailController@landContact');
Route::post('/land/{land}/report','ReportPropertyController@landReport');
Route::get('/land/{land}/favorite','FavoriteController@favoriteLand');
Route::get('/profile/land/{land}/edit','LandController@showEditLand') ;
Route::get('/admin/land/{land}/edit','AdminController@showAdminEditLand') ;
Route::post('/admin/land/{land}/edit','LandController@editLand');
Route::post('/profile/land/{land}/edit','LandController@editLand');
Route::post('/profile/land/{land}/delete','LandController@deleteLand');
Route::post('/admin/land/{land}/delete','LandController@deleteLand') ;

Route::get('/building/serach','PageController@buildingsearch');
Route::get('/building/{building}','BuildingController@viewBuilding');
Route::post('/building/{building}','BuildingController@searchBuilding');
Route::post('/building/{building}/offer','OfferController@buildingOffer');
Route::post('/building/{building}/contactowner','UserEmailController@buildingContact');
Route::post('/building/{building}/report','ReportPropertyController@buildingReport');
Route::get('/building/{building}/favorite','FavoriteController@favoriteBuilding');
Route::get('/profile/building/{building}/edit','BuildingController@showEditBuilding') ;
Route::get('/admin/building/{building}/edit','AdminController@showAdminEditBuilding') ;
Route::post('/admin/building/{building}/edit','BuildingController@editBuilding');
Route::post('/profile/building/{building}/edit','BuildingController@editBuilding');
Route::post('/profile/building/{building}/delete','BuildingController@deleteBuilding');
Route::post('/admin/building/{building}/delete','BuildingController@deleteBuilding') ;

Route::get('/apartment/serach','PageController@apartmentsearch');
Route::get('/apartment/{apartment}','ApartmentController@viewApartment');
Route::post('/apartment/{apartment}','ApartmentController@searchApartment');
Route::post('/apartment/{apartment}/offer','OfferController@apartmentOffer');
Route::post('/apartment/{apartment}/contactowner','UserEmailController@apartmentContact');
Route::post('/apartment/{apartment}/report','ReportPropertyController@apartmentReport');
Route::get('/apartment/{apartment}/favorite','FavoriteController@favoriteApartment');
Route::get('/profile/apartment/{apartment}/edit','ApartmentController@showEditApartment') ;
Route::get('/admin/apartment/{apartment}/edit','AdminController@showAdminEditApartment') ;
Route::post('/admin/apartment/{apartment}/edit','ApartmentController@editApartment');
Route::post('/profile/apartment/{apartment}/edit','ApartmentController@editApartment');
Route::post('/profile/apartment/{apartment}/delete','ApartmentController@deleteApartment');
Route::post('/admin/apartment/{apartment}/delete','ApartmentController@deleteApartment') ;

Route::get('/warehouse/serach','PageController@warehousesearch');
Route::get('/warehouse/{warehouse}','WarehouseController@viewWarehouse');
Route::post('/warehouse/{warehouse}','WarehouseController@searchWarehouse');
Route::post('/warehouse/{warehouse}/offer','OfferController@warehouseOffer');
Route::post('/warehouse/{warehouse}/contactowner','UserEmailController@warehouseContact');
Route::post('/warehouse/{warehouse}/report','ReportPropertyController@warehouseReport');
Route::get('/warehouse/{warehouse}/favorite','FavoriteController@favoriteWarehouse');
Route::get('/profile/warehouse/{warehouse}/edit','WarehouseController@showEditWarehouse') ;
Route::get('/admin/warehouse/{warehouse}/edit','AdminController@showAdminEditWarehouse') ;
Route::post('/admin/warehouse/{warehouse}/edit','WarehouseController@editWarehouse');
Route::post('/profile/warehouse/{warehouse}/edit','WarehouseController@editWarehouse');
Route::post('/profile/warehouse/{warehouse}/delete','WarehouseController@deleteWarehouse');
Route::post('/admin/warehouse/{warehouse}/delete','WarehouseController@deleteWarehouse') ;



//General Route
Route::post('/sendmessage','MessageController@contactUsEmail');

//User Profile Section
Route::get('/profile','ProfileController@loadUserDashboard') ;
Route::get('/profile/changepassword','PageController@changePassword') ;
Route::get('/profile/editaccount','PageController@editAccount') ;
Route::get('/profile/myfavorite','ProfileController@viewFavorites') ;
Route::post('/profile/myfavorite/{favorite}/delete','ProfileController@deleteFavorites') ;
Route::get('/profile/message','ProfileController@myMessage') ;
Route::get('/profile/message/all','ProfileController@viewAllMessage') ;
Route::get('/profile/message/{message}/view','ProfileController@viewMessage') ;
Route::get('/profile/message/{message}/delete','ProfileController@deleteMessage') ;
Route::post('/profile/message/reply','UserEmailController@replyMessage') ;
Route::get('/profile/deleteaccount','PageController@deleteaccount') ;
Route::get('/profile/myhouse','PageController@myHouse') ;
Route::get('/profile/myland','PageController@myLand') ;
Route::get('/profile/myapartment','PageController@myApartment') ;
Route::get('/profile/mybuilding','PageController@myBuilding') ;
Route::get('/profile/mywarehouse','PageController@myWarehouse') ;
Route::get('/profile/alloffers','ProfileController@allOffers') ;
Route::get('/profile/myoffers','ProfileController@myOffers') ;
Route::get('/profile/offers/{offer}/contact','ProfileController@contactOffers') ;
Route::post('/profile/offers/contact/send','UserEmailController@contactOffersSend') ;
Route::get('/profile/offers/{offer}/contact/owner','ProfileController@contactOffersOwner') ;
Route::post('/profile/offers/contact/owner/send','UserEmailController@contactOffersOwnerSend') ;
Route::get('/profile/sold','ProfileController@showMarkSold') ;
Route::get('/profile/sold/{property}/marksold','ProfileController@markSold') ;
Route::get('/profile/sold/{property}/markunsold','ProfileController@markUnsold') ;
Route::post('/profile/updateavatar','ProfileController@updateAvatar') ;
Route::post('/profile/user/{user}/delete','ProfileController@deleteUserAccount') ;
Route::post('/profile/updateAccount','ProfileController@updateAccount') ;
Route::post('/profile/updatepassword','ProfileController@changePassword') ;

//Admin Panel
Route::post('/admin/updateavatar','AdminController@updateAvatar') ;
Route::get('/admin/user/{user}/view','AdminController@viewUser') ;
Route::get('/admin/property/all','AdminController@viewAllProperty') ;
Route::get('/admin/property/house','AdminController@viewAllHouse') ;
Route::get('/admin/property/land','AdminController@viewAllLand') ;
Route::get('/admin/property/building','AdminController@viewAllBuilding') ;
Route::get('/admin/property/apartment','AdminController@viewAllApartment') ;
Route::get('/admin/property/warehouse','AdminController@viewAllWarehouse') ;
Route::get('/admin/user/all','AdminController@viewAllUsers') ;
Route::get('/admin/user/{user}/contact','AdminController@adminContactUser') ;
Route::post('/admin/user/contact','AdminController@adminContactUserSend') ;
Route::get('/admin/user/{user}/edit','AdminController@showAdminEditUser') ;
Route::post('/admin/user/edit','AdminController@adminEditUser') ;
Route::post('/admin/user/{user}/delete','AdminController@adminDeleteUser') ;
Route::get('/admin/user/add','AdminController@showAdminAddUser') ;
Route::post('/admin/user/add','AdminController@adminAddUser') ;
Route::get('/admin/admin/all','AdminController@viewAllAdmin') ;
Route::get('/admin/admin/add','AdminController@showAdminAddAdmin') ;
Route::post('/admin/admin/add','AdminController@adminAddAdmin') ;
Route::get('/admin/admin/{admin}/edit','AdminController@showAdminEditAdmin') ;
Route::post('/admin/admin/edit','AdminController@adminEditAdmin') ;
Route::post('/admin/admin/{admin}/delete','AdminController@adminDeleterAdmin') ;
Route::get('/admin/report','AdminController@viewReports') ;
Route::post('/admin/report/{property}/lock','AdminController@lockProperty') ;
Route::post('/admin/report/{property}/unlock','AdminController@unlockProperty') ;
Route::get('/admin/articles','AdminController@allArticles') ;
Route::post('/admin/blog/{article}/delete','AdminController@deleteArticle') ;
Route::get('/admin/inquery/view','AdminController@allInquery') ;
Route::get('/admin/inquery/{message}/reply','AdminController@viewReplyInquery') ;
Route::post('/admin/inquery/reply','AdminController@replyInquery') ;
Route::post('/admin/inquery/{message}/delete','AdminController@deleteInquey') ;

//Blog
Route::get('/blog','PageController@showBlog');
Route::get('/blog/{article}/view','PageController@showBlogPost');
Route::get('/blog/new','ArticleController@newBlogPost') ;
Route::post('/blog/new','ArticleController@addBlogPost') ;
Route::get('/blog/{article}/edit','ArticleController@showEditBlogPost') ;
Route::post('/blog/{article}/edit','ArticleController@editBlogPost') ;
Route::post('/blog/comment','CommentController@addComment');
Route::get('/blog/comment/{comment}/delete','CommentController@deleteComment') ;

// Auth::routes();
Auth::routes(['verify' => true]);