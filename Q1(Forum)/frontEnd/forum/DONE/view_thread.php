<?php
include "../../../connect.php";

$_SESSION['thread_id']=$_REQUEST['thread_id'];
$sql = "SELECT * FROM threads WHERE thread_id=".$_REQUEST['thread_id'].";";
$result = mysqli_query($sql);

if(!$result)
    echo "<script>alert('please try again later')</script>";
else
{   $row=mysqli_fetch_array($result);
    $_SESSION['thread_name']=$row['thread_name'];
    $_SESSION['thread']=$row['thread'];
    $_SESSION['thread_by']=$row['thread_by'];
    $_SESSION['thread_date']=$row['thread_date'];

}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-gb">


<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Thread</title>

	<link rel="alternate" type="application/atom+xml" title="Feed - leno theme" href="../app.php/feed">			<link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="../app.php/feed/topics">		<link rel="alternate" type="application/atom+xml" title="Feed - Forum - Your first forum" href="../app.php/feed/forum/2">	<link rel="alternate" type="application/atom+xml" title="Feed - Topic - Welcome to phpBB3" href="../app.php/feed/topic/1">
	<link rel="canonical" href="#">


	<link rel="icon" href="../ext/beutheme/customizer/files/favicon.png" />



<link href="../assets/css/font-awesome.mince91.css?assets_version=7" rel="stylesheet">
<link href="../styles/leno/theme/stylesheetce91.css?assets_version=7" rel="stylesheet">
<link href="../styles/leno/theme/en/stylesheetce91.css?assets_version=7" rel="stylesheet">




<!--[if lte IE 9]>
	<link href="./styles/leno/theme/tweaks.css?assets_version=7" rel="stylesheet">
<![endif]-->
<link href="../styles/leno/theme/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../styles/leno/theme/themestyle.css" rel="stylesheet" type="text/css" />

<link href="../styles/leno/theme/font.css" rel="stylesheet" type="text/css" />
<link href="../styles/leno/theme/css/menu-style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../cdn.materialdesignicons.com/2.4.85/css/materialdesignicons.min.css">


<link href="../styles/leno/theme/custom-themes.css" rel="stylesheet" type="text/css" />
<link href="../styles/leno/theme/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css" />
<link href="../styles/leno/theme/custom.css" rel="stylesheet" type="text/css" />
<link href="../styles/leno/theme/themify-icons.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../styles/leno/theme/js/jquery.min.js"></script>
<script type="text/javascript" src="../styles/leno/theme/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../styles/leno/theme/js/custom.js"></script>


<script type="text/javascript" src="../styles/leno/theme/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
$(window).load(function() {
	$("#loading").fadeOut(500);
})
</script>
<script>
        document.getElementById('button').addEventListener("click", function() {
            document.querySelector('.bg-modal').style.display = "flex";
        });

        document.querySelector('.close').addEventListener("click", function() {
            document.querySelector('.bg-modal').style.display = "none";
        });
</script>
<link href="../ext/bb3mobi/lastpostavatar/styles/all/theme/lastpostavatarce91.css?assets_version=7" rel="stylesheet" type="text/css" media="screen" />








<!--#3179ff-->


<style type="text/css" >

</style>






<script>

function Funsearcha(){
    $('.search-theme').addClass('show-search');
	$('.body-search').addClass('show-body-search');

	}


function Funsearchb(){
    $('.search-theme').removeClass('show-search');
	$('.body-search').removeClass('show-body-search');
	$('.noti').removeClass('show-noti');
}
function Funsearchc(){
    $('.noti').addClass('show-noti');
	$('.body-search').addClass('show-body-search');

}



</script>




</head>
<body id="phpbb" class="nojs notouch section-viewtopic ltr ">

<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
<div class="object"></div>
</div>
</div>
 
</div>
<div class="body-search" onclick="Funsearchb()"></div>

<div id="body-theme" class="body-theme page-wrapper chiller-theme toggled">
	<a id="top" class="top-anchor" accesskey="t"></a>
	
	
	<nav id="sidebar" class="sidebar-wrapper">
	<div class="sidebar-content">
		<div id="toggle-sidebar">
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="sidebar-brand">
            <a href="index.php" title="Board index">
                <img src="../ext/beutheme/customizer/files/olcademy.png" class="board-index">
                <h1 class="logo-text">EDUCATION Company</h1>
            </a>
		</div>

		<div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>Quick links</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="mdi mdi-comment-text"></i>
                        <span>Threads</span>

                    </a>
                    <div class="sidebar-submenu">
                        <ul>

                            <li class="separator"></li>
                            <li>
                                <a href="../search33a7.html?search_id=unanswered" role="menuitem">
                                    <span>Cbd</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="../memberlist4bfd.html?mode=team" role="menuitem">
                        <i class="mdi mdi-account-group"></i><span>jhbjhb</span>
                    </a>
                </li>



                <li>
                    <a href="#"  role="menuitem">
                        <i class="mdi mdi-flash-auto"></i><span>custom </span>
                    </a>
                </li>
                <li>



            </ul>
		</div>
		<!-- sidebar-menu  -->
	</div>
	<!-- sidebar-content  -->

