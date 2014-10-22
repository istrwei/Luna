<?php
		
	$forum_style = 'style="background-color:'.$cur_forum['color'].';border-color:'.$cur_forum['color'].';"';
	$group_style = 'style="border-color:'.$cur_forum['color'].';"';

    // If there is a last_post/last_poster
    if ($cur_forum['last_post'] != '') {
        if (luna_strlen($cur_forum['last_topic']) > 43)
            $cur_forum['last_topic'] = utf8_substr($cur_forum['last_topic'], 0, 40).'...';

			$last_post = '<a href="viewtopic.php?pid='.$cur_forum['last_post_id'].'#p'.$cur_forum['last_post_id'].'" class="list-group-item" '.$group_style.'><span class="forum-newestitem">'.luna_htmlspecialchars($cur_forum['last_topic']).'<span class="help-block">by '.luna_htmlspecialchars($cur_forum['last_poster']).'</span></span></a>';
    }

	$forum_stats = '<span class="list-group-item" '.$group_style.'>'.$cur_forum['num_topics'].' topics and '.$cur_forum['num_posts'].' posts</span>';

?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	<div class="list-group list-group-forum">
		<a href="viewforum.php?id=<?php echo $cur_forum['fid'] ?>" class="list-group-item list-group-item-cat" <?php echo $forum_style ?>>
			<h4><?php echo luna_htmlspecialchars($cur_forum['forum_name']) ?></h4>
			<?php echo $forum_desc ?>
		</a>
		<?php echo $last_post ?>
		<?php echo $forum_stats ?>
	</div>
</div>