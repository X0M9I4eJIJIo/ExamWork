<main class="main container">
  <h2 class="main__title"><?= CFS()->get('cards_title');?></h2>
  <div class="main__cards">
    <div class="help-cards">
      <?php $cards = CFS()->get('cards')?>
      <?php if($cards) foreach($cards as $card) : ?>
        <div class="help-card">
          <img src="<?= $card['card_img']?>" alt="" class="help-card__img">
          <div class="help-card__content card-content">
            <h2 class="card-content__title"><?= $card['card_title']?></h2>
            <p class="card-content__desc"><?= $card['card_desc']?></p>
            <a href="#" class="card-content__btn"><?= $card['card_btn']?></a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>
<section class="section">
  <?php $blocks = CFS()->get('section_blocks')?>
  <?php if($blocks) foreach($blocks as $block): ?>
    <div class="section__block">
      <img src="<?= $block['section_img']?>" alt="" class="section__block-img">
      <div class="section__block-content block-content">
        <h3 class="block-content__title"><?= $block['section_title']?></h3>
        <p class="block-content__desc"><?= $block['section_desc']?></p>
        <a href="#" class="block-content__btn"><?= $block['section_btn']?></a>
      </div>
    </div>
  <?php endforeach ?>
</section>