</nav>
	
	

<div class="page-content">
	<div id="header" class="menu-style1">
		<div class="header-style">

            <div class="top-header">
                <img src="../ext/beutheme/customizer/files/olcademy.png" width="85px" height="auto" class="img-olca">
                <div class="right-header">

                </div>



            </div>
			</div>
		</div>


	</div>

	<a id="start_here" class="anchor"></a>
	<div id="page-body" class="page-body   " role="main">




        <h2 class="topic-title"><a href="#"><?php echo $_SESSION['thread_name'];?></a></h2>

<div class="action-bar bar-top">
	
			<a href="#" class="button" id="button" title="Post a reply">
							<span>Post Reply</span><i class="mdi mdi-replay"></i>
					</a>
	
			<div class="dropdown-container dropdown-button-control topic-tools">
		<span title="Topic tools" class="button button-secondary dropdown-trigger dropdown-select">
			<span>topic tools</span> <i class="mdi mdi-chevron-down"></i>
			
		</span>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
																												<li>
					<a href="../viewtopiced1e.html?f=2&amp;t=1&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>
<!--			<div class="pagination">-->
<!--			1 post-->
<!--							&bull; Page <strong>1</strong> of <strong>1</strong>-->
<!--					</div>-->
<!--		</div>-->




			<div id="p1" class="post has-profile bg2">
		<div class="inner">

		<dl class="postprofile" id="profile1">
			<dt class="has-profile-rank has-avatar">
				<div class="avatar-container">
																<a href="../memberlistb2a4.html?mode=viewprofile&amp;u=2" class="avatar"><img class="avatar" src="../download/filee68e.png?avatar=2_1534042049.png" width="90" height="90" alt="User avatar" /></a>														</div>
								<a href="#" style="color: #AA0000;" class="username-coloured"><?php echo $_SESSION['thread_by'];?></a>							</dt>

						<dd class="profile-rank">Admin</dd>

						
						
		</dl>

		<div class="postbody">
						<div id="post_content1">

						<h3 class="first"><a href="#"><?php echo $_SESSION['thread_name'];?></a></h3>

													<ul class="post-buttons">
																																									<li>
							<a href="#" title="" class="button button-icon-only">
								<i class="mdi mdi-format-quote-open"></i><span class="sr-only">Quote</span>
							</a>
						</li>
														</ul>
							
						<p class="author">
									<a class="unread" href="#" title="Post">
						<i class="icon fa-file fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">Post</span>
					</a>
								<span class="responsive-hide">by <strong><a href="#" style="color: #AA0000;" class="username-coloured"><?php echo $_SESSION['thread_by'];?></a></strong> &raquo; </span>datetime post
			</p>
			
			
			
			<div class="content"><?php echo $_SESSION['thread'];?></div>

			
									
									
						</div>

		</div>

				<div class="back2top">
						<a href="#top" class="top" title="Top">
				<i class="mdi mdi-chevron-up-box-outline"></i>
				<span class="sr-only">Top</span>
			</a>
					</div>
		
		</div>
	</div>

	<hr class="divider" />
	

	<div class="action-bar bar-bottom">
	
			<a href="../posting59e9.html?mode=reply&amp;f=2&amp;t=1" class="button" title="Post a reply">
							<span>Post Reply</span> <i class="mdi mdi-replay"></i>
					</a>
		
		<div class="dropdown-container dropdown-button-control topic-tools">
		<span title="Topic tools" class="button button-secondary dropdown-trigger dropdown-select">
			<span>topic tools</span> <i class="mdi mdi-chevron-down"></i>
			
		</span>
		<div class="dropdown">
			<div class="pointer"><div class="pointer-inner"></div></div>
			<ul class="dropdown-contents">
																												<li>
					<a href="../viewtopiced1e.html?f=2&amp;t=1&amp;view=print" title="Print view" accesskey="p">
						<i class="icon fa-print fa-fw" aria-hidden="true"></i><span>Print view</span>
					</a>
				</li>
											</ul>
		</div>
	</div>

	
	
	
<!--			<div class="pagination">-->
<!--			1 post-->
<!--							&bull; Page <strong>1</strong> of <strong>1</strong>-->
<!--					</div>-->
<!--	</div>-->


