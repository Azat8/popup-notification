@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-content">
                <div class="col-md-5 shadow">
                    <div class="right-menu">
                        <div class="top-bar">
                            <div class="logo">
                                <a href="/"><img src="img/logo.png"></a>
                            </div>
                            <div class="short-menu">
                                <a href="/statistic">Statistics<img
                                            src="img/menu.png"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Create Variation</a></li>
                                    <li><a href="#">Pause</a></li>
                                    <li><a href="#">Remove</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="form-sec">
                            <form action="" class="contactFormClass" id="form-third" method="post" name="sentMessage"
                                  role="form">
                                <div>
                                    <div class="form-main-log clearfix">

                                        <div class="form-group">
                                            <select class="form-control" id="interest" name="interest" required="">
                                                <option disabled="disabled" selected="selected" value="">
                                                    Use previously used Popup
                                                </option>
                                                <option>
                                                    1
                                                </option>
                                                <option>
                                                    2
                                                </option>
                                                <option>
                                                    3
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <span class="dropdown-button">Select Your Goal</span>
                                                <ul class="dropdown-list" style="display: none;">
                                                    <li data-value="Branding">
                                                        <img src="img/mouse.png">Click Links
                                                        <p>Use your bar to drive more traffic to a special URL</p>
                                                    </li>

                                                    <li data-value="Branding">
                                                        <img src="img/social.png">Social
                                                        <p>Point visitors to your social media channels</p>
                                                    </li>

                                                    <li data-value="Branding">
                                                        <img src="img/speaker.png">Announcement
                                                        <p>Display a simple anncouncement to your</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="select-position js-states form-control" name="state">
                                                <option value=""></option>
                                                <option value="btm-left">BOTTOM LEFT</option>
                                                <option value="btm-right">BOTTOM RIGHT</option>
                                                <option value="upp-left">UPPER LEFT</option>
                                                <option value="upp-right">UPPER RIGHT</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="show-desktop-mobile js-states form-control" name="state">
                                                <option value=""></option>
                                                <option value="show-desktop">Show on Desktop</option>
                                                <option value="show-mobile">Show on Mobile</option>
                                                <option value="show-desktop-mobile">Show on Desktop/Mobile</option>
                                            </select>
                                        </div>
                                        <div class="form-group notification-replay">
                                            <div class="notification-replay-container">
                                                <span>Show New Notification after every</span>
                                                <input type="number">
                                                <span>second(s)</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline"><input class="checkbox-1" type="checkbox" value="">restart when expire for the same number of days</label>
                                        </div>
                                        <div class="form-group col-sm-4 padding-0">
                                            <div class="file-upload">
                                                <label for="upload" class="file-upload__label">UPLOAD LOGO</label>
                                                <input id="upload" class="file-upload__input" type="file" name="file-upload">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-8 padding-0 upload-logo">
                                            <input class="form-control change"
                                                   data-validation-required-message="Please enter your name." id="name-url"
                                                   name="name" placeholder="Enter Notification text..." required="" type="text">
                                            <!--<p class="help-block text-danger"></p>-->
                                            <div class="manual-notification">
                                                <a data-toggle="modal" data-target="#myModal" href="javascript:;" class="plus-icon">&#43;</a>
                                                <p>Add <br> Manual <br> Notific...</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 padding-0 color-picker">
                                            <div class="form-group  pick-color">
                                                <label>Background Color</label>
                                                <input class="jscolor" value="ffe900">

                                            </div>
                                            <div class="form-group  pick-color">
                                                <label>Text Color</label>
                                                <input class="jscolor" value="000">

                                            </div>
                                            <div class="form-group  pick-color">
                                                <label>Countdown Color</label>
                                                <input class="jscolor" value="000">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 padding-0 text-center">
                                        <button class="btn next-step gtm-track" id="bottomform">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-7">--}}
                    {{--<div class="website" id="hideImg"><img src="img/browser.png"></div>--}}
                    {{--<iframe height="619" id="iframeID" name="iFrameName" style="display: none;" width="760px"></iframe>--}}
                {{--</div>--}}
                <div class="col-md-7">
                    <div class="notification-type notification">
                        <div class="left-side">
                            <div class="notification-image"></div>
                            <div class="notification-content">
                                <p>4 people are looking this product now</p>
                            </div>
                            <div class="notification-close-icon"></div>
                            <div class="notification-name">
                                <p>by <span>FomoTank</span></p>
                            </div>
                        </div>
                        <div class="right-side">
                                <a href="javascript:;">Notification</a>
                        </div>
                    </div>
                    <div class="notification-type notification">
                        <div class="left-side">
                            <div class="notification-image"></div>
                            <div class="notification-content">
                                <p>4 people are looking this product now</p>
                            </div>
                            <div class="notification-close-icon"></div>
                            <div class="notification-name">
                                <p>by <span>FomoTank</span></p>
                            </div>
                        </div>
                        <div class="right-side">
                            <a href="javascript:;">Notification & countdown </a>
                        </div>
                    </div>
                    <div class="notification-type notification">
                        <div class="left-side">
                            <div class="notification-image"></div>
                            <div class="notification-content">
                                <p>4 people are looking this product now</p>
                            </div>
                            <div class="notification-close-icon"></div>
                            <div class="notification-name">
                                <p>by <span>FomoTank</span></p>
                            </div>
                        </div>
                        <div class="right-side">
                            <a href="javascript:;">countdown</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">-->
            <!--<div class="modal-dialog modal-lg" role="document">-->
            <!--<div class="modal-content">-->
            <!--<div class="notification-header">-->
            <!--<h1>add manual notification</h1>-->
            <!--<h2><span>you can only use {text/bold/color} and {url_link} <span>tags/parametrs in these manual notification fields.</span></span></h2>-->
            <!--<p></p>-->
            <!--</div>-->
            <!--<div class="notification-info">-->

            <!--</div>-->
            <!--<div class="notification-add"></div>-->
            <!--<div class="notification-back"></div>-->
            <!--<div class="notification-close"></div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!-- Large modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1>add manual notification</h1>
                            <h4 class="modal-title"><span>you can only use </span> {text/bold/color} and {url_link} <span>tags/parametrs in these manual notification fields.</span></h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection