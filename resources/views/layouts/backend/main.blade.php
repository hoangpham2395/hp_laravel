<!DOCTYPE html>
<html lang="vi" dir="ltr">
@include('layouts.backend.head')

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({showSpinner: false});
    NProgress.start();
</script>
<div class="wrapper">
    @include('layouts.backend.sidebar')
    <div class="page-wrapper">
        <!-- Header -->
        @include('layouts.backend.header')
        <div class="content-wrapper">
            <div class="content">
                <div class="breadcrumb-wrapper">
                    <h1>Tables</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <span class="mdi mdi-home"></span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                data-tables
                            </li>
                            <li class="breadcrumb-item" aria-current="page">basic-data-table</li>
                        </ol>
                    </nav>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header card-header-border-bottom">
                                <h2>Basic Form Controls</h2>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="Enter Email">
                                        <span class="mt-2 d-block">We'll never share your email with anyone else.</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlPassword">Password</label>
                                        <input type="password" class="form-control" id="exampleFormControlPassword"
                                               placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect12">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect12">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Example multiple select</label>
                                        <select multiple class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                        <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- End Content -->
        </div> <!-- End Content Wrapper -->
        <!-- Footer -->
        @include('layouts.backend.footer')
    </div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->
@include('layouts.backend.footer_js')
@stack('scripts')
</body>
</html>