<div class="action-bar actions-jump">
		<p class="jumpbox-return">
		<a href="index.php" class="left-box arrow-left" accesskey="r">
			<i class="icon fa-angle-left fa-fw icon-black" aria-hidden="true"></i><span>Return</span>
		</a>
	</p>

	</div>

	</div>


    <div class="bg-modal">
        <div class="modal-contents">
            <div class="container">
                <div class="title">
                    <h3>Post Reply Here</h3>
                </div>

                <div id="editparent">
                    <div id="editControls">
                        <div class="btn-group">
                            <a class="btn btn-xs btn-default" data-role="undo" href="#" title="Undo"><i class="fa fa-undo"></i></a>
                            <a class="btn btn-xs btn-default" data-role="redo" href="#" title="Redo"><i class="fa fa-repeat"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-xs btn-default" data-role="bold" href="#" title="Bold"><i class="fa fa-bold"></i></a>
                            <a class="btn btn-xs btn-default" data-role="italic" href="#" title="Italic"><i class="fa fa-italic"></i></a>
                            <a class="btn btn-xs btn-default" data-role="underline" href="#" title="Underline"><i class="fa fa-underline"></i></a>
                            <a class="btn btn-xs btn-default" data-role="strikeThrough" href="#" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-xs btn-default" data-role="indent" href="#" title="Blockquote"><i class="fa fa-indent"></i></a>
                            <a class="btn btn-xs btn-default" data-role="insertUnorderedList" href="#" title="Unordered List"><i class="fa fa-list-ul"></i></a>
                            <a class="btn btn-xs btn-default" data-role="insertOrderedList" href="#" title="Ordered List"><i class="fa fa-list-ol"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-xs btn-default" data-role="h1" href="#" title="Heading 1"><i class="fa fa-header"></i><sup>1</sup></a>
                            <a class="btn btn-xs btn-default" data-role="h2" href="#" title="Heading 2"><i class="fa fa-header"></i><sup>2</sup></a>
                            <a class="btn btn-xs btn-default" data-role="h3" href="#" title="Heading 3"><i class="fa fa-header"></i><sup>3</sup></a>
                            <a class="btn btn-xs btn-default" data-role="p" href="#" title="Paragraph"><i class="fa fa-paragraph"></i></a>
                        </div>
                    </div>
                    <div id="editor" contenteditable></div>
                    <form method="post" >
                        <textarea name="ticketDesc" id="editorCopy" required="required" style="height: 100px;width: 1200px"></textarea>
                        <br>
                        <input type="button" name="reply" value="submit">
                    </form>

                </div>

            </div>

        </div>

<div class="fasele">
	<div class="navbar" role="navigation" >
	<div class="inner">


	<ul id="nav-breadcrumbs" class="nav-breadcrumbs linklist navlinks" role="menubar">
						<li class="breadcrumbs">
										<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="index.php" itemprop="url" accesskey="h" data-navbar-reference="index"><i class="icon fa-home fa-fw"></i><span itemprop="title">Board index</span></a></span>

											<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="1"><a href="../viewforum58da.html?f=1" itemprop="url"><span itemprop="title">Your first category</span></a></span>
															<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="2"><a href="../viewforum12a3.html?f=2" itemprop="url"><span itemprop="title">Your first forum</span></a></span>
												</li>
		
					<li class="rightside responsive-search">
				<a href="../search.html" title="View the advanced search options" role="menuitem">
					<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
				</a>
			</li>
			</ul>

	</div>
</div>	
	<div class="time-footer">
<p class="right responsive-center time">It is currently Fri Dec 14, 2018 9:02 pm  </p>
 </div>
</div>
<div id="page-footer" class="page-footer" role="contentinfo">

	<div class="copyright">
				Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Limited
								<span class="rightside"> | All times are <span title="UTC">UTC</span></span>
	</div>

	<div id="darkenwrapper" class="darkenwrapper" data-ajax-error-title="AJAX error" data-ajax-error-text="Something went wrong when processing your request." data-ajax-error-text-abort="User aborted request." data-ajax-error-text-timeout="Your request timed out; please try again." data-ajax-error-text-parsererror="Something went wrong with the request and the server returned an invalid reply.">
		<div id="darken" class="darken">&nbsp;</div>
	</div>

	<div id="phpbb_alert" class="phpbb_alert" data-l-err="Error" data-l-timeout-processing-req="Request timed out.">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>
	</div>
	<div id="phpbb_confirm" class="phpbb_alert">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<div class="alert_text"></div>
	</div>
</div>
</div>
</div>

<div>
	<a id="bottom" class="anchor" accesskey="z"></a>
	</div>

<script type="text/javascript" src="../assets/javascript/jquery.mince91.js?assets_version=7"></script>
<script type="text/javascript" src="../assets/javascript/corece91.js?assets_version=7"></script>



<script type="text/javascript" src="../styles/leno/template/forum_fnce91.js?assets_version=7"></script>
<script type="text/javascript" src="../styles/leno/template/ajaxce91.js?assets_version=7"></script>



</body>


</html>
