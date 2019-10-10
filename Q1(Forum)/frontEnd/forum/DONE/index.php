<?php
include "../../../connect.php"

?>


<!DOCTYPE html>
<html dir="ltr" lang="en-gb">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Forum</title>

	<link rel="alternate" type="application/atom+xml" title="Feed " href="#">			<link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="../app.php/feed/topics">


	<link rel="icon" href="../ext/beutheme/customizer/files/olcademy.png" />



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







<link href="../ext/bb3mobi/lastpostavatar/styles/all/theme/lastpostavatarce91.css?assets_version=7" rel="stylesheet" type="text/css" media="screen" />








<!--#3179ff-->


<style type="text/css" >

</style>


</head>
<body id="phpbb" class="nojs notouch section-index ltr ">

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
			<a href="index.html" title="Board index">
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
										<a href="#" role="menuitem">
											<span>View Threads</span>
										</a>
									</li>
						</ul>
					</div>
				</li>

				
																						<li>
						<a href="../memberlist4bfd.html?mode=team" role="menuitem">
							<i class="mdi mdi-account-group"></i><span>Create thread</span>
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

					icons
					</div>
				</div>
				<div class="left-header">

			</div>
		</div>
	</div>
	<a id="start_here" class="anchor"></a>
	<div id="page-body" class="page-body   " role="main">
	
		<!--work start here-->
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="#">Thread</a></div></dt>
						<dd class="topics">Category</dd>
						<dd class="posts">Replies</dd>
						<dd class="lastpost"><span>User By:</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
                <?php
                $sql="SELECT t.* FROM olcademy.threads t LIMIT 501";
                $res=mysqli_query($sql);
                $row=mysqli_fetch_array($res);
                $_SESSION['count']=mysqli_num_rows($row);
                while ($row){
                echo /** @lang Thread Table */
                "<li class='row'>
						<dl class='row-item forum_read'>
				<dt title='No unread posts'>
										<div class='list-inner'>
												
																		<a href='view_thread.php?".$row['thread_id']."' class='forumtitle'>".$row['thread_name']."</a>
						<br />D
												<div class='responsive-show' style='display: none;'>
															Category: <strong>".$row['thread_cat']."</strong>
													</div>
											</div>
				</dt>
									<dd class='topics'>".$row['thread_id']."<dfn>Topics</dfn></dd>
					<dd class='posts'>1 <dfn>Replies</dfn></dd>
					<dd class='lastpost'>
						<span>
																						<dfn>Last post</dfn>
																	<span class='lastpostavatar'><img class='avatar' src='../download/filee68e.png?avatar=2_1534042049.png' width='30' height='30' alt='User avatar' /></span>									<a href='#' title='USer' class='lastsubject'>".$row['thread_by']."</a> <br />
																	 <a href='#' style='color: #AA0000;' class='username-coloured'></a>
																	<a href='../viewtopicaaca.html?f=2&amp;p=1#p1' title='View the latest post'>
										<i class='icon fa-external-link-square fa-fw icon-lightgray icon-md' aria-hidden='true'></i><span class='sr-only'>View the latest post</span>
									</a>
															Sun Aug 12, 2018 2:32 am
													</span>
					</dd>
							</dl>
					</li>";
                }
			?>
			
				</ul>

			</div>
		</div>

	<div class="stat-block statistics">

		<p>
						<div class="them-statistics"><div class="icon-static"><i class="mdi mdi-comment-multiple-outline"></i></div><div class="text-static">Total posts <strong><?php echo $_SESSION['count'];?></strong></div></div>
			<div class="them-statistics"><div class="icon-static"><i class="mdi mdi-forum-outline"></i></div><div class="text-static">Total topics <strong><?php echo $_SESSION['count'];?></strong></div></div>
			<div class="them-statistics last-div"><div class="icon-static"><i class="mdi mdi-account-multiple-outline"></i></div><div class="text-static">Total members <strong><?php echo $_SESSION['count'];?></strong></div></div>

					</p>
	</div>


				
		
		
		
	</div>

<div class="fasele">
	<div class="navbar" role="navigation" >
	<div class="inner">


	<ul id="nav-breadcrumbs" class="nav-breadcrumbs linklist navlinks" role="menubar">
						<li class="breadcrumbs">
										<span class="crumb"  itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="index.html" itemprop="url" accesskey="h" data-navbar-reference="index"><i class="icon fa-home fa-fw"></i><span itemprop="title">Board index</span></a></span>

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
<p class="right responsive-center time">It is currently time <?php echo now();?></p>
 </div>
</div>
<div id="page-footer" class="page-footer" role="contentinfo">

	<div class="copyright">
				Powered by <a href="#">Olcademy</a>&reg;Education Software &copy;
								<!--<span class="rightside"> | All times are <span title="UTC">UTC</span></span>-->
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
