<?php /** *  Template Name:  セキュリティーページ */ ?>
<?php include('head.php'); ?>
<body>
<section class='pages security-page'>
<div class='outer'>
<?php include('components-php/header02.php'); ?>
<div class='outer__inner column-12'>
<div class='pages__container'>
<div class='logo__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/annie-logo.svg">
</div>
<div class='security-policy'>
<p class='pages__header'>
情報セキュリティ基本方針
</p>
<p class='pages__read'>
ANNIE Jeneは、以下のとおり情報セキュリティ基本方針を定め、個人情報保護の仕組みを構築し、 全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進いたします。
当社は、ISO27001：2013 および関連するその他の法令・規範を遵守します。また当社は、情報セキュリティマネジメントシステムを着実に実施・維持し、継続的な改善に努めます。
当社は、取り扱う情報資産を適切に管理する体制を確立するとともに、当社規程を全従業員に周知し、その遵守徹底に努めます。
当社は、取り扱う情報資産を特定し、情報資産の取得・利用にあたっては、社内規範に従い適切に行います。また、当社はお客様からお預かりした情報資産を、お客様の同意がある場合または、正当な理由がある場合を除き、第三者に開示または提供しません。
当社は、情報資産への不正アクセス、情報資産の漏えい、滅失、き損等の予防に努め、情報セキュリティの向上、是正を継続的に実施します。
当社は、お客様からの情報資産に関するお問い合わせに誠実かつ迅速に対応します。
</p>
</div>
</div>
<?php include('components-php/news-articles.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<div class='column-6 margin-center'>
<?php include('components-php/sns-box.php'); ?>
</div>
<div class='column-8 margin-center'>
<?php include('components-php/shopping-box.php'); ?>
</div>
</div>
</div>
</section>
<?php include('components-php/footer.php'); ?>
</body>
