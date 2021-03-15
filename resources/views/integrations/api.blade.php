@extends('integrations.Master.app')
@section('content')
    <div class="padding60 overflow block">
            <div class="integrations-title">Better Proposals API</div>
            <div class="integrations-subtitle">Create your own custom integrations with the Better Proposals API. To get started, check out our <a href="" target="_blank"d onclick="toDocument" style="font-size: 20px; text-decoration: underline">full API documentation</a></div>
            <h2>Your API key</h2>
            You don't have an API Key yet, click the button below to create one.<br><br>
            <div class="grid_12 omega">
                <a href="../../integrations/"><div class="button white left save">Cancel</div></a>
                <a href="?action=generate"><div class="button pink left nomargin save" style="width: auto; margin: 0">Generate API Key</div></a>
            </div>
    </div>
@endsection
