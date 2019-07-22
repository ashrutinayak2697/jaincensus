<?php

use GuzzleHttp\Client;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('jaincount_user/index');
});
Route::get('/contentone', function () {
    return view('jaincount_user/contentone');
});
Route::get('/privacy', function () {
    return view('jaincount_user/privacy');
});
Route::get('/contentwo', function () {
    return view('jaincount_user/contentwo');
});
Route::get('/faq', function () {
    return view('jaincount_user/faq');
});
Route::get('/contact','RegisterController@contact');
Route::post('contactadd','RegisterController@contactadd')->name('contactadd');
Route::post('feedbackadd','RegisterController@index')->name('feedbackadd');
Route::get('/feedback','RegisterController@create');
Route::get('verification', function () {
    return view('jaincount_user/verification');
});
Route::get('verificationmobile', function () {
    return view('jaincount_user/verificationmobile');
});
// Route::get('verification','RegisterMemberController@show')->name('verification');

Route::get('test','Test\TestController@test');
Route::post('demo','JaincountController@makeRequest');
Route::get('testclient','JaincountController@testclient');
Route::post('duplication','JaincountController@duplication');


// This routes are register user and register page 
// Route::get('/countrycode','CountryController@create');
Route::post('jaincount','RegisterMemberController@store')->name('jaincount');
Route::get('otp','RegisterMemberController@create');
Route::post('demo1','RegisterMemberController@register');
Route::post('otpmsg','RegisterMemberController@otpmsg')->name('otpmsg');
Route::get('register','RegisterMemberController@index');
Route::get('get-state-list/','DropdownController@getStateList');
Route::get('jaincount_user/message','JaincountController@index');


// This routes are edit details for user

Route::post('otpverify','JaincountController@otpverify')->name('otpverify');
Route::post('demo2','JaincountController@otp');
Route::post('otpverifymobile','JaincountController@otpverification')->name('otpverifymobile');
Route::get('otpverifymobile','JaincountController@index1');
Route::get('otpmobile','JaincountController@otpverification1');
Route::post('duplicationedit','JaincountController@duplicationedit');
Route::get('edit','JaincountController@create')->name('edit');
Route::get('get-state-list1/','DropdownController@getStateList1');
Route::post('edit','JaincountController@edit')->name('edit');
Route::get('vieweditdetails','JaincountController@vieweditdetails');
// Route::get('viewperson/{id}','JaincountController@viewperson');
// Route::get('otpverify''DropdownController@store');
// Route::get('get-state-list1/','DropdownController@getStateList2');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addfamily','AddfamilymemberController@addfamily')->name("addMember");
Route::post('/addFamilyPost','AddfamilymemberController@addFamilyPost')->name("addMemberPost");
Route::get('/dashborad','AddfamilymemberController@dashborad')->name("familyDahsboard");
Route::get('/delete-family-member/{id}','AddfamilymemberController@deleteMember')->name('deleteMember');
Route::get('/ViewMemberDetails/{eid}','AddfamilymemberController@ViewMemberDetails')->name('ViewMemberDetails');
Route::post('edit','AddfamilymemberController@edit')->name('edit');
Route::get('/addMemberedit','AddfamilymemberController@addfamilyedit')->name('addMemberedit');
Route::post('addMembereditPost','AddfamilymemberController@addMembereditPost')->name("addMembereditPost");
