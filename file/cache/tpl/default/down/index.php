<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<?php if($MOD['page_irec']) { ?>
<div class="m o_h">
<div class="head-txt"><span><?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?><?php if($k<10) { ?><?php if($k) { ?> &nbsp;|&nbsp; <?php } ?><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo $v['catname'];?></a><?php } ?><?php } } ?></span><strong>推荐<?php echo $MOD['name'];?></strong></div>
<div class="list-img list0"><?php echo tag("moduleid=$moduleid&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&order=".$MOD['order']."&width=180&height=135&lazy=$lazy&pagesize=".$MOD['page_irec']."&template=list-thumb");?></div>
</div>
<?php } ?>
<div class="m m3">
<div class="m3l">
<?php if($MOD['page_icat']) { ?>
<table cellpadding="0" cellspacing="0" width="100%">
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="420">
<div class="head-txt"><span><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多<i>&gt;</i></a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="down-list"><?php echo tag("moduleid=$moduleid&condition=status=3&catid=".$c['catid']."&areaid=$cityid&order=".$MOD['order']."&pagesize=".$MOD['page_icat']."&datetype=2&template=list-down");?></div>
</td>
<?php if($i%2==0) { ?><td>&nbsp;</td><?php } ?>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
<?php } ?>
</div>
<div class="m3r">
<div class="head-sub"><strong>总下载排行</strong></div>
<div class="list-rank"><?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&order=download desc&key=download&pagesize=9&template=list-rank");?></div>
<div class="head-sub"><strong>月下载排行</strong></div>
<div class="list-rank"><?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=download desc&key=download&pagesize=9&template=list-rank");?></div>
</div>
<div class="c_b"></div>
</div>
<?php include template('footer');?>