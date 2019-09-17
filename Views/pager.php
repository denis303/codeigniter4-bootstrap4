<nav aria-label="<?= $label;?>">

    <ul<?= stringify_attributes($options);?>>

    	<?php foreach ($items as $item): ?>

            <?php 

                $item['linkOptions']['class'] = 'page-link';

                $item['linkOptions']['href'] = $item['uri'];
     
            ?>

    		<?php if (array_key_exists('active', $item) && $item['active']):?>

                <?php $item['linkOptions']['title'] .= ' <span class="sr-only">(' . $currentLabel . ')</span>';?>

    			<li class="page-item active"><a<?= stringify_attributes($item['linkOptions']);?>><?= $link['title'];?></a></li>

    		<?php else:?>

    			<li class="page-item"><a<?= stringify_attributes($item['linkOptions']);?>><?= $link['title'];?></a></li>

    		<?php endif;?>
    		
    	<?php endforeach;?>

    </ul>

</nav>