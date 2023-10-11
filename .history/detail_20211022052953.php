<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="./css/detail.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
    <style>
        /*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout { 
    position: absolute; 
    top: -3px;
    right: 0;
}
.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
    background-size: 120px;
    border-radius: 120px;
}
input[type="file"]{
    z-index: 999;
    line-height: 0;
    font-size: 0;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
    margin: 0;
    padding:0;
    left:0;
}
.uploadPhoto {
    position: absolute;
    top: 25%;
    left: 25%;
    display: none;
    width: 50%;
    height: 50%;
    color: #fff;    
    text-align: center;
    line-height: 60px;
    text-transform: uppercase;    
    background-color: rgba(0,0,0,.3);
    border-radius: 50px;
    cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
    </style>

<body>
    <div id="wapper">
        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XSHOP</h2>
            </a>
            <ul>
                <li>
                    <p style="color:red; font-size: 17px;font-weight: bold;">
                        Hello <?php
                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user'];
                                ?>
                            <a class="active" style="font-weight: normal;" href="logout.php"> Logout</a>
                        <?php } else {
                                    echo "you!";
                        ?>
                            <a class="active" style="font-weight: normal;" href="login.php"> =>Login<= </a>
                                <?php }
                                ?>
                    </p>
                </li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="http://localhost/ass/"> <img src="./img/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <?php include 'db.php';
                    $sql = "select * from danhmuc";
                    $kq = $conn->query($sql);
                    foreach ($kq as $key => $rows) {
                    ?>

                        <li>
                            <a href="showdanhmuc.php?madanhmuc=<?php echo $rows['id_danhmuc'] ?>">
                                <?php echo $rows['tendanhmuc'] ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                    <div id="nav">
                        <a href="product.php"> <img src="./img/search.png" alt=""></a>
                        <a href="product.php"><img src="./img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <main>

            <?php include 'db.php';
            if (isset($_GET['masp'])) {
                $masp = $_GET['masp'];
                $sqlsp = "select * from sanpham where id_sp='$masp'";
                $kqsp = $conn->query($sqlsp)->fetch();
            }
            ?>

            <div id="left"><img src="images/<?php echo $kqsp['anhsp'] ?>" alt="">

            </div>
            <div id="right">
                <h1><?php echo $kqsp['tensp'] ?></h1>
                <div class="tinvt">
                    <p><?php echo $kqsp['vantatsp'] ?></p>
                </div>
                <div class="price">
                    <span class="price-old"><?php echo $kqsp['giacu'] ?>₫</span>
                    <span class="price-new"><?php echo $kqsp['giamoi'] ?>₫</span>
                </div>
                <div class="buy">
                    <input type="submit" value="Mua Ngay">
                </div>
                <div class="chitiet">
                    <h2>Mô tả</h2>
                    <p><?php echo $kqsp['chitietsp'] ?></p>
                </div>

            </div>

        </main>
        <div id="text">
            <div class="text-left">
                <p class="to">Chất lượng sản phẩm?</p>
                <p class="nho">Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay khách hàng!</p>
                <p class="to">Sai màu sản phẩm?</p>
                <p class="nho">Vì 1 số yếu tố khách quan như độ sáng màn hình, chất lượng màn hình nên sản phẩm có thể ko đúng màu.</p>
                <p class="to">Hàng có sẵn không?</p>
                <p class="nho">Sản phẩm hiện có sẵn tại hệ thống cửa hàng XSHOP và online tại website.</p>
                <p class="to">Bảo hành sản phẩm</p>
                <p class="nho">Sản phẩm được bảo hành trong 30 ngày với bất kỳ lỗi nào. Hàng SALE không được bảo hành.</p>
            </div>

            <div class="text-right">
                <p class="to">Thời gian giao hàng?</p>
                <p class="nho">Chúng tôi sử dụng đơn vi vận chuyển uy tín và nhanh chóng nhất, thời dự kiến từ 1-4 ngày tuy khu vực.</p>
                <p class="to">Thời gian làm việc?</p>
                <p class="nho">Hệ thống cửa hàng và Online làm việc từ 8:30 - 22:00 hàng ngày.</p>
                <p class="to">Đổi hàng như thế nào?</p>
                <p class="nho">Việc đổi hàng rất dễ dàng và chúng tôi luôn muốn khách hàng ưng ý nhất. Hãy liên hệ fanpage để đổi!</p>
                <p class="to">Chọn sai size giày?</p>
                <p class="nho">Bạn có thể qua cửa hàng hoặc gửi lại để đổi hàng với sản phẩm mới 100%. Còn nguyên tem mác, hoá đơn mua hàng.</p>
            </div>
        </div>

    </div>
    <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->


    <div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h3 class="reviews">Leave your comment</h3>
            <div class="logout">
                <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#logout').hide(); $('#login').show()">
                    <span class="glyphicon glyphicon-off"></span> Logout                    
                </button>                
            </div>
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                <li><a href="#account-settings" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Account settings</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied" id="replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Thank you Guys!
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>          
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kurafire/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Nico</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                I'm looking for that. Thanks!
                              </p>
                              <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/80lNjkcp6gI" allowfullscreen></iframe>
                              </div>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </li>
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Yehhhh... Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyTwo"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyTwo">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Lizz</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Classy!
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                            <div class="col-sm-10">                    
                                <div class="input-group">
                                  <div class="input-group-addon">http://</div>
                                  <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
                <div class="tab-pane" id="account-settings">
                    <form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10">                                
                                <div class="custom-input-file">
                                    <label class="uploadPhoto">
                                        Edit
                                        <input type="file" class="change-avatar" name="avatar" id="avatar">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Vilma palma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickName" class="col-sm-2 control-label">Nick name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Vilma">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" placeholder="vilma@mail.com">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="newPassword" id="newPassword">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Save changes</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
	</div>
  </div>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="login">
        <div class="page-header">
            <h3 class="reviews">Leave your comment</h3>
            <div class="logout">
                <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#login').hide(); $('#logout').show()">
                    <span class="glyphicon glyphicon-off"></span> Login                    
                </button>                
            </div>
        </div>
        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-login" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                <li><a href="#add-comment-disabled" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                <li><a href="#new-account" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Create an account</h4></a></li>
            </ul>            
            <div class="tab-content">
                <div class="tab-pane active" id="comments-login">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Marco</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyThree"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyThree">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied" id="replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Thank you Guys!
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>          
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kurafire/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Nico</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                I'm looking for that. Thanks!
                              </p>
                              <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/80lNjkcp6gI" allowfullscreen></iframe>
                              </div>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </li>
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">Kriztine</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Yehhhh... Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
                          </div>              
                        </div>
                        <div class="collapse" id="replyFour">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Lizz</h4>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Classy!
                                          </p>
                                          <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>
                    </ul> 
                </div>
                <div class="tab-pane" id="add-comment-disabled">
                    <div class="alert alert-info alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">×</span><span class="sr-only">Close</span>                        
                      </button>
                      <strong>Hey!</strong> If you already have an account <a href="#" class="alert-link">Login</a> now to make the comments you want. If you do not have an account yet you're welcome to <a href="#" class="alert-link"> create an account.</a>
                    </div>
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                            <div class="col-sm-10">                    
                                <div class="input-group">
                                  <div class="input-group-addon">http://</div>
                                  <input type="text" class="form-control" name="uploadMedia" id="uploadMedia" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase disabled" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
                <div class="tab-pane" id="new-account">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>                         
                        <div class="form-group">
                            <div class="checkbox">                
                                <label for="agreeTerms" class="col-sm-offset-2 col-sm-10">
                                    <input type="checkbox" name="agreeTerms" id="agreeTerms"> I agree all <a href="#">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Create an account</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="page-header text-center">
    <h3 class="reviews"><span class="glyphicon glyphicon-magnet"></span> Uicomments by <a href="https://twitter.com/maridlcrmn">maridlcrmn</a></h3>
  </div>
  <div class="notes text-center"><small>Image credits: uifaces.com</small></div>
</div>



    <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

    <footer id="footer">
        <div id="logo_footer">
            <a href="#"><img src="./img/logo.png" alt=""></a>
            <p>Hệ thống giày thể thao số 1 Hà Nội</p>
            <p class="hotline"><span>Hotline</span> <a href="#">0123456789</a></p>
            <p><span>Store 1:</span> 57 Quan Hoa, Cầu Giấy, HN <br> <br> <span>Store 2:</span> 29 Trần Đại Nghĩa,
                Hai Bà Trưng, HN <br> <br><span>Store 3:</span> 61
                Trần Phú, Hà Đông, HN <br> <br> </p>
        </div>
        <div id="dichvu">
            <h2>DỊCH VỤ KHÁCH HÀNG</h2>
            <p><a href="#">Giới thiệu XSHOP</a> <br> </p>
            <p><a href="#">Hướng dẫn đặt hàng</a> <br> </p>
            <p><a href="#">Chính sách đổi trả và bảo hành</a> <br> </p>
            <p><a href="#">Chính sách bảo mật</a> <br> </p>
            <p><a href="#">Liên hệ XSHOP</a> <br> </p>
            <p><a href="#">Hệ thống cửa hàng</a></p>
        </div>

        <div id="facebook">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=256623368880552&autoLogAppEvents=1" nonce="aj8H3wq8"></script>
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
            </div>
        </div>
    </footer>
</body>

</html>