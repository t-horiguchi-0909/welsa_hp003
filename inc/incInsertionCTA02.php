<section class="inline-cta02">
    <a href="<?php echo $url1; ?>" class="inline-cta02-link <?php echo $classname; ?>">
        <div class="inline-cta02-imgwrap">
        <div class="inline-cta02-img" style="background-image: url(<?php echo $img; ?>);"></div>
        </div>
        <div class="inline-cta02-wrap">
            <div class="inline-cta02-title"><?php echo $title; ?></div>
            <div class="inline-cta02-lead"><?php echo $lead; ?></div>
            <?php if(!empty($list1) && mb_strlen($list1) > 3) { ?>
            <ul class="inline-cta02-list">
                <?php if(!empty($list1) && mb_strlen($list1) > 3) { ?>
                    <li class="inline-cta02-list-item"><?php echo $list1 ?></li>
                <?php } ?>
                <?php if(!empty($list2) && mb_strlen($list2) > 3){ ?>
                    <li class="inline-cta02-list-item"><?php echo $list2 ?></li>
                <?php } ?>
                <?php if(!empty($list3) && mb_strlen($list3) > 3){ ?>
                    <li class="inline-cta02-list-item"><?php echo $list3 ?></li>
                <?php } ?>
            </ul>
            <?php } ?>
            <div class="inline-cta02-btn c-btn s-primary"><?php echo $btnlabel; ?></div>
        </div>
    </a>
</section>