<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <title>我的留言箱 Johnny的博客 - SYSIT个人博客</title>
  <base href="<?php echo site_url();?>">
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner">
    <div id="OSC_Slogon"><?php echo $this->session->userdata('name');?>'s Blog</div>
    <div id="OSC_Channels">
        <ul>
        <li><a href="#" class="project">心情 here...</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	  <div id="VisitorInfo">
		当前访客身份：
				<?php echo $this->session->userdata('name');?> [ <a href="index.htm">退出</a> ]
				<span id="OSC_Notification">
			<a href="inbox.htm" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
																				</span>
</div>
		<div id="SearchBar">
    		<form action="#">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content">
<div id="AdminScreen">
    <div id="AdminPath">
        <a href="index_logined.htm">返回我的首页</a>&nbsp;»
    	<span id="AdminTitle">我的留言箱</span>
    </div>
    <div id="AdminMenu"><ul>
	<li class="caption">个人信息管理		
		<ol>
			<li class="current"><a href="inbox.htm">站内留言(0/1)</a></li>
			<li><a href="profile.htm">编辑个人资料</a></li>
			<li><a href="chpwd.htm">修改登录密码</a></li>
			<li><a href="userSettings.htm">网页个性设置</a></li>
		</ol>
	</li>		
</ul>
<ul>
	<li class="caption">博客管理	
		<ol>
			<li><a href="newBlog.htm">发表博客</a></li>
			<li><a href="blogCatalogs.htm">博客设置/分类管理</a></li>
			<li><a href="blogs.htm">文章管理</a></li>
			<li><a href="blogComments.htm">博客评论管理</a></li>
		</ol>
	</li>
</ul>
</div>
    <div id="AdminContent">
<ul class="tabnav"> 
	<li class="tab1 current"><a href="inbox.htm">所有留言<em>(1)</em></a></li> 
	<li class="tab4"><a href="outbox.htm">已发送留言<em>(0)</em></a></li>
    </ul>
<div class="MsgList">
<ul>
    <li id="msg_186720">
	<span class="sender"><a href="#"><img src="images/12_50.jpg" alt="红薯" title="红薯" class="SmallPortrait" user="12" align="absmiddle"></a></span>
	<span class="msg">
		<div class="outline">
			<a href="#" target="user">红薯</a>
			发送于 昨天(23:00) (2011-06-17 23:00)				
			&nbsp;&nbsp;<a href="javascript:delete_in_msg(186720)">删除</a>
		</div>
		<div class="content">
		  <div class="c">您好，欢迎使用SYSIT Blog。</div></div>
		<div class="opts">
			<a href="javascript:sendmsg(12,186720)">回复留言</a>
					</div>
	</span>
	<div class="clear"></div>
  </li>
  </ul>
</div>

<script type="text/javascript">
<!--
function delete_in_msg(mid){
  if(confirm("您确认要删除此条留言吗？")){
  	ajax_post("/action/msg/delete","msg="+mid,function(html){
	  if(html.length > 0) alert(html);
	  else
	    $('#msg_'+mid).fadeOut();	  
	});
  }
}
function cleanup_in_msg(){
  if(confirm("您确认要清空所有的留言吗？")){
  if(confirm("请再次确认是否要清空所有的留言")){
  	ajax_post("/action/msg/cleanup?type=0","",function(html){
	  if(html.length > 0) alert(html);
	  else
	    location.reload();  
	});
  }
  }
}
function read_msg(mid){jQuery.get('/action/msg/read?id='+mid);}
-->
</script></div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
<!--
$(document).ready(function() {
	$('#AdminTitle').text('我的留言箱');
});
$('.AutoCommitForm').ajaxForm({
    success: function(html) {	
		$('#error_msg').hide();
		if(html.length>0)
			$('#error_msg').html("<span class='error_msg'>"+html+"</span>");
		else
			$('#error_msg').html("<span class='ok_msg'>操作已成功完成</span>")
		$('#error_msg').show("fast");
    }
});
$('.AutoCommitJSONForm').ajaxForm({
	dataType: 'json',
    success: function(json) {	
		$('#error_msg').hide();
		if(json.error==0){
			if(json.msg)
				$('#error_msg').html("<span class='ok_msg'>"+json.msg+"</span>");
			else
				$('#error_msg').html("<span class='ok_msg'>操作已成功完成</span>");
		}
		else {
			if(json.msg)
				$('#error_msg').html("<span class='error_msg'>"+json.msg+"</span>");
			else
				$('#error_msg').html("<span class='error_msg'>操作已成功完成</span>");
		}
		$('#error_msg').show("fast");
    }
});
//-->
</script>
</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>