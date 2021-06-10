<?php 

  foreach ($feeds->channel->item as $item) {
    $i++;
    $title = $item->title;
    $link = $item->link;
    $description = $item->description;
    $postDate = $item->pubDate;
    $image = $item->enclosure['url'];
    $pubDate = date('D, d M Y', strtotime($postDate));

    if ($i >= 11) {
        break;
    }

    if ($i == 1 || $i == 4 || $i == 7) { ?>
      <div class="row">
    <?php } ?>

    <div class="col-md-4 blog">
      <div class="card-veille">
          <div class="post-head">
              <h2>
                <a target="_blank" href="<?php echo $link; ?>">
                  <?php echo $title; ?>
                </a>
              </h2>
              <img src="<?php echo $image; ?>" width="150" height="150" alt="card image">
              <span><?php echo $pubDate; ?></span>
          </div>

          <div class="post-content">
            <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)); ?><br/>
            <a target="_blank" class="link-blog btn btn-info btn-sm" href="<?php echo $link; ?>">
              Voir plus
            </a>
          </div>
        </div>
    </div>

  <?php if ($i == 3 || $i == 6 || $i == 9) { ?>
    </div>
  <?php } ?>
<?php } ?>