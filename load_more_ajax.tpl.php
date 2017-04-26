<div class="news_box col-xs-12 view view-main-block view-id-main_block">
  <div class="view-header">
    <div class="related">
      <h2 class="latest_n latest_authors"><?php print t('Related articles'); ?></h2>
    </div>
  </div>
  <div class="view-content">
    <?php if(!empty($data)): ?>
      <?php foreach($data as $d): ?>
    <div class="article-box">
      <div class="col-xs-12 col-sm-4 pull-right">
        <div class="row">
          <a href="<?php print $d['path']; ?>">
            <img typeof="foaf:Image" src="<?php print $d['image']; ?>" width="280" height="187" alt="<?php print $d['title']; ?>">
          </a>
        </div>
      </div>
      <div class="views-field views-field-title-1">
        <span class="field-content">
          <div class="col-xs-12 col-sm-8">
            <h4 class="caption">
              <a href="<?php print $d['path']; ?>"><?php print $d['title']; ?></a>
            </h4>
            <div class="info_article">
              <span><?php print $d['created']; ?></span>
              <span><i class="fa fa-eye"></i> <?php print $d['view']; ?></span>
            </div>
            <div>
              <?php print $d['body']; ?>
            </div>
            <a href="/" class="readmore"><i class="fa fa-arrow-circle-left"></i><?php print t('Read more'); ?></a>
            <div class="author pull-left">
              <a href="<?php print $d['author-path']; ?>">
                <img typeof="foaf:Image" src="<?php print $d['author-photo']; ?>" width="30" height="30" alt="">
              </a>
              <div class="author_inner">
                <div class="author_1"><?php print t('Author'); ?></div>
                <div class="author_name"><?php print $d['author-name']; ?></div>
              </div>
            </div>
          </div>
          <div style="clear: both"></div>
        </span>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <div id="ajax-target"></div>
    <div style="text-align: center; position: absolute; right: 0; left: 0;">
      <div style="display: none" class="ajax-progress ajax-progress-throbber"><div class="throbber">&nbsp;</div></div>
    </div>
  </div>
  <div class="item-list">
    <ul class="pager pager-load-more">
      <li class="pager-next first last">
        <a id="load_more_ajax" data-num='1' class="btn" href="#"><?php print t('View more'); ?></a>
      </li>
    </ul>
  </div>
</div>