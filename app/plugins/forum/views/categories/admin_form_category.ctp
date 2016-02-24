
<?php // Switch
if ($method == 'add') {
	$action = 'add_category';
	$button = __d('forum', 'Save', true);
	$title = __d('forum', 'Add Forum Category', true);
} else {
	$action = 'edit_category';
	$button = __d('forum', 'Update', true);
	$title = __d('forum', 'Edit Forum Kategori', true);
}

array_unshift($levels, '-- '. __d('forum', 'None', true) .' --'); ?>

<div class="forumHeader">
	<h2><?php echo $title; ?></h2>
</div>

<!--<p><?php __d('forum', 'When applying a read, post, reply or poll access, it states that all users with that access level and above will be able to commit the respective action. It does not mean only that type of access can view the forum category. However, the restricted access will limit only users with that access level to view the forum category.'); ?></p>-->

<?php 
echo $form->create('ForumCategory', array('url' => array('controller' => 'categories', 'action' => $action, 'admin' => true)));
echo $form->input('title', array('label' => __d('forum', 'Judul', true)));
echo $form->input('description', array('type' => 'textarea', 'label' => __d('forum', 'Deskripsi', true)));
echo $form->input('forum_id', array('options' => $forums, 'label' => __d('forum', 'Forum', true)));
if (!empty($categories)) {
	echo $form->input('parent_id', array('options' => $categories, 'label' => __d('forum', 'Parent Kategori', true), 'empty' => true));
}
echo $form->input('status', array('options' => $cupcake->options(2), 'label' => __d('forum', 'Status', true)));
echo $form->input('orderNo', array('style' => 'width: 50px', 'label' => __d('forum', 'Order No', true)));
echo $form->input('access_level_id', array('options' => $levels, 'label' => __d('forum', 'Dibatasi akses ke', true)));
echo $form->input('accessRead', array('options' => $cupcake->options(4, null, true), 'label' => __d('forum', 'Read Access', true)));
echo $form->input('accessPost', array('options' => $cupcake->options(4), 'label' => __d('forum', 'Akses Post', true)));
echo $form->input('accessReply', array('options' => $cupcake->options(4), 'label' => __d('forum', 'Akses Balas', true)));
echo $form->input('accessPoll', array('options' => $cupcake->options(4), 'label' => __d('forum', 'Akses Polling', true)));
echo $form->input('settingPostCount', array('options' => $cupcake->options(), 'label' => __d('forum', 'Menaikan Posting User / Jumlah topic', true)));
echo $form->input('settingAutoLock', array('options' => $cupcake->options(), 'label' => __d('forum', 'Auto-lock tidak aktif topik', true)));
echo $form->end($button); ?>