<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCoverController;
use App\Http\Controllers\AdminProposalController;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Branding\BrandingController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\FirstLogin;
use App\Http\Middleware\IsAdmin;




use App\Http\Controllers\HomeController;
use App\Http\Controllers\Marketplace;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SettingController;
use App\Http\Controllers\TemplatePageController;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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


// public Routes



Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(IsUser::class);

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::prefix('/firstlogin')->group(function () {
        Route::get('/', [FirstLogin::class, 'index']);
        Route::post('/save', [FirstLogin::class, 'save']);

        // Route::get('/details', [FirstLogin::class, 'details']);
    });



    Route::get('/test', [TestController::class, 'index']);



});


Route::prefix('/profile')->middleware(IsUser::class)->group(function () {

    Route::get('/', [ProfileController::class, 'index']);



});



// product
Route::prefix('/product')->middleware(IsUser::class)->group(function () {
    // api reserved
    Route::get('/add/{name}', [ProductController::class, 'addproduct']);

    Route::get('/get/{id}', [ProductController::class, 'getproduct']);




});









// template Routes

Route::prefix('/template')->middleware(IsUser::class)->group(function () {
    Route::get('/',[TemplatePageController::class,'index'])->name('template');

    Route::get('/start',[TemplatePageController::class,'startTemplate'])->name('template.start');
    Route::post('/create',[TemplatePageController::class,'createTemplate'])->name('create.template');

    Route::post('/addpage',[TemplatePageController::class,'addPage'])->name('addpage');


    Route::get('/template/{id}',[TemplatePageController::class,'templateCreate'])->name('template.create');


    // Route::get('/cover',[TemplatePageController::class,'cover'])->name('template.cover');





    Route::prefix('/add')->group(function () {
        Route::post('/', [TemplatePageController::class, 'add']);
        Route::get('/template', [TemplatePageController::class, 'templateinit']);
        Route::get('/section', [TemplatePageController::class, 'addsection']);

        Route::get('/block/{name}/{order}', [TemplatePageController::class, 'addblock']);


    });




    Route::get('/{id}',[TemplatePageController::class,'edit']);

    Route::post('/update/{code}',[TemplatePageController::class,'updatetemplate']);

    Route::get('/preview/{code}',[TemplatePageController::class,'preview']);

    Route::get('/delete/{id}',[TemplatePageController::class,'delete']);
    // Route::get('/delete/{id}',function(){
    //     return view('')
    // });




});


// public covers
Route::prefix('/cover')->middleware(IsUser::class)->group(function () {
    Route::get('/',[CoverController::class,'index']);
    Route::get('/delete/{id}',[CoverController::class,'delete']);

    // add new
    Route::post('/add',[CoverController::class,'add']);

    // edit
    Route::get('/edit/{id}',[CoverController::class,'edit']);
    Route::post('/update/{id}',[CoverController::class,'update']);




});



// public proposal Routes

Route::prefix('/proposals')->middleware(IsUser::class)->group(function () {
    Route::get('/',[ProposalController::class,'proposals'])->name('proposals');

    // add
    Route::get('/add',[ProposalController::class,'add']);
    Route::post('/add',[ProposalController::class,'setproposal']);

    // delete
    Route::get('/delete/{id}',[ProposalController::class,'delete']);


    // collect
    Route::get('/collect/{id}',[ProposalController::class,'collect']);


    // cache
    Route::post('/cache/{id}',[ProposalController::class,'cache']);
    Route::post('/cache/delete/{id}',[ProposalController::class,'cachedelete']);




    Route::get('/outstanding',[ProposalController::class,'outstanding'])->name('outstanding');

    Route::get('/accepted',[ProposalController::class,'accepted'])->name('accepted');

    Route::get('/detail/{id}',[ProposalController::class,'detail']);



    Route::get('/lost',[ProposalController::class,'lost'])->name('lost');
});

// accept proposal

Route::post('/proposal/accept/{id}',[ProposalController::class,'accept']);
Route::post('/proposal/decline/{id}',[ProposalController::class,'decline']);
Route::get('/proposal/thanks/{id}',[ProposalController::class,'thanks']);
Route::get('proposal/pdf/{id}' ,[ProposalController::class,'topdf']);

Route::get('/preview/{code}',[ProposalController::class,'preview']);




// Marketplace

Route::prefix('/marketplace')->middleware(IsUser::class)->group(function () {

    // templates
    Route::get('/templates',[Marketplace::class,'index']);
    Route::get('/template/get/{id}',[Marketplace::class,'gettemplate']);


    // templates
    Route::get('/covers',[Marketplace::class,'covers']);
    Route::get('/cover/get/{id}',[Marketplace::class,'getcover']);

});





// Admin

Route::prefix('/admin')->middleware(IsAdmin::class)->group(function () {

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard');


    // Users
    Route::resource('/users','AdminUserController');


    // Proposals

    Route::prefix('/proposals')->group(function () {

        Route::get('/',[AdminProposalController::class,'index']);

        Route::get('/all',[AdminProposalController::class,'index']);

    });


    // Templates

    Route::prefix('/templates')->group(function () {

        Route::get('/',[AdminTemplateController::class,'index']);

        Route::get('/all',[AdminTemplateController::class,'index']);

    });

    // covers
    Route::prefix('/covers')->group(function () {

        Route::get('/',[AdminCoverController::class,'cover']);

        Route::get('/all',[AdminCoverController::class,'cover']);
        Route::post('/add',[AdminCoverController::class,'addcover']);


    });


    // Route::get('/user',[MainController::class,'user'])->name('user');
    // Route::get('/manage-user',[MainController::class,'manageUser'])->name('manage-user');
    // Route::post('/save-user',[AdminController::class,'saveUser'])->name('save.user');
});


// start



Route::get('/start',[MainController::class,'start'])->name('start');


// Settings

Route::prefix('/settings')->middleware(IsUser::class)->group(function () {

    Route::get('/',[SettingController::class,'index'])->name('settings');

    Route::prefix('/brands')->group(function () {

        // default
        Route::get('/',[BrandingController::class,'index']);

        // add
        Route::get('/add',[BrandingController::class,'add']);
        Route::post('/add',[BrandingController::class,'store']);

        // update
        Route::get('/{id}',[BrandingController::class,'edit']);
        Route::post('update/{id}',[BrandingController::class,'update']);


        // sidebar
        Route::get('/{id}/sidebar',[BrandingController::class,'sidebar']);
        Route::patch('/{id}/sidebar',[BrandingController::class,'sidebarupdate']);

        // sidebar
        Route::get('/{id}/email',[BrandingController::class,'email']);
        Route::patch('/{id}/email',[BrandingController::class,'emailupdate']);





    });



    // Route::get('/branding',[SettingController::class,'branding']);


});







// Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/report',[MainController::class,'report'])->name('report');
Route::get('/marketplace',[MainController::class,'marketplace'])->name('marketplace');
Route::get('/market-proposal',[MainController::class,'marketproposal'])->name('market-proposal');
Route::get('/quotes',[MainController::class,'quotes'])->name('quotes');
Route::get('/contract',[MainController::class,'contract'])->name('contract');
Route::get('/sign-off',[MainController::class,'signoff'])->name('sign-off');
Route::get('/first-login',[MainController::class,'firstLogin'])->name('first-login');
Route::get('/account-details',[MainController::class,'accountDetails'])->name('acoount-details');
Route::get('/upload-logo',[MainController::class,'uploadLogo'])->name('upload-logo');
Route::get('/service',[MainController::class,'service'])->name('service');
Route::get('/profile-index',[MainController::class,'profileIndex'])->name('profile-index');
Route::get('/account-products-edit',[MainController::class,'accountProductsEdit'])->name('account-products-edit');
Route::get('/account-products',[MainController::class,'accountProducts'])->name('account-products');
Route::get('/proposal-ai',[MainController::class,'proposalAi'])->name('proposal-ai');
Route::get('/account-company',[MainController::class,'accountCompany'])->name('account-company');
Route::get('/account-domains',[MainController::class,'accountDomains'])->name('account-domains');
Route::get('/account-finance',[MainController::class,'accountFinance'])->name('account-finance');
Route::get('/account-users',[MainController::class,'accountUsers'])->name('account-users');
Route::get('/account-permissions',[MainController::class,'accountPermissions'])->name('account-permissions');
Route::get('/account-branding-name',[MainController::class,'accountBrandingName'])->name('account-branding-name');
Route::get('/profile-password',[MainController::class,'profilePassword'])->name('profile-password');
Route::get('/profile-signature',[MainController::class,'profileSignature'])->name('profile-signature');
Route::get('/profile-notifications',[MainController::class,'profileNotifications'])->name('profile-notifications');
Route::get('/integrations',[MainController::class,'integrations'])->name('integrations');
Route::get('/crm',[MainController::class,'crm'])->name('crm');
Route::get('/connect',[MainController::class,'connect'])->name('connect');
Route::get('/livechat',[MainController::class,'livechat'])->name('livechat');
Route::get('/payments',[MainController::class,'payments'])->name('payments');
Route::get('/projects',[MainController::class,'projects'])->name('projects');
Route::get('/fonts',[MainController::class,'fonts'])->name('fonts');
Route::get('/zapier',[MainController::class,'zapier'])->name('zapier');
Route::get('/remarketing',[MainController::class,'remarketing'])->name('remarketing');
Route::get('/api',[MainController::class,'api'])->name('api');

Route::get('/documentation',[MainController::class,'documentation'])->name('documentation');


// Auth::routes();

// Route::get('/home', [HomeController::class,'home'])->name('home');
