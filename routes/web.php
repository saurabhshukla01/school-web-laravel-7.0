<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// All Admin Routes Here

Route::prefix('/admin')->namespace('Admin')->group(function(){
	// All the Admin Routes will be defined here :-
	Route::match(['get','post'],'/','AdminController@login');

	Route::group(['middleware' => ['admin']],function(){

		// Admin Auth && Update Profile of Admin  && change password Routes
		Route::get('dashboard','AdminController@dashboard');
		Route::get('settings','AdminController@settings');
		Route::get('logout','AdminController@logout');
		Route::post('check-current-pwd','AdminController@check_current_pwd');
		Route::post('update-current-pwd','AdminController@update_current_pwd');
		Route::match(['get','post'],'update-admin-details','AdminController@UpdateAdminDetails');
		

		// Admin School Events Routes
		Route::get('events','EventsController@events');
		Route::match(['get','post'],'add-edit-event/{id?}','EventsController@addEditEvent');
		Route::get('delete-event/{id}','EventsController@deleteEvent');
		Route::post('update-event-status','EventsController@updateEventStatus');


		// Admin School Event Category Routes
		Route::match(['get','post'],'add-edit-event-category/{id?}','EventCategoryController@addEditEventCategory');
		Route::get('event-categories','EventCategoryController@EventCategories');
		Route::get('delete-eventCategory/{id}','EventCategoryController@deleteEventCategory');
		Route::post('update-event-category-status','EventCategoryController@updateEventCategoryStatus');

		// Admin News Category Routes
		Route::match(['get','post'],'add-edit-news-category/{id?}','NewsCategoryController@addEditNewsCategory');
		Route::get('news-categories','NewsCategoryController@NewsCategories');
		Route::get('delete-newsCategory/{id}','NewsCategoryController@deleteNewsCategory');
		Route::post('update-news-category-status','NewsCategoryController@updateNewsCategoryStatus');


		// Admin News Routes
		Route::get('news','NewsController@newses');
		Route::match(['get','post'],'add-edit-news/{id?}','NewsController@addEditNews');
		Route::get('delete-news/{id}','NewsController@deleteNews');
		Route::post('update-news-status','NewsController@updateNewsStatus');

		// Admin Subject Category Routes
		Route::match(['get','post'],'add-edit-subject-category/{id?}','SubjectCategoryController@addEditSubjectCategory');
		Route::get('subject-categories','SubjectCategoryController@subjectCategories');
		Route::get('delete-subjectCategory/{id}','SubjectCategoryController@deleteSubjectCategory');
		Route::post('update-subject-category-status','SubjectCategoryController@updateSubjectCategoryStatus');

		// Admin Staff Routes
		Route::get('staff','StaffController@staff');
		Route::match(['get','post'],'add-edit-staff/{id?}','StaffController@addEditStaff');
		Route::get('delete-staff/{id}','StaffController@deleteStaff');
		Route::post('update-staff-status','StaffController@updateStaffStatus');

		// Admin School Category Routes Here
		Route::match(['get','post'],'add-edit-school-category/{id?}','SchoolCategoryController@addEditSchoolCategory');
		Route::get('school-categories','SchoolCategoryController@SchoolCategories');
		Route::get('delete-schoolCategory/{id}','SchoolCategoryController@deleteSchoolCategory');
		Route::post('update-school-category-status','SchoolCategoryController@updateSchoolCategoryStatus');

		// Admin Gallary Routes
		Route::get('gallary','GallaryController@Gallary');
		Route::match(['get','post'],'add-edit-gallary/{id?}','GallaryController@addEditGallary');
		Route::get('delete-gallary/{id}','GallaryController@deleteGallary');
		Route::post('update-gallary-status','GallaryController@updateGallaryStatus');



	});	

});


// All Front Routes Here

Route::namespace('Front')->group(function(){

	// Routes Here Front (Index) In UserView
	Route::get('/','Indexcontroller@index');
	Route::get('about','Indexcontroller@aboutUs');
	Route::get('contact','Indexcontroller@Contact');
	Route::get('notification','Indexcontroller@Notification');
	Route::get('faq','Indexcontroller@Faq');
	Route::get('fee-structure','Indexcontroller@Fee_structure');
	Route::get('awards','Indexcontroller@Awards');
	Route::get('alumni','Indexcontroller@Alumni');


	// Routes Here Event In UserView
	Route::get('/event','EventController@index');
	Route::get('/event-details/{id?}','EventController@EventDetails');

	// Routes Here News In UserView
	Route::get('/news','NewsController@index');
	Route::get('/news-details/{id?}','NewsController@NewsDetails');

	// Routes Here Staff In UserView 
	Route::get('/staff','StaffController@index');
	Route::get('/staff-details/{id?}','StaffController@StaffDetails');

	// Routes Here Carrier In UserView 
	Route::get('/carrier','CarrierController@index');

	// Routes Here Carrier In UserView 
	Route::get('/gallary','GallaryController@index');

});