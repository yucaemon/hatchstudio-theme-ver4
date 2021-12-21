<div class='articles related-article'>
<div class='related-article__title components-title'>
こちらの記事も人気！タグ関連記事
</div>
 <?php
   $post_id = get_the_ID();    //記事の投稿IDを取得
   $tags = get_the_tags();     //この記事が含むタグをゲット
   echo get_template_part('part-tag-relatedpost'); //関連記事呼び出しテンプレート
 ?>
</div>
