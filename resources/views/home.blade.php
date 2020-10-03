@extends('layouts.app')

@section('content')
<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span
                                                style="color: #c24edf;">FOLLOWED COURSES</span></div>
                                        {{--<div class="text-dark font-weight-bold h5 mb-0"><span><?php followed_courses() ?></span></div>--}}
                                    </div>
                                    <div class="col-auto"><i class="far fa-star-half fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span
                                                style="color: #9d67b6;">&nbsp;COMPLITE COURSES</span></div>
                                        {{--<div class="text-dark font-weight-bold h5 mb-0"><span><?php complete_courses() ?></span></div>--}}
                                    </div>
                                    <div class="col-auto"><i class="far fa-gem fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span
                                                style="color: #b44ed8;">AVARAGE SCORE</span></div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                                                    {{--<span>50%</span>--}}</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" aria-valuenow="50"
                                                         aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                        <span class="sr-only">50%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-chart-line fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span
                                                style="color: #a73eb0;">ALL COURSE</span></div>
                                        {{--<div class="text-dark font-weight-bold h5 mb-0"><span><?php get_all_courses()?></span></div>--}}
                                    </div>
                                    <div class="col-auto"><i class="far fa-file-code fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="highlight-course">
                            <div class="d-flex flex-wrap justify-content-between-md justify-content-center">
                                <div class="align-self-start d-none d-xl-block highlight-course__col highlight-course__col--title pt-5x">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h2>Choose</br> what to learn</h2>
                                        <p>Start learning popular programming languages.</p>
                                    </div>
                                </div>
                                <div class="highlight-course__wrap">
<!--                                    --><?php //get_content_of_courses();?>

                                </div>

                            </div>
                        </div>
                        <div class="compiler-cta">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="compiler-cta__col col-md-6 col-lg-7 order-2 order-1-md">
                                        <img alt="Python online compiler (interpreter) image" title="Python online compiler (interpreter)"
                                             class="compiler-cta__image" width="735" src="images/site/loop-ide.JPG">
                                    </div>
                                    <div class="compiler-cta__col compiler-cta__details col-md-6 col-lg-5 order-1 order-2-md">
                                        <h2>Online Compiler And Interpreter</h2>
                                        <p>
                                            Get started with Any Programming Language in no time. Now you can write and run
                                            code online in your browser.</p>
                                        <a title="Python Online Compiler (Interpreter)" href="compiler/index.html"
                                           class="btn btn--primary">Run Your Code In Loop IDE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="compiler-cta">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="compiler-cta__col col-md-6 col-lg-7 order-2 order-1-md">
                                        <img alt="Python online compiler (interpreter) image" title="Python online compiler (interpreter)"
                                             class="compiler-cta__image" width="735" src="images/site/lopp-editor.JPG">
                                    </div>
                                    <div class="compiler-cta__col compiler-cta__details col-md-6 col-lg-5 order-1 order-2-md">
                                        <h2>Online Live Web editor</h2>
                                        <p>
                                            Get started with Web Development in no time. Now you can write and see the out put in your browser.</p>
                                        <a title="Python Online Compiler (Interpreter)" href="compiler/index.html"
                                           class="btn btn--primary">Run Your Code In Loop IDE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start: Chart -->
                    <div class="row"></div>

                    <!-- End: Chart -->
                    <!--      -->
                </div>
            </div>

</div>
@endsection
