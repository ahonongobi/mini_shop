@extends('layouts._layouts')

@section('content')

<div class="app">
    <!--[if lt IE 10]>
  <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
  <![endif]-->
    <!-- .app-header -->
    
    <!-- .app-main -->
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- .breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="#"><i
                                            class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                                </li>
                            </ol>
                        </nav><!-- /.breadcrumb -->
                        <!-- floating action -->
                        <button type="button" data-toggle="modal" data-target="#modalTable"
                            class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
                        <!-- /floating action -->
                        <!-- title and toolbar -->
                        <div id="pending" class="d-md-flex align-items-md-start ">
                            <div style="display: none" class="col-lg-6">
                                <!-- Growing spinner -->
                                <h3 class="section-title"> Growing spinner </h3>
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-secondary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-danger" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-info" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-muted" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-dark" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div><!-- /grid column -->
                            <h1 class="page-title mr-sm-auto"> Les demandes </h1><!-- .btn-toolbar -->
                            <!-- /.btn-toolbar -->
                            
                        </div><!-- /title and toolbar -->
                    </header><!-- /.page-title-bar -->
                    <!-- .page-section -->
                    <div class="page-section">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        
                        <!-- .card -->
                        <div class="card card-fluid">
                            <!-- .card-header -->
                            <div class="card-header">
                                <!-- .nav-tabs -->
                                <!-- /.nav-tabs -->
                            </div><!-- /.card-header -->
                            <!-- .card-body -->
                            <div class="card-body">

                                
                                <!-- .form-group -->
                                <!-- /.form-group -->
                                <!-- .table-responsive -->

                                <div class="table-responsive">
                                    <!-- .table -->
                                    <table class="table">
                                        <!-- thead -->
                                        <thead>
                                            <tr>

                                                <th> Nom </th>
                                                <th>Adresse</th>
                                                <th> email </th>
                                                <th> Montant </th>
                                                <th> Telephone </th>
                                                <th> Message </th>
                                                
                                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        <!-- tbody -->
                                        {{--<tbody>
                                            <!-- tr -->
                                            @foreach ($user as $item)
                                                <tr>


                                                    <td class="align-middle"> {{ $item->nom }} </td>
                                                    <td class="align-middle"> {{ $item->adresse }} </td>
                                                    <td class="align-middle"> {{ $item->email }} </td>
                                                    <td class="align-middle"> {{ $item->montant }}€ </td>
                                                    <td class="align-middle"> {{ $item->telephoneportable }} </td>
                                                    <td class="align-middle"> {{ substr($item->message, 0, 10) . '...'}} </td>
                                                    <td class="align-middle text-right">
                                                        <a onclick="send_message({{$item->id}},'{{$item->nom}}')"
                                                            class="btn btn-sm  btn-icon btn-secondary"><i
                                                                class="fa fa-envelope"></i> <span
                                                                class="sr-only">envelope</span></a> <a
                                                            onclick="pending()"
                                                            href="{{ route('users.index', ['download' => $item->id]) }}"
                                                            class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-file"></i> <span
                                                                class="sr-only">file</span></a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>--}}<!-- /tbody -->
                                    </table><!-- /.table -->
                                </div><!-- /.table-responsive -->
                                <!-- .pagination -->
                                <!-- /.pagination -->
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->

                        <!-- .section-block -->

                        <!-- .card -->
                        <!-- /.card -->

                        <!-- .section-block -->
                        <div class="section-block">

                            <a href="{{URL('/addproduct')}}"  class="btn btn-secondary">Créer un produit</a>
                        </div><!-- /.section-block -->
                        <!-- Modal -->
                        <div class="modal fade" id="modalTable" tabindex="-1" role="dialog"
                            aria-labelledby="modalTableLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        </h6><button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <!-- .table -->
                                        <table class="table table-striped">
                                            <!-- thead -->
                                            <thead class="thead-">
                                                <tr>

                                                    <th> Iban </th>
                                                    <th>NOM DE BANK</th>
                                                    <th> BIC </th>
                                                    <th> TITULAIRE </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <!-- tbody -->
                                            {{--<tbody>
                                                <!-- tr -->
                                                @foreach ($infos as $item)
                                                    <tr>
                                                        <td> {{ $item->iban }} </td>
                                                        <td>{{$item->bkname ?? "undefined"}}</td>
                                                        <td> {{ $item->bic }} </td>
                                                        <td> {{ $item->owner }} </td>
                                                    </tr><!-- /tr -->
                                                @endforeach
                                                <!-- tr -->
                                                <!-- /tr -->
                                            </tbody>--}}<!-- /tbody -->
                                        </table><!-- /.table -->

                                        <form style="padding: 10px" action="{{ URL('bkinfos') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="iban"
                                                    id="key" placeholder="IBAN">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="bkname"
                                                    id="key" placeholder="Nom de bank">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="bic"
                                                    id="key" placeholder="BIC/SWIFT">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="owner"
                                                    id="key" placeholder="INITITULE">
                                            </div>
                                            

                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto"
                                            data-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal -->
                        <hr class="my-5">






                        <div class="modal fade" id="modalTable2" tabindex="-1" role="dialog"
                            aria-labelledby="modalTableLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        </h6><button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <!-- .table -->
                                        <!-- /.table -->

                                        <form style="padding: 10px" action="{{ URL('send_message') }}" method="post">
                                            @csrf
                                            <input type="hidden" id="message_id" value="" name="message_id">
                                            <div class="form-group">
                                                <label id="label_message" for="Message">Message</label>
                                                <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                                            </div>

                                            <button class="btn btn-primary">Enregister</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-auto"
                                            data-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- .app-footer -->
                <footer class="app-footer">

                    <div class="copyright"> Copyright © 2023. All right reserved. </div>
                </footer><!-- /.app-footer -->
                <!-- /.wrapper -->
    </main><!-- /.app-main -->
</div>
@endsection

