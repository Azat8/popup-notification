@extends ('layout')

@section ('content')
    <div class="container-fluid head-bg">
        <div class="row">
            <div class="col-md-12">
                <div class="right-menu">
                    <div class="top-bar top-bar2">
                        <div class="logo">
                            <a href="/">
                                <img src="img/logo.png">
                            </a>
                        </div>
                        <div class="short-menu">



                            <a href="#" class="dropdown-toggle  " type="button" data-toggle="dropdown">
                                <img src="img/menu.png"></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Create Variation</a></li>
                                <li><a href="#">Pause</a></li>
                                <li><a href="#">Remove</a></li>

                            </ul>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="container-fluid main-content">
        <div class="cta-head col-md-12">
            <h2>Your CTAs</h2>
            <div class="search">
                <input type="text" name="text">
                <button type="button" class="btn"><img src="img/plus.png"> New CTA</button>
            </div>
        </div>
        <div class="tabs-table col-md-12">
            <div class="tabs-main">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Active</a></li>
                    <li><a data-toggle="tab" href="#menu1">Paused</a></li>
                    <li><a data-toggle="tab" href="#menu2">All</a></li>

                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table class="table table-bordred table-striped" id="mytable">
                                        <thead>
                                        <tr>
                                            <th>Message Text</th>
                                            <th>Age</th>
                                            <th>Goal</th>
                                            <th>Style </th>
                                            <th>Views</th>
                                            <th>Conversion</th>
                                            <th>%</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Check Out Our Latest Sale</td>
                                            <td>4<br><span>Minutes Old</span></td>
                                            <td><img src="img/arrow_1.png"></td>
                                            <td><img src="img/line.png"></td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0.0%</td>
                                            <td>
                                                <img src="img/A.png">
                                            </td>
                                            <td class="for-set">
                                                <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                <!-- <span class="caret"></span></button> -->
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                    <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                    <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                    <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                </ul>
                                            </td>
                                        </tr>
                                        <tr style="visibility: hidden;"><td></td></tr>
                                        <tr>

                                            <td>Check Out Our Latest Sale</td>
                                            <td>4<br><span>Minutes Old</span></td>
                                            <td><img src="img/message.png"></td>
                                            <td><img src="img/line.png"></td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0.0%</td>
                                            <td>
                                                <img src="img/B.png">
                                            </td>
                                            <td class="for-set">
                                                <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                <!-- <span class="caret"></span></button> -->
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                    <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                    <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                    <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                </ul>
                                            </td>
                                        </tr>
                                        </tr>



                                        </tbody>
                                    </table>
                                    <div class="clearfix"></div>
                                    <!-- <ul class="pagination pull-right">
                                        <li class="disabled">
                                            <a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="menu1" class="tab-pane fade">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordred table-striped" id="mytable">
                                            <thead>
                                            <tr>
                                                <th>Message Text</th>
                                                <th>Age</th>
                                                <th>Goal</th>
                                                <th>Style </th>
                                                <th>Views</th>
                                                <th>Conversion</th>
                                                <th>%</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Check Out Our Latest Sale</td>
                                                <td>4<br><span>Minutes Old</span></td>
                                                <td><img src="img/arrow_1.png"></td>
                                                <td><img src="img/line.png"></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.0%</td>
                                                <td>
                                                    <img src="img/A.png">
                                                </td>
                                                <td class="for-set">
                                                    <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                    <!-- <span class="caret"></span></button> -->
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                        <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                        <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                        <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr style="visibility: hidden;"><td></td></tr>
                                            <tr>

                                                <td>Check Out Our Latest Sale</td>
                                                <td>4<br><span>Minutes Old</span></td>
                                                <td><img src="img/message.png"></td>
                                                <td><img src="img/line.png"></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.0%</td>
                                                <td>
                                                    <img src="img/B.png">
                                                </td>
                                                <td class="for-set">
                                                    <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                    <!-- <span class="caret"></span></button> -->
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                        <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                        <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                        <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            </tr>



                                            </tbody>
                                        </table>
                                        <div class="clearfix"></div>
                                        <!-- <ul class="pagination pull-right">
                                            <li class="disabled">
                                                <a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                            <li>
                                                <a href="#">5</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordred table-striped" id="mytable">
                                            <thead>
                                            <tr>
                                                <th>Message Text</th>
                                                <th>Age</th>
                                                <th>Goal</th>
                                                <th>Style </th>
                                                <th>Views</th>
                                                <th>Conversion</th>
                                                <th>%</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Check Out Our Latest Sale</td>
                                                <td>4<br><span>Minutes Old</span></td>
                                                <td><img src="img/arrow_1.png"></td>
                                                <td><img src="img/line.png"></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.0%</td>
                                                <td>
                                                    <img src="img/A.png">
                                                </td>
                                                <td class="for-set">
                                                    <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                    <!-- <span class="caret"></span></button> -->
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                        <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                        <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                        <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr style="visibility: hidden;"><td></td></tr>
                                            <tr>

                                                <td>Check Out Our Latest Sale</td>
                                                <td>4<br><span>Minutes Old</span></td>
                                                <td><img src="img/message.png"></td>
                                                <td><img src="img/line.png"></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.0%</td>
                                                <td>
                                                    <img src="img/B.png">
                                                </td>
                                                <td class="for-set">
                                                    <a href="#" class="dropdown-toggle " type="button" data-toggle="dropdown"><img src="img/setting.png"></a>
                                                    <!-- <span class="caret"></span></button> -->
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><img src="img/edit_ico.png"> Edit</a></li>
                                                        <li><a href="#"><img src="img/create_variation.png">Create Variation</a></li>
                                                        <li><a href="#"><img src="img/pause.png">Pause</a></li>
                                                        <li><a href="#"><img src="img/remove.png">Remove</a></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            </tr>



                                            </tbody>
                                        </table>
                                        <div class="clearfix"></div>
                                        <!-- <ul class="pagination pull-right">
                                            <li class="disabled">
                                                <a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                            <li>
                                                <a href="#">5</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
