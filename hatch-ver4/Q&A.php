<?php /** *  Template Name: 質問ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='qa-page contact-page pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='qar-contens zigzag zigzag-pink'>
<div class='outer__inner qar-contens__box flexbox--h-center'>
<div class='qar-contens__box__txt flexbox--h-center'>
<div class='qar-contens__box__txt--img-top'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-boo.svg">
</div>
<div class='qar-contens__box__txt--mid'>
記事にして欲しいネタ募集中
</div>
<div class='qar-contens__box__txt--img-btm'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-txt.svg">
</div>
</div>
<div class='qar-contens__box__character'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-img.svg">
</div>
</div>
<div class='outer__inner'>
<form action='https://docs.google.com/forms/d/e/1FAIpQLScWcZ3TzAexAWFCokTMijAW8fB4dS_tcY17ikhwf7p-voj4EQ/viewform?usp=pp_url' class='contact-form__form'>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">ご相談内容</label>
    <div class="col-sm-4">
      <select class="form-control selectpicker">
        <option>一つ選択してください ▼</option>
        <option data-value="WEB/動画制作ついて">WEB/動画制作ついて</option>
        <option data-value="コンテンツ制作/広告掲載について">コンテンツ制作/広告掲載について</option>
        <option data-value="通訳/翻訳サービスについて">通訳/翻訳サービスについて</option>
        <option data-value="宿泊ゲストハウスPDX(ポートランド)について">宿泊ゲストハウスPDX(ポートランド)について</option>
        <option data-value="SFバークレー不動産サポートについて">SFバークレー不動産サポートについて</option>
         <option data-value="その他">その他</option>
      </select>
    </div>
  </div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='staticEmail'>
ペンネーム
</label>
<div class='col-sm-6'>
<input class='form-control form-control-lg' name='entry.113712413'>
</div>
</div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='email'>
メールアドレス
</label>
<div class='col-sm-6'>
<input class='form-control form-control-lg' name='entry.1029886822'>
</div>
</div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='consultation'>
記事で書いて欲しい質問内容
</label>
<div class='col-sm-6'>
<textarea class='form-control' id='exampleFormControlTextarea1' name='entry.986471514' rows='5'></textarea>
</div>
</div>
<div class='notice-box__header'>
ご注意: 採用した質問のみご返信をさせていただきます。
</div>
<button class='button-pink-01'>
お問い合わせを送信する
</button>
</form>
</div>
</div>
</div>
</body>
