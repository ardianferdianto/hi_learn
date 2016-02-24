
<div class="forumHeader">
	<h2><?php __d('forum', 'Item yang dilaporkan'); ?></h2>
</div>

<div class="forumOptions">
	<span><?php __d('forum', 'Lihat Laporkan berdasarkan'); ?>:</span>
	<?php echo $html->link(__d('forum', 'Topik', true), array('controller' => 'reports', 'action' => 'topics')); ?>
    <?php echo $html->link(__d('forum', 'Entry', true), array('controller' => 'reports', 'action' => 'posts')); ?>
    <?php echo $html->link(__d('forum', 'Pengguna', true), array('controller' => 'reports', 'action' => 'users')); ?>
</div>

<?php echo $form->create('Report', array('url' => array('controller' => 'reports', 'action' => 'index', 'admin' => true))); ?>
<div class="forumWrap">
    <?php echo $this->element('pagination'); ?>
    
    <table class="table" cellspacing="0">
    <tr>
        <th><?php __d('forum', 'Tipe'); ?></th>
        <th><?php __d('forum', 'Item'); ?></th>
        <th><?php echo $paginator->sort(__d('forum', 'Dilaporkan Oleh', true), 'Reporter.nama'); ?></th>
        <th><?php __d('forum', 'Comment'); ?></th>
        <th><?php echo $paginator->sort(__d('forum', 'Dilaporkan tanggal', true), 'Report.created'); ?></th>
    </tr>
    
    <?php // List
	if (!empty($reports)) {
		$counter = 0;
		foreach ($reports as $report) { ?>
        
    <tr<?php if ($counter % 2) echo ' class="altRow"'; ?>>
        <td><?php echo $html->link(__d('forum', ucfirst($report['Report']['itemType']), true), array('action' => $report['Report']['itemType'] .'s')); ?></td>
    	<td>	
        	<?php if ($report['Report']['itemType'] == 'topic') {
				echo $html->link($report['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $report['Topic']['slug'], 'admin' => false));
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
    	<?php ++$counter; 
		}
	} else { ?>
    
    <tr>
    	<td colspan="5" class="empty"><?php __d('forum', 'Tidak ada laporan.'); ?></td>
   	</tr>
    <?php } ?>
    
    </table>

	<?php echo $this->element('pagination'); ?>
</div>	

<?php echo $form->end(); ?>