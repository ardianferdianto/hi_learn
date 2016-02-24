
<div class="forumHeader">
	<h2><?php __d('forum', 'Laporan'); ?></h2>
</div>

<p><?php printf(__d('forum', 'Anda yakin ingin melaporkan entry ini di topik %s? Jika ya, silahkan masukkan alasan mengapa melaporkan entry ini, max 255 karakter.', true), $html->link($post['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $post['Topic']['slug']))); ?></p>

<?php $session->flash(); ?>

<?php echo $form->create('Report', array('url' => array('controller' => 'posts', 'action' => 'report', $id))); ?>
<?php echo $form->input('post', array('type' => 'textarea', 'value' => $post['Post']['content'], 'readonly' => 'readonly', 'label' => __d('forum', 'Entry', true))); ?>
<?php echo $form->input('comment', array('type' => 'textarea', 'label' => __d('forum', 'Alasan', true))); ?>
<?php echo $form->end(__d('forum', 'Lapor', true)); ?>