 @extends('frontend.main_master')
 @section('main')
     <div class="content">

         <!-- Start Content-->
         <div class="container-fluid">
             <div class="row">
                 <div class="col-3">
                     <div class="card">
                         <div class="card-body position-sticky top-0 bg-light p-3">
                             <h4 class="header-title">Course content - Patient Education</h4>
                             {{-- <p class="text-muted font-14 mb-3">Scrollspy also works with nested <code>.nav</code>s.
                                 If a nested <code>.nav</code> is <code>.active</code>, its parents will also be
                                 <code>.active</code>. Scroll the area next to the navbar and watch the active
                                 class change.
                             </p> --}}

                             <div class="row " style="position: relative; z-index: 2;">
                                 <div class="col-9">
                                     <nav id="navbar-example3" class="navbar navbar-light flex-column">
                                         {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                                         <nav class="nav nav-pills flex-column">
                                             <a class="nav-link active text-uppercase font-weight-bold" href="#item-1">Item 1</a>
                                             <nav class="nav nav-pills flex-column">
                                                 <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                                 <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                             </nav>
                                             <a class="nav-link text-uppercase font-weight-bold" href="#item-2">Item 2</a>
                                             <a class="nav-link text-uppercase font-weight-bold" href="#item-3">Item 3</a>
                                             <nav class="nav nav-pills flex-column">
                                                 <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                                 <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                             </nav>
                                         </nav>
                                     </nav>
                                 </div>

                             </div>
                         </div> <!-- end card-body -->
                     </div> <!-- end card-->
                 </div> <!-- end col -->
                 <div class="col-9">
                     <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0"
                         class="scrollspy-example" style="height: 650px;">
                         <h4 id="item-1">Item 1</h4>
                         <p>Ex consequat commodo adipisicing exercitation aute excepteur
                             occaecat ullamco duis aliqua id magna ullamco eu. Do aute
                             ipsum ipsum ullamco cillum consectetur ut et aute
                             consectetur labore. Fugiat laborum incididunt tempor eu
                             consequat enim dolore proident. Qui laborum do non excepteur
                             nulla magna eiusmod consectetur in. Aliqua et aliqua officia
                             quis et incididunt voluptate non anim reprehenderit
                             adipisicing dolore ut consequat deserunt mollit dolore.
                             Aliquip nulla enim veniam non fugiat id cupidatat nulla elit
                             cupidatat commodo velit ut eiusmod cupidatat elit dolore.
                         </p>
                         <h5 id="item-1-1">Item 1-1</h5>
                         <p>Amet tempor mollit aliquip pariatur excepteur commodo do ea
                             cillum commodo Lorem et occaecat elit qui et. Aliquip labore
                             ex ex esse voluptate occaecat Lorem ullamco deserunt. Aliqua
                             cillum excepteur irure consequat id quis ea. Sit proident
                             ullamco aute magna pariatur nostrud labore. Reprehenderit
                             aliqua commodo eiusmod aliquip est do duis amet proident
                             magna consectetur consequat eu commodo fugiat non quis. Enim
                             aliquip exercitation ullamco adipisicing voluptate excepteur
                             minim exercitation minim minim commodo adipisicing
                             exercitation officia nisi adipisicing. Anim id duis qui
                             consequat labore adipisicing sint dolor elit cillum anim et
                             fugiat.</p>
                         <h5 id="item-1-2">Item 1-2</h5>
                         <p>Cillum nisi deserunt magna eiusmod qui eiusmod velit
                             voluptate pariatur laborum sunt enim. Irure laboris mollit
                             consequat incididunt sint et culpa culpa incididunt
                             adipisicing magna magna occaecat. Nulla ipsum cillum eiusmod
                             sint elit excepteur ea labore enim consectetur in labore
                             anim. Proident ullamco ipsum esse elit ut Lorem eiusmod
                             dolor et eiusmod. Anim occaecat nulla in non consequat
                             eiusmod velit incididunt.</p>
                         <h4 id="item-2">Item 2</h4>
                         <p>Quis magna Lorem anim amet ipsum do mollit sit cillum
                             voluptate ex nulla tempor. Laborum consequat non elit enim
                             exercitation cillum aliqua consequat id aliqua. Esse ex
                             consectetur mollit voluptate est in duis laboris ad sit
                             ipsum anim Lorem. Incididunt veniam velit elit elit veniam
                             Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse
                             irure. Laborum nisi sit est tempor laborum mollit labore
                             officia laborum excepteur commodo non commodo dolor
                             excepteur commodo. Ipsum fugiat ex est consectetur ipsum
                             commodo tempor sunt in proident.</p>
                         <h4 id="item-3">Item 3</h4>
                         <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                             reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                             proident occaecat excepteur aliquip culpa aute tempor
                             reprehenderit. Deserunt tempor mollit elit ex pariatur
                             dolore velit fugiat mollit culpa irure ullamco est ex
                             ullamco excepteur.</p>
                         <h5 id="item-3-1">Item 3-1</h5>
                         <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim
                             Lorem proident nostrud. Ea id dolore anim exercitation aute
                             fugiat labore voluptate cillum do laboris labore. Ex velit
                             exercitation nisi enim labore reprehenderit labore nostrud
                             ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod
                             deserunt irure nostrud irure. Ullamco proident veniam
                             laboris ea consectetur magna sunt ex exercitation aliquip
                             minim enim culpa occaecat exercitation. Est tempor excepteur
                             aliquip laborum consequat do deserunt laborum esse eiusmod
                             irure proident ipsum esse qui.</p>
                         <h5 id="item-3-2">Item 3-2</h5>
                         <p>Labore sit culpa commodo elit adipisicing sit aliquip elit
                             proident voluptate minim mollit nostrud aute reprehenderit
                             do. Mollit excepteur eu Lorem ipsum anim commodo sint labore
                             Lorem in exercitation velit incididunt. Occaecat consectetur
                             nisi in occaecat proident minim enim sunt reprehenderit
                             exercitation cupidatat et do officia. Aliquip consequat ad
                             labore labore mollit ut amet. Sit pariatur tempor proident
                             in veniam culpa aliqua excepteur elit magna fugiat eiusmod
                             amet officia.</p>
                     </div>
                 </div>
             </div>
             <!-- end row -->
         </div>
     </div>

     <script src=" {{ asset('backend/assets/js/vendor.min.js') }}"></script>

     <!-- App js -->
     <script src=" {{ asset('backend/assets/js/app.min.js') }}"></script>
 @endsection
