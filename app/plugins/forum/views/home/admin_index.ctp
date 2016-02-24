
<div class="forumHeader">
	<h2><?php __d('forum', 'Panel Administrasi'); ?></h2>
</div>

<div class="forumWrap">
    <table class="table" cellspacing="0">
    <tr>
        <th><?php __d('forum', 'Total Topik'); ?></th>
        <th><?php __d('forum', 'Total Entry'); ?></th>
        <th><?php __d('forum', 'Total Pooling'); ?></th>
        <th><?php __d('forum', 'Total Pengguna'); ?></th>
        <th><?php __d('forum', 'Total Laporan'); ?></th>
        <th><?php __d('forum', 'Total Moderator'); ?></th>
        <th><?php __d('forum', 'Pengguna Baru'); ?></th>
    </tr>
    
    <tr>
    	<td class="ac"><?php echo number_format($totalTopics); ?></td>
    	<td class="ac"><?php echo number_format($totalPosts); ?></td>
    	<td class="ac"><?php echo number_format($totalPolls); ?></td>
    	<td class="ac"><?php echo number_format($totalUsers); ?></td>
    	<td class="ac"><?php echo number_format($totalReports); ?></td>
    	<td class="ac"><?php echo number_format($totalMods); ?></td>
    	<td class="ac"><?php echo $html->link($newestUser['User']['nama'], array('controller' => 'users', 'action' => 'edit', $newestUser['User']['id'], 'admin' => true)); ?></td>
    </tr>
    </table>
</div>	

<?php if (!empty($latestReports)) { ?>
<div class="forumWrap">
    <h3><?php __d('forum', 'Latest Reports'); ?></h3>
    
    <table class="table" cellspacing="0">
    <tr>
        <th><?php __d('forum', 'Tipe'); ?></th>
        <th><?php __d('forum', 'Item'); ?></th>
        <th><?php __d('forum', 'Dilapor oleh'); ?></th>
        <th><?php __d('forum', 'Komentar'); ?></th>
        <th><?php __d('forum', 'Dilaporkan Pada'); ?></th>
    </tr>
    
    <?php // List
	$counter = 0;
	foreach ($latestReports as $report) { ?>
        
    <tr<?php if ($counter % 2) echo ' class="altRow"'; ?>>
        <td><?php echo $html->link(__d('forum', ucfirst($report['Report']['itemType']), true), array('controller' => 'reports', 'action' => $report['Report']['itemType'] .'s')); ?></td>
    	<td>	
        	<?php if ($report['Report']['itemType'] == 'topic') {
				echo $html->link($report['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $report['Topic']['id'], 'admin' => false));
			} else if ($report['Report']['itemType'] == 'user') {
				echo $html->link($report['User']['nama'], array('controller' => 'users', 'action' => 'edit', $report['User']['id'], 'admin' => true));
			} else if ($report['Report']['itemType'] == 'post') {
				echo $report['Post']['content'];
			} ?>
        </td>
        <td><?php echo $html->link($report['Reporter']['nama'], array('controller' => 'users', 'action' => 'edit', $report['Reporter']['id'], 'admin' => true)); ?></td>
        <td><?php echo $report['Report']['comment']; ?></td>
        <td><?php echo $time->nice($report['Report']['created'], $cupcake->timezone()); ?></td>
    </tr>
    
    <?php ++$counter; } ?>
    </table>
</div>	
<?php } ?>

<?php if (!empty($latestUsers)) { ?>
<div class="forumWrap">
    <h3><?php __d('forum', 'Pengguna yang terakhir login'); ?></h3>
    
    <table class="table" cellspacing="0">
    <tr>
        <th><?php __d('forum', 'nama'); ?></th>
        <th><?php __d('forum', 'Email'); ?></th>
        <th><?php __d('forum', 'Bergabung'); ?></th>
        <th><?php __d('forum', 'Topik'); ?></th>
        <th><?php __d('forum', 'Entry'); ?></th>
        <!--<th><?php __d('forum', 'Option'); ?></th>-->
    </tr>
    
    <?php // List
	$counter = 0;
	foreach ($latestUsers as $user) { ?>
        
    <tr<?php if ($counter % 2) echo ' class="altRow"'; ?>>
        <td><?php echo $html->link($user['User']['nama'], array('controller' => 'users', 'action' => 'edit', $user['User']['id'], 'admin' => true)); ?></td>
        <td><?php echo $user['User']['email']; ?></td>
        <td class="ac"><?php echo $time->nice($user['User']['created'], $cupcake->timezone()); ?></td>
        <td class="ac"><?php echo number_format($user['User']['totalTopics']); ?></td>
        <td class="ac"><?php echo number_format($user['User']['totalPosts']); ?></td>
        <!--<td class="ac gray">
        	<?php echo $html->link(__d('forum', 'Edit', true), array('controller' => 'users', 'action' => 'edit', $user['User']['id'], 'admin' => true)); ?> -
        	<?php echo $html->link(__d('forum', 'Reset Password', true), array('controller' => 'users', 'action' => 'reset', $user['User']['id'], 'admin' => true), array('confirm' => __d('forum', 'Are you sure you want to reset?', true))); ?> -
        	<?php echo $html->link(__d('forum', 'Delete', true), array('controller' => 'users', 'action' => 'delete', $user['User']['id'], 'admin' => true)); ?>
        </td>-->
    </tr>
    
    <?php ++$counter; } ?>
    </table>
</div>	
<?php } ?>
