/**
 * Created by yuka on 12/5/17.
 */
module.exports = function (grunt) {

    grunt.initConfig({

        //package.jsonを取得
        pkg: grunt.file.readJSON('package.json'),

        //タスクの設定（grunt-contrib-sass）
        sass: {
            styles: {
                //SCSSファイルを指定
                src: '_scss/style.scss',
                //CSSを書きだしファイルを指定
                dest: 'style.css'
            }
        },

        //タスクの設定（grunt-contrib-watch）
        watch: {
            sass: {
                //変更を監視するファイルを指定
                files: ['_scss/*.scss'],
                //変更されたらどのタスクを実行するか指定
                tasks: [ 'sass' ]
            },
            haml: {
                //変更を監視するファイルを指定
                files: ['_haml/*.haml'],
                //変更されたらどのタスクを実行するか指定
                tasks: [ 'haml' ]
            }
        },

        haml: {

            dist: {
                files: {
                    'components-php/header.php': '_haml/header.haml',
                    'components-php/header02.php': '_haml/header02.haml',
                    'components-php/footer.php': '_haml/footer.haml',
                    'components-php/profile.php': '_haml/profile.haml',
                    'components-php/keywords-category.php': '_haml/keywords-category.haml',
                    'components-php/keywords.php': '_haml/keywords.haml',
                    'components-php/recommend-list.php': '_haml/recommend-list.haml',
                    'components-php/affiliate-ad.php': '_haml/affiliate-ad.haml',
                    'components-php/paging-nav.php': '_haml/paging-nav.haml',
                    'components-php/article-sns-btns.php': '_haml/article-sns-btns.haml',
                    'components-php/sns-btns.php': '_haml/sns-btns.haml',
                    'components-php/related-article.php': '_haml/related-article.haml',
                    'components-php/sns-box.php': '_haml/sns-box.haml',
                    'components-php/this-page-tags.php': '_haml/this-page-tags.haml',
                    'components-php/category-popular.php': '_haml/category-popular.haml',
                    'components-php/total-popular.php': '_haml/total-popular.haml',
                    'components-php/news-articles.php': '_haml/news-articles.haml',
                    'components-php/breadcrumb.php': '_haml/breadcrumb.haml',
                    'components-php/header-sp.php': '_haml/header-sp.haml',
                    'components-php/footer-sp.php': '_haml/footer-sp.haml',
                    'components-php/featured-contens.php': '_haml/featured-contens.haml',
                    'components-php/featured-contens-small.php': '_haml/featured-contens-small.haml',
                    'components-php/area-contens.php': '_haml/area-contens.haml',
                    'components-php/sponsor-blogger.php': '_haml/sponsor-blogger.haml',
                    'components-php/contact-form.php': '_haml/contact-form.haml',
                    'components-php/header-bar-menu.php': '_haml/header-bar-menu.haml',
                    'components-php/lists-popular-total.php': '_haml/lists-popular-total.haml',
                    'components-php/lists-popular-month.php': '_haml/lists-popular-month.haml',
                    'components-php/lists-news.php': '_haml/lists-news.haml',
                    'components-php/bt-news-lists.php': '_haml/bt-news-lists.haml',
                    'components-php/bt-popular-month.php': '_haml/bt-popular-month.haml',
                    'components-php/bt-popular-month.php': '_haml/bt-popular-month.haml',
                    'components-php/bt-recommend.php': '_haml/bt-recommend.haml',
                    'components-php/category-keywords.php': '_haml/category-keywords.haml',
                    'components-php/affiliate-ad-article.php': '_haml/affiliate-ad-article.haml',
                    'components-php/affiliate-ad-one.php': '_haml/affiliate-ad-one.haml',
                    'components-php/affiliate-ad-landscape.php': '_haml/affiliate-ad-landscape.haml',
                    'components-php/affiliate-ad-sky.php': '_haml/affiliate-ad-sky.haml',
                    'components-php/affiliate-ad-sp.php': '_haml/affiliate-ad-sp.haml',
                    'components-php/lists-category-total.php': '_haml/lists-category-total.haml',
                    'components-php/Q&A-banner.php': '_haml/Q&A-banner.haml',
                    'components-php/Q&A-banner-small.php': '_haml/Q&A-banner-small.haml',
                    'index.php': '_haml/index.haml',
                    'single.php': '_haml/single.haml',
                    'archive.php': '_haml/archive.haml',
                    'about.php': '_haml/about.haml',
                    'policy.php': '_haml/policy.haml',
                    'rules.php': '_haml/rules.haml',
                    'search.php': '_haml/search.haml',
                    'category.php': '_haml/category.haml',
                    'security.php': '_haml/security.haml',
                    'tag.php': '_haml/tag.haml',
                    '404.php': '_haml/404.haml',
                    'recruit.php': '_haml/recruit.haml',
                    'contact.php': '_haml/contact.haml',
                    'service-web.php': '_haml/service-web.haml',
                    'service-translate.php': '_haml/service-translate.haml',
                    'service-contens.php': '_haml/service-contens.haml',
                    'hatching-house-pdx.php': '_haml/hatching-house-pdx.haml',
                    'hatching-house-hawaii.php': '_haml/hatching-house-hawaii.haml',
                    'hatching-real-estate.php': '_haml/hatching-real-estate.haml',
                    'author.php': '_haml/author.haml'



                }
            }

        }



    });

    // プラグインの読み込み
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-haml');

    grunt.registerTask('default', [ 'sass', 'haml' ]);

};
