
<div id="navigation">
    <span class="fr">
        <?php // User links
        $links = array();
        if ($cupcake->user()) {
        
        	$links[] = $html->link(__('Ke Awal', true), array('plugin'=>'','admin'=>false,'controller'=>'users','action' => 'home'));
            $links[] = $html->link(__d('forum', 'Lihat Post Baru', true), array('controller' => 'search', 'action' => 'index', 'new_posts', 'admin' => false));
            $links[] = $html->link(__d('forum', 'Profil', true), array('controller' => 'users', 'action' => 'profile', $cupcake->user('id'), 'admin' => false));
            
            $links[] = $html->link(__d('forum', 'Keluar', true), array('controller' => 'users', 'action' => 'logout', 'admin' => false));
        } else {
            
        }
        
        
        echo implode(' - ', $links); ?>
    </span>
    
    <?php echo $html->getCrumbs(' &raquo; '); ?>
    <span class="clear"><!-- --></span>
</div>
