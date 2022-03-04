@extends('layouts.page')

@section('content')

<div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                  <h1 class="stunning-header-title">{{ $page->name }}</h1>
            </div>
      </div>

      <div class="container">
            <div class="row medium-padding120">
                  <main class="main">
                        <div class="col-lg-10 col-lg-offset-1">
                        <article class="hentry post post-standard-details">

                              
                              <div class="post__content">


      

                                    <div class="post__content-info">

                                          {!! $page->content !!}

                                          
                                    </div>
                              </div>

                              <div class="socials text-center">
                                    <div class="addthis_inline_share_toolbox_gjor"></div>
                              </div>

                        </article>

                        

                        

                        

                        


                        </div>

                        <!-- End Post Details -->

                        <!-- Sidebar-->
                        
                        </div>

                        <!-- End Sidebar-->

                  </main>
            </div>
      </div>

@endsection