<style>
    .settings-cat.branding {
        background-image: url("{{asset('/assets/images/settings-branding.png')}}");
    }

    .settings-cat.proposals {
        background-image: url("{{asset('/assets/images/settings-proposals.png')}}");
    }

    .settings-cat.admin {
        background-image: url("{{asset('/assets/images/settings-admin.png')}}");
    }

    .settings-cat.people {
        background-image: url("{{asset('/assets/images/settings-people.png')}}");
    }

    .settings-cat.profile {
        background-image: url("{{asset('/assets/images/settings-profile.png')}}");
    }

</style>



<!-- THIS IS THE SIDEBAR -->
{{-- Branding --}}
<div class="settings-cat branding">Branding</div>


    {{-- Brands --}}
    <a href="/settings/brands/add" class="no-ul">
        <div class="settings-item">Add Brand</div>

    </a>

    <a href="/settings/brands" class="no-ul">
        <div class="settings-item">All Brand</div>

    </a>


    @foreach ( App\Brand::Where('user_id' , Auth::user()->id)->get() as $brand )
        <a href="/settings/brands/{{$brand->id}}" class="no-ul">
            <div class="settings-item" style="color: black; font-size: 15px;">
                <i class="fa fa-building" aria-hidden="true"></i>
                {{$brand->brand_name}}
            </div>

        </a>
    @endforeach



{{-- Proposals --}}
<div class="settings-cat proposals">Proposals</div>
    <!--<a href="account-doctypes" class="no-ul"><div class="settings-item">Document Types</div></a>-->
    <a href="account-products" class="no-ul">
        <div class="settings-item">Products and Services</div>
    </a>
    <a href="proposal-ai" class="no-ul">
        <div class="settings-item">Proposal AI</div>
    </a>
    <a href="../integrations" class="no-ul">
        <div class="settings-item">Integrations</div>
    </a>




<div class="settings-cat admin">Admin</div>
    <a href="account-company" class="no-ul">
        <div class="settings-item">Account Details</div>
    </a>
    <a href="account-domains" class="no-ul">
        <div class="settings-item">Email Whitelisting</div>
    </a>
    <a href="/2/upgrade/choose-a-plan-from-free?cab=1&amp;c=3&amp;s=1" class="no-ul">
        <div class="settings-item">Upgrade my account</div>
    </a><!-- Find in session -->
    <a href="../upgrade/update-card?cab=1" class="no-ul">
        <div class="settings-item">Update Card Details</div>
    </a>
    <a href="account-finance" class="no-ul">
        <div class="settings-item">Financial Settings</div>
    </a>
    <a href="account-invoices" class="no-ul">
        <div class="settings-item">Invoices</div>
    </a>


<div class="settings-cat people">Users and Teams</div>
    <a href="../upgrade/teams" class="no-ul">
        <div class="settings-item">Teams</div>
    </a>
    <a href="account-users" class="no-ul">
        <div class="settings-item">Users</div>
    </a>
    <a href="account-permissions" class="no-ul">
        <div class="settings-item">Permissions</div>
    </a>



<div class="settings-cat profile">Profile</div>

    <a href="profile-name" class="no-ul">
        <div class="settings-item">Change my name and email</div>
    </a>
    <a href="profile-password" class="no-ul">
        <div class="settings-item">Change password</div>
    </a>
    <a href="profile-signature" class="no-ul">
        <div class="settings-item">Email Signature</div>
    </a>
    <a href="profile-notifications" class="no-ul">
        <div class="settings-item">Email Notifications</div>
    </a>
