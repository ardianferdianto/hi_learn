
<div class="forumHeader">
	<h2><?php __d('forum', 'Pengaturan Forum'); ?></h2>
</div>

<?php $session->flash(); ?>

<?php // Settings
echo $form->create('Setting', array('url' => array('controller' => 'home', 'action' => 'settings', 'admin' => true)));
echo $form->input('site_name', array('label' => __d('forum', 'Nama Forum', true)));
//echo $form->input('site_name', array('label' => __d('forum', 'Site Name', true)));

//echo $form->input('site_main_url', array('label' => __d('forum', 'Site Website', true)));
echo $form->input('security_question', array('label' => __d('forum', 'Pertanyaan Keamanan', true)));
echo $form->input('security_answer', array('label' => __d('forum', 'Jawaban Kemanan', true))); ?>

<p><strong><?php __d('forum', 'Pengaturan Topik'); ?></strong></p>

<?php // Topic
echo $form->input('topics_per_page', array('style' => 'width: 50px', 'label' => __d('forum', 'Topik Per Halaman', true)));
echo $form->input('topics_per_hour', array('style' => 'width: 50px', 'label' => __d('forum', 'Topik Per Jam', true)));
echo $form->input('topic_flood_interval', array('style' => 'width: 50px', 'label' => __d('forum', 'Interval Topik Ditampilkan', true), 'after' => ' ('. __d('forum', 'Detik', true) .')'));
echo $form->input('topic_pages_till_truncate', array('style' => 'width: 50px', 'label' => __d('forum', 'Paging per Halaman', true), 'after' => ' ('. __d('forum', 'Paging dibawah judul topik', true) .')')); ?>

<p><strong><?php __d('forum', 'Pengaturan Entry'); ?></strong></p>

<?php // Posts
echo $form->input('posts_per_page', array('style' => 'width: 50px', 'label' => __d('forum', 'Entry Per Halaman', true)));
echo $form->input('posts_per_hour', array('style' => 'width: 50px', 'label' => __d('forum', 'Entry Per Jam', true)));
echo $form->input('post_flood_interval', array('style' => 'width: 50px', 'label' => __d('forum', 'Interval Entry Ditampilkan', true), 'after' => ' ('. __d('forum', 'Menit', true) .')'));
echo $form->input('posts_till_hot_topic', array('style' => 'width: 50px', 'label' => __d('forum', 'Entry sampai menjadi entry populer', true))); ?>

<p><strong><?php __d('forum', 'Pengaturan Lain-lain'); ?></strong></p>

<?php // Misc
echo $form->input('default_locale', array('options' => $cupcake->getLocales(), 'label' => __d('forum', 'Bahasa', true)));
echo $form->input('days_till_autolock', array('style' => 'width: 50px', 'after' => ' ('. __d('forum', 'Hari', true) .')', 'label' => __d('forum', 'Jumlah Hari sampai topik otomatis terkunci', true)));
echo $form->input('whos_online_interval', array('style' => 'width: 50px', 'label' => __d('forum', 'Siapa yang online interval', true), 'after' => ' ('. __d('forum', 'Menit', true) .')'));
echo $form->input('enable_quick_reply', array('options' => $cupcake->options(), 'label' => __d('forum', 'Aktifkan Pembalasan Cepat', true)));
echo $form->input('enable_gravatar', array('options' => $cupcake->options(), 'label' => __d('forum', 'Aktifkan Gravatar', true)));
echo $form->input('censored_words', array('type' => 'textarea', 'label' => __d('forum', 'Kata-kata yang disensor', true), 'after' => ' ('. __d('forum', 'Pisahkan dengan koma', true) .')')); ?>

<?php echo $form->end(__d('forum', 'Update', true)); ?>