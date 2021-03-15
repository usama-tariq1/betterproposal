@extends('profile.Master.app')
@section('content')

    <style>
        .create-products{
            display: block !important;
        }
        .anchor{
            text-decoration: underline;
        }
    </style>
        <div class="padding60 overflow block">
        <h2>Products and Services</h2>

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td>
                    <a class="anchor" href="account-products-edit?id=982579">Untitled Product</a>
                </td>
                <td>
                    <div class="right">
                        <a href="javascript:void(0);" onclick="javascript:duplicate_product(982579);"><div class="button white small"><span class="icon-duplicate"></span>Duplicate</div></a>
                        <a href="account-products-edit?id=982579#"><div class="button white small"><span class="icon-edit"></span>Edit</div></a>
                        <a href="javascript:void(0);" onclick="javascript:archive_product(982579);"><div class="button white small"><span class="icon-archive"></span>Archive</div></a>
                    </div>
                </td>
            </tr>
            </tbody></table>
    </div>
@endsection
