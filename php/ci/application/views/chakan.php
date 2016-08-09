<base href="<?php echo site_url();?>">
<a href="blog/index">返回主页</a>
<meta charset="utf-8">
<h2>标题：<?php echo $blog->title?></h2>
<li>日期：<?php echo $blog->time?></li>
<h4>访问量：<?php echo $blog->hits?></h4>
<p><?php echo $blog->content?></p>