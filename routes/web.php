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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', 'PagesController@getHomePage')->name('homePage');
Route::get('/about', 'PagesController@getAboutPage')->name('aboutPage');
Route::get('/works', 'PagesController@getWorksPage')->name('worksPage');
Route::get('/project/{id}', 'PagesController@getProjectDetail')->name('projectDetail');
Route::get('/contact', 'PagesController@getContactPage')->name('contactPage');

Auth::routes();

Route::get('/logout', 'CheckAuthController@getLogout')->name('logout');
Route::get('/home', 'CheckAuthController@check');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', 'Admin\AdminController@getindex')->name('admin.index');
        Route::get('/index', 'Admin\AdminController@getindex')->name('admin.index');

        /* Slider */
        Route::get('/slider/list', 'Admin\SliderController@getSliderList')->name('admin.slider.list');
        Route::get('/slider/add', 'Admin\SliderController@getSliderAdd')->name('admin.slider.add');
        Route::get('/slider/{id}/edit', 'Admin\SliderController@getSliderEdit')->name('admin.slider.edit');
        Route::get('/slider/search', 'Admin\SliderController@getSearch')->name('admin.slider.search');

        Route::post('/slider/insert/data', 'Admin\SliderController@sliderInsert')->name('admin.slider.insert');
        Route::post('/slider/update/data', 'Admin\SliderController@sliderUpdate')->name('admin.slider.update');
        /* Slider end */

        /* Staff */
        Route::get('/staff/list', 'Admin\StaffController@getStaffList')->name('admin.staff.list');
        Route::get('/staff/add', 'Admin\StaffController@getStaffAdd')->name('admin.staff.add');
        Route::get('/staff/{id}/edit', 'Admin\StaffController@getStaffEdit')->name('admin.staff.edit');
        Route::post('/staff/insert', 'Admin\StaffController@staffInsert')->name('admin.staff.insert');
        Route::post('/staff/update', 'Admin\StaffController@staffUpdate')->name('admin.staff.update');
        /* Staff end */


        /* Article */
        Route::get('/article/list', 'Admin\ArticleController@getArticleList')->name('admin.article.list');
        Route::get('/article/add', 'Admin\ArticleController@getArticleAdd')->name('admin.article.add');
        Route::get('/article/{id}/edit', 'Admin\ArticleController@getArticleEdit')->name('admin.article.edit');

        Route::post('/article/insert/data', 'Admin\ArticleController@articleInsert')->name('admin.article.insert');
        Route::post('/article/update/data', 'Admin\ArticleController@articleUpdate')->name('admin.article.update');
        /* Article end */

        /* Portfolio */
        Route::get('/portfolio/list', 'Admin\PortfolioController@getPortfolioList')->name('admin.portfolio.list');
        Route::get('/portfolio/add', 'Admin\PortfolioController@getPortfolioAdd')->name('admin.portfolio.add');
        Route::get('/portfolio/{id}/edit', 'Admin\PortfolioController@getPortfolioEdit')->name('admin.portfolio.edit');
        Route::post('/portfolio/insert', 'Admin\PortfolioController@portfolioInsert')->name('admin.portfolio.insert');
        Route::post('/portfolio/update', 'Admin\PortfolioController@portfolioUpdate')->name('admin.portfolio.update');
        /* Portfolio end */

        /* Video */
        Route::get('/videos', 'Admin\VideoController@getVideoList')->name('admin.video.list');
        Route::get('/video/add', 'Admin\VideoController@getVideoAdd')->name('admin.video.add');
        Route::get('/video/{id}/edit', 'Admin\VideoController@getVideoEdit')->name('admin.video.edit');

        Route::post('/video/insert/data', 'Admin\VideoController@videoInsert')->name('admin.video.insert');
        Route::post('/video/update/data', 'Admin\VideoController@videoUpdate')->name('admin.video.update');
        /* Video end */



        /* Contact Info */
        Route::get('/contact/info', 'Admin\ContactInfoController@contactInfo')->name('admin.contact.info');
        Route::post('/contact/update', 'Admin\ContactInfoController@contactUpdate')->name('admin.contact.update');
        /* Contact Info end */

        /* Common */
        Route::post('/remove/attach/file', 'Admin\CommonController@removeAttachFile')->name('admin.remove.file');
        Route::post('/remove/data', 'Admin\CommonController@removeData')->name('admin.remove.data');
        /* Common end*/
    });
});
