

    <!Doctype html>
<html class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff" />

    <link type="text/css" rel="stylesheet" href="assets/css/css_UcSOF8kQrg1IPnRECbOvjRs-aA1BXwcIw5MIC3UC4xA.css" media="all" />
    <script type="text/javascript" src="ajax/libs/jquery/1.12.0/jquery.min.js"></script>



</head>

<body class="tutorial-detail">

<header class="main-nav">
    <nav>
        <div class="container flex-1">
            <div class="d-flex align-items-center p-relative">
                <button class="main-nav__menu-btn d-lg-none d-flex">

                </button>

                <div class="brand">
                    <a href="index.php" title="Programiz">
                        <img class="d-lg-none" src="images/site/logo.jpg" alt="">

                    </a>
                </div>

                <div class="navigation d-none d-lg-flex align-items-center">

                    @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="navigation__node">
                                    <span class="navigation__node__label">
                                        Sign In
                                    </span>
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="navigation__node">
                                         <span class="navigation__node__label">
                                        Sign Up
                                    </span>
                                    </a>
                                @endif
                            @endauth

                    @endif

                </div>



            </div>
        </div>
    </nav>
</header>
<main>

    <div id="node-368" class="node node-title-page clearfix" about="/node/368" typeof="sioc:Item foaf:Document">


        <span property="dc:title" content="Programiz: Learn to Code for Free" class="rdf-meta element-hidden"></span>

        <div class="content">

            <div class="container">
                <div class="cover row">
                    <div class="col-md-5">
                        <div class="cover__details">
                            <h1>Learn to Code <br>for Free</h1>

                            <p>Learn to code with our beginner-friendly tutorials and examples. Read tutorials, try it from our IDE,
                                write programs, and learn to code.</p>

                            <div class="cover__form">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 d-flex justify-content-center">
                        <img class="cover__artwork" title="Learn to code with Programiz" width="475" alt="Learn to code with Programiz"
                             src="images/site/home.png">
                    </div>
                </div>


                <div class="highlight-course">
                    <div class="d-flex flex-wrap justify-content-between-md justify-content-center">
                        <div class="align-self-start d-none d-xl-block highlight-course__col highlight-course__col--title pt-5x">
                            <div class="d-flex flex-column justify-content-center">
                                <h2>Choose</br> what to learn</h2>
                                <p>Start learning popular programming languages.</p>
                            </div>
                        </div>
                        <div class="highlight-course__wrap">


                        </div>

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
                                Python code online in your browser.</p>
                            <a title="Python Online Compiler (Interpreter)" href="python-programming/online-compiler/index.html"
                               class="btn btn--primary">Run Your Code In Loop IDE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-section">
                <div class="container">
                    <div class="section-title text-center">
                        <h2>Why Loop?</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="media">
                                <div class="media__image">

                                </div>
                                <div class="media__details">
                                    <h3>
                                        Programming made easy
                                    </h3>
                                    <p>
                                        We focus on simplicity. Programming tutorials and examples written in simple, understandable
                                        language
                                        for beginners.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="media">
                                <div class="media__image">

                                </div>
                                <div class="media__details">
                                    <h3>
                                        Content You Can Trust
                                    </h3>
                                    <p>
                                        A dedicated group of experts continually working to create programming resources that are
                                        accurate and easier to understand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="media">
                                <div class="media__image">

                                </div>
                                <div class="media__details">
                                    <h3>
                                        Learn by Doing
                                    </h3>
                                    <p>
                                        The only way to learn to program is by writing code. We provide a lot of complete examples
                                        so that run
                                        and edit code on your own.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>



</main>
</body>

</html>
