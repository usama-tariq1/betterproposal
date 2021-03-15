@extends('pages.Master.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <h3>Template Marketplace</h3>
            </div>
            <div class="col-md-5">
                <ul class="nav nav-pills tabs">
                    <li class="active"><a class="left-border" href="{{ route('marketplace') }}">View all</a></li>
                    <li ><a href="{{ route('market-proposal') }}">Proposals</a></li>
                    <li><a href="{{ route('quotes') }}">Qoutes</a></li>
                    <li><a href="{{ route('contract') }}">Contracts</a></li>
                    <li><a class="right-border" href="{{ route('sign-off') }}">Sign off</a></li>
                  </ul>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-12">
              <div class="tbl pt-4 pl-3">
                <input class="tbl-search" type="text" placeholder="Search by template name...">
                <h4 class="pt-4 pl-3">Template Name</h4>
                <table class="table mt-4">
                  <thead>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="">"Template Name"</td>
                      <td><div class="right">
                          <button class="btn pl-4 pr-4">Preview</button>
                          <button class="btn pl-4 pr-4" style="background-color: #ed5373; color: #fff;">Get This</button>
                      </div></td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="...">
                  <ul class="pagination pagination-sm justify-content-center pb-5">
                    <li class="page-item pg-active">
                      <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
    </div>
@endsection