@extends('pages.Master.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="mt-3 mb-5">Create New Proposal Template</h1>

                <!-- Start Form -->
                <form name="template-create" id="template-create" method="post" action="{{route('create.template')}}" >
                    @csrf
                    <input type="hidden" name="SaveTemplate" value="SaveTemplate">

                    <div class="label">Template Name</div>
                    <input name="TemplateName" id="TemplateName" type="text" class="textbox" >
                    <br>
                    <!--  <div class="label">Document Type</div>
                      <select name="TypeID" class="textbox">
                              </select>
                      <br/>-->




                    <div class="grid_12">
                        <a href="/2/templates/"><div class="button white left"><span class="icon-cancel"></span>Cancel</div></a>
                        <input type="submit" id="save_changes" value="Next" class="button green nomargin left">
                    </div>

                </form><!-- End Form -->

            </div>
        </div>
    </div>
@endsection
