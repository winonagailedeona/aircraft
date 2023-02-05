<?= $this->include('Menus/inc/top') ?>

<body>
    <!-- Topbar Start -->
    <?= $this->include('Menus/inc/link') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?= $this->include('Menus/inc/navbar') ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid about">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Newsfeed</h1>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact End -->
<style>

body{
 background:#dcdcdc;
}

.panel {
    margin-bottom: 30px;
    color: #696969;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
}

.profile-cover__action {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    padding: 120px 30px 10px 153px;
    border-radius: 5px 5px 0 0;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: end;
    -webkit-box-pack: end;
    justify-content: flex-end;
    overflow: hidden;
    background: url(https://bootdey.com/img/Content/bg1.jpg) no-repeat;
    background-size: cover;
}

.profile-cover__action > .btn {
    margin-left: 10px;
    margin-bottom: 10px;
}

.profile-cover__img {
    position: absolute;
    top: 120px;
    left: 30px;
    text-align: center;
    z-index: 1;
}

.profile-cover__img > img {
    max-width: 120px;
    border: 5px solid #fff;
    border-radius: 50%;
}

.profile-cover__img > .h3 {
    color: #393939;
    font-size: 20px;
    line-height: 30px;
}

.profile-cover__img > img + .h3 {
    margin-top: 6px;
}

.profile-cover__info .nav {
    margin-right: 28px;
    padding: 15px 0 10px 170px;
    color: #999;
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    -ms-flex-pack: end;
    -webkit-box-pack: end;
    justify-content: flex-end;
}

.profile-cover__info .nav li {
    margin-top: 13px;
    margin-bottom: 13px;
}

.profile-cover__info .nav li:not(:first-child) {
    margin-left: 30px;
    padding-left: 30px;
    border-left: 1px solid #eee;
}

.profile-cover__info .nav strong {
    display: block;
    margin-bottom: 10px;
    color: #e16123;
    font-size: 34px;
}

@media (min-width: 481px) {
    .profile-cover__action > .btn {
        min-width: 125px;
    }

    .profile-cover__action > .btn > span {
        display: inline-block;
    }
}

@media (max-width: 600px) {
    .profile-cover__info .nav {
        display: block;
        margin: 90px auto 0;
        padding-left: 30px;
        padding-right: 30px;
    }

    .profile-cover__info .nav li:not(:first-child) {
        margin-top: 8px;
        margin-left: 0;
        padding-top: 18px;
        padding-left: 0;
        border-top: 1px solid #eee;
        border-left-width: 0;
    }
}

.panel {
    margin-bottom: 30px;
    color: #696969;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
}

.panel-heading {
    color: #393939;
    padding: 10px 20px;
    border-width: 0;
    border-radius: 0;
}

.panel-heading:after,
.panel-heading:before {
    content: " ";
    display: table;
}

.panel-heading:after {
    clear: both;
}

.panel-title {
    float: left;
    margin-top: 3px;
    margin-bottom: 3px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
    text-transform: uppercase;
}

.panel-title select {
    border-width: 0;
    background-color: transparent;
    text-transform: uppercase;
}

.panel-title select option {
    text-transform: capitalize;
}

.panel-title .select2 {
    display: block;
    min-width: 200px;
}

.panel-title .select2-selection {
    height: auto;
    padding: 0;
    background-color: transparent;
    border-width: 0;
    border-radius: 0;
    overflow: hidden;
    white-space: nowrap;
}

.no-outlines .panel-title .select2-selection {
    outline: 0;
}

.panel-title .select2-selection .select2-selection__rendered {
    float: left;
    margin-right: 8px;
    padding: 0;
    line-height: inherit;
}

.panel-title .select2-selection .select2-selection__arrow {
    float: left;
    display: block;
    position: relative;
    top: auto;
    right: auto;
    width: auto;
    height: auto;
}

.panel-title .select2-selection .select2-selection__arrow:before {
    content: "\f107";
    font-family: "Font Awesome\ 5 Free";
    font-weight: 700;
}

.panel-title .select2-container--open .select2-selection__arrow:before {
    content: "\f106";
}

.panel-heading .dropdown {
    float: right;
}

.panel-heading .dropdown .dropdown-toggle {
    margin: -10px -20px;
    padding: 10px 20px;
    color: #999;
    border-width: 0;
    font-size: 14px;
    line-height: 30px;
    cursor: pointer;
}

.panel-heading .dropdown .dropdown-toggle:after,
.toolbar__nav > li > a > span {
    display: none;
}

.panel-heading .dropdown-menu {
    top: 30px !important;
    left: auto !important;
    right: -20px;
    margin: 0;
    padding: 10px 0;
    border-width: 0;
    border-radius: 4px 0 0 4px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
    -webkit-transform: none !important;
    transform: none !important;
    z-index: 1001;
}

.panel-heading .dropdown-menu a {
    padding: 5px 15px;
    color: #999;
    font-size: 13px;
    line-height: 23px;
}

.panel-heading .dropdown-menu a:hover {
    color: #e16123;
}

.panel-heading .dropdown-menu i {
    min-width: 15px;
    margin-right: 6px;
    font-size: 11px;
    text-align: center;
}

.panel-subtitle {
    margin: 20px 0;
}

.panel-subtitle:first-child {
    margin-top: 0;
}

.panel-subtitle .h5 {
    color: #999;
    font-weight: 600;
}

.panel-subtitle .h5 small {
    color: #777;
}

.panel-body {
    padding: 20px;
}

.panel-content,
.panel-social {
    position: relative;
    border-radius: 0 0 4px 4px;
}

.panel-content {
    border-top: 1px solid #eee;
    padding: .5% 3% 5%;
}

.panel-about table {
    width: 100%;
    word-break: break-word;
}

.panel-about table tr + tr td,
.panel-about table tr + tr th {
    padding-top: 8px;
}

.panel-about table th {
    min-width: 120px;
    color: #2bb3c0;
    font-weight: 400;
    vertical-align: top;
}

.panel-about table th > i {
    min-width: 14px;
    margin-right: 8px;
    text-align: center;
}

.panel-social {
    padding: 0 20px 33px;
    z-index: 0;
}

.panel-heading + .panel-social {
    padding-top: 21px;
    border-top: 1px solid #eee;
}

.panel-social > .nav {
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
}

.panel-social > .nav > li:not(:last-child) {
    margin-right: 20px;
}

.panel-social > .nav > li > a {
    color: #ccc;
}

.panel-activity__status > .actions {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    padding: 10px 20px;
    background-color: #ebebea;
    border-style: solid;
    border-width: 0 1px 1px;
    border-color: #ccc;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}

.btn-link {
    display: inline-block;
    color: inherit;
    font-weight: inherit;
    cursor: pointer;
    background-color: transparent;
}

button.btn-link {
    border-width: 0;
}

.panel-activity__status > .actions > .btn-group > .btn-link:not(:last-child) {
    margin-right: 25px;
}

.panel-activity__status > .actions > .btn-group > .btn-link {
    padding-left: 0;
    padding-right: 0;
    color: #9c9c9c;
}

.btn-info {
    background-color: #2bb3c0;
    border: none;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
}

.panel-activity__status > .actions > .btn-group {
    -ms-flex: 1;
    -webkit-box-flex: 1;
    flex: 1;
    font-size: 16px;
}

.panel-activity__list {
    margin: 60px 0 0;
    padding: 0;
    list-style: none;
}

.panel-activity__list,
.panel-activity__list > li {
    position: relative;
    z-index: 0;
}

.panel-activity__list:before {
    content: " ";
    display: none;
    position: absolute;
    top: 20px;
    left: 35px;
    bottom: 0;
    border-left: 2px solid #ebebea;
}

.activity__list__icon {
    display: none;
    position: absolute;
    top: 2px;
    left: 0;
    min-width: 30px;
    color: #fff;
    background-color: #2bb3c0;
    border-radius: 50%;
    line-height: 30px;
    text-align: center;
}

.panel-activity__list,
.panel-activity__list > li {
    position: relative;
    z-index: 0;
}

.activity__list__header {
    position: relative;
    min-height: 70%;
    padding-top: 0.5%;
    padding-left: 10%;
    color: #999;
    z-index: 0;
}

.activity__list__body {
    padding-top:5%;
    padding-left: 10%;
}

.entry-content .gallery {
    margin: 0;
    list-style: none;
    padding: 0;
}

.entry-content .gallery,
.m-error {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.entry-content .gallery > li {
    padding-right: 20px;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}

.gallery > li img {
    max-width: 100%;
    height: auto;
}

.entry-content blockquote:last-child,
p:last-child,
table:last-child,
ul:last-child {
    margin-bottom: 0;
}

.entry-content blockquote:last-child,
p:last-child,
table:last-child,
ul:last-child {
    margin-bottom: 0;
}

.entry-content blockquote p:before {
    content: "\f10d";
    color: #999;
    margin-right: 12px;
    font-family: "FontAwesome";
    font-size: 24px;
    font-weight: 900;
}

.activity__list__header img {
    position: absolute;
    top: 0;
    left: 0;
    max-width: 35px;
    border-radius: 50%;
}

.activity__list__header a {
    color: #222;
    font-weight: 600;
}

.activity__list__footer {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    margin-top: 23px;
    margin-left: 43px;
    padding: 13px 8px 0;
    color: #999;
    border-top: 1px dotted #ccc;
}

.activity__list__footer a {
    color: inherit;
}

.activity__list__footer a + a {
    margin-left: 15px;
}

.activity__list__footer i {
    margin-right: 8px;
}

.activity__list__footer a:hover {
    color: #222;
}

.activity__list__footer span {
    margin-left: auto;
}

.panel-activity__list > li + li {
    margin-top: 51px;
}

.weather--panel {
    padding: 24px 20px 36px;
    border-radius: 5px;
    text-align: center;
}

.weather--title {
    font-size: 18px;
    line-height: 28px;
    font-weight: 600;
}

.weather--title .fa {
    margin-right: 5px;
    font-size: 30px;
    line-height: 40px;
}

.weather--info {
    margin-top: 14px;
    font-size: 46px;
    line-height: 56px;
}

.weather--info .wi {
    margin-right: 10px;
}

.bg-blue {
    background-color: #2bb3c0;
}

.bg-orange {
    background-color: #e16123;
}

.todo--panel .list-group,
.user--list > li,
.user--list > li > a {
    position: relative;
    z-index: 0;
}

.hero-height {
    max-height: 314px;
}

.hero-height .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background: rgb(233, 236, 238);
}

.todo--panel .list-group {
    margin-bottom: 0;
    padding-top: 23px;
    padding-bottom: 25px;
}

.todo--panel .list-group:before {
    content: " ";
    position: absolute;
    top: 0;
    left: 20px;
    right: 20px;
    border-top: 1px solid #eee;
}

.todo--panel .list-group-item {
    margin-top: 27px;
    padding: 0;
    border-width: 0;
}

li.list-group-item:first-child {
    margin-top: 0;
}

.todo--label {
    padding-left: 20px;
    padding-right: 30px;
    color: #696969;
    font-weight: 400;
}

.todo--input {
    display: none;
}

.todo--text {
    display: block;
    position: relative;
    padding-left: 39px;
    -webkit-transition: color 0.25s;
    transition: color 0.25s;
    cursor: pointer;
    z-index: 0;
}

.todo--input:checked + .todo--text {
    color: #999;
    text-decoration: line-through;
}

.todo--text:after,
.todo--text:before {
    position: absolute;
    top: 50%;
    left: 0;
    margin-top: -10px;
    width: 20px;
    height: 20px;
    border-radius: 2px;
}

.todo--text:before {
    border: 1px solid #ccc;
    content: " ";
}

.todo--text:after {
    content: "\f00c";
    color: #fff;
    background-color: #009378;
    font-family: "FontAwesome";
    font-size: 11px;
    line-height: 21px;
    font-weight: 700;
    text-align: center;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -webkit-transform: scale(0.3);
    transform: scale(0.3);
    -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s linear;
    transition: opacity 0.25s linear, transform 0.25s linear;
    transition: opacity 0.25s linear, transform 0.25s linear, -webkit-transform 0.25s linear;
}

.todo--input:checked + .todo--text:after {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    -webkit-transform: scale(1);
    transform: scale(1);
}

.todo--remove {
    position: absolute;
    top: 50%;
    right: 20px;
    margin-top: -15px;
    color: #999;
    font-size: 18px;
    line-height: 28px;
}

.todo--panel .input-group {
    border-top: 1px solid #eee;
}

.todo--panel .form-control {
    height: auto;
    padding: 13px 20px 14px;
    border-width: 0;
}

.todo--panel .btn-link {
    padding: 12px 16px;
    color: #ccc;
    font-size: 28px;
    border-width: 0;
    text-decoration: none;
}

.feeds-panel {
    margin: 20px 20px 0;
    padding-top: 17px;
    padding-bottom: 23px;
    border-top: 1px solid #ebebea;
}

.feeds-panel li {
    position: relative;
    width: 100%;
    min-height: 20px;
    padding-left: 40px;
    z-index: 0;
}

.feeds-panel li a {
    color: #e16123;
}

.feeds-panel li + li {
    margin-top: 12px;
}

.bg-red {
    background-color: #ff4040;
}

.bg-green {
    background-color: #009378;
}

.comments-panel > ul > li:after,
.comments-panel > ul > li:before,
.feeds-panel li:after,
.feeds-panel li:before {
    content: " ";
    display: table;
}

.comments-panel > ul > li:after,
.feeds-panel li:after {
    clear: both;
}

.feeds-panel .time {
    float: right;
    margin-left: 5px;
    color: #ccc;
    font-style: italic;
}

.feeds-panel .fa {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 30px;
    border-radius: 2px;
    font-size: 12px;
    line-height: 30px;
    text-align: center;
}

.feeds-panel .text {
    color: #696969;
    line-height: 26px;
}
</style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Activity Feed</h3>
            </div>
            <?php if(session()->getFlashdata('msg', 'Updated Successfully!')):?>
            <div class="alert alert-success">
            <?= session()->getFlashdata('msg', 'Updated Successfully!')?></div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('mssg', 'Successfully Added!'))) : ?>
              <div class="alert alert-success">
                <?= session()->getFlashdata('mssg', 'Successfully Added!') ?>
              </div>
            <?php endif; ?>
            <div class="panel-content panel-activity">
                <form action="savepost" class="panel-activity__status" method="post">
                    <textarea name="nf_content" placeholder="Share what you've been up to..." class="form-control"></textarea>
                   <div style="padding-left: 1%; padding-top: 2%; padding-bottom: 2%;"> <label for="value"><i class="fa fa-star"></i>Rating:</label>
    <select  style="border: none" name="nf_rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><span>/5</span></div>
                    <div class="actions">
                        <div class="btn-group">
                            <button type="button" class="btn-link" title="" data-toggle="tooltip" data-original-title="Post an Image">
                                <i class="fa fa-image"></i>
                            </button>
                        </div>
                        <button type="submit" class="btn btn-sm btn-rounded btn-info">
                            Submit
                        </button>
                    </div>
                </form>
                </div>
                </div>
                </div>
                </div>
                <?php foreach ($newsf as $nf): ?>
                <div class="container">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-content panel-activity">
                <ul class="panel-activity__list">
                    <li>
                        <i class="activity__list__icon fa fa-question-circle-o"></i>
                        <div class="activity__list__header">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                            <a href="#"><?= $nf['name']?></a> Posted:
                        </div>
                        <div class="activity__list__body entry-content">
                            <p>
                                <em><?= $nf['nf_content']?></em>
                            </p>
                        </div>
                        <div class="activity__list__footer">
                            <a href="#"> <i class="fa fa-star"></i><?= $nf['nf_rating']?>/5</a>
                            <span> <i class="fa fa-clock"></i><?= $nf['nf_createdon']?></span>
                        </div>
                    </li>
                    <!-- <li>
                        <i class="activity__list__icon fa fa-image"></i>
                        <div class="activity__list__header">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                            <a href="#">John Doe</a> Uploaded 4 Image: <a href="#">Office Working Time</a>
                        </div>
                        <div class="activity__list__body entry-content">
                            <ul class="gallery">
                                <li>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                </li>
                                <li>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                </li>
                                <li>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                </li>
                                <li>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="activity__list__footer">
                            <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
                            <a href="#"> <i class="fa fa-comments"></i>23</a>
                            <span> <i class="fa fa-clock"></i>2 hours ago</span>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- <div class="container">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-content panel-activity">
                <ul class="panel-activity__list">
                    <li>
                        <i class="activity__list__icon fa fa-lightbulb-o"></i>
                        <div class="activity__list__header">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                            <a href="#">John Doe</a> bookmarked a page: <a href="#">Awesome Idea</a>
                        </div>
                        <div class="activity__list__footer">
                            <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
                            <a href="#"> <i class="fa fa-comments"></i>23</a>
                            <span> <i class="fa fa-clock"></i>2 hours ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<!-- Footer Start -->
<div class="container-fluid footer bg-light py-1" style="margin-top: 40px;">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12 mb-1">
                <a href="<?= base_url('homepage') ?>" class="navbar-brand m-0">
                <h5 class="let1"><span class="text-secondary">Continen</span>Tea Café</h5>
                </a>
            </div>
            <div class="col-12 mb-1">
                <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/continenteacafe"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">123 Street, New York, USA</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            <div class="col-12">
                <p>All Rights Reserved • 2022</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- About End -->
<?= $this->include('Menus/inc/end') ?>