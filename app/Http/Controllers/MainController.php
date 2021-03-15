<?php

namespace App\Http\Controllers;

use App\Template;
use App\TemplatePage;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }


    public function report()
    {
        return view('pages.report');
    }


    public function marketplace()
    {
        return view('pages.marketplace');
    }
    public function marketproposal()
    {
        return view('pages.market-proposals');
    }
    public function quotes()
    {
        return view('pages.quotes');
    }
    public function contract()
    {
        return view('pages.contract');
    }
    public function signoff()
    {
        return view('pages.sign-off');
    }
    public function firstLogin()
    {
        return view('first-login.welcome');
    }
    public function accountDetails()
    {
        return view('first-login.account-details');
    }
    public function uploadLogo()
    {
        return view('first-login.upload-logo');
    }
    public function service()
    {
        return view('first-login.service');
    }
    public function start()
    {
        return view('start.start');
    }




    public function profileIndex()
    {
        return view('profile.index');
    }
    public function accountProducts()
    {
        return view('profile.account-products');
    }
    public function accountProductsEdit()
    {
    return view('profile.account-products-edit');
    }
    public function proposalAi()
    {
        return view('profile.proposalAi');
    }
    public function accountCompany()
    {
        return view('profile.account-company');
    }
    public function accountDomains()
    {
        return view('profile.account-domains');
    }
    public function accountFinance()
    {
        return view('profile.account-finance');
    }
    public function accountUsers()
    {
        return view('profile.account-users');
    }
    public function accountPermissions()
    {
        return view('profile.account-permissions');
    }
    public function accountBrandingName()
    {
        return view('profile.account-branding-name');
    }
    public function profilePassword()
    {
        return view('profile.profile-password');
    }
    public function profileSignature()
    {
        return view('profile.profile-signature');
    }
    public function profileNotifications()
    {
        return view('profile.profile-notification');
    }
    public function integrations()
    {
        return view('integrations.index');
    }
    public function crm()
    {
        return view('integrations.crm');
    }
    public function connect()
    {
        return view('integrations.connect');
    }
    public function livechat()
    {
        return view('integrations.livechat');
    }
    public function payments()
    {
        return view('integrations.payments');
    }
    public function projects()
    {
        return view('integrations.projects');
    }
    public function fonts()
    {
        return view('integrations.fonts');
    }
    public function zapier()
    {
        return view('integrations.zapier');
    }
    public function remarketing()
    {
        return view('integrations.remarketing');
    }
    public function api()
    {
        return view('integrations.api');
    }

    public function documentation()
    {
        return view('documentation.document');
    }

    //admin-functions
    public function user()
    {
        return view('admin.user');
    }
    public function manageUser()
    {
        $data['users']   = User::all();
        $data['counter'] = 1;
        return view('admin.manage-user',$data);
    }
}
