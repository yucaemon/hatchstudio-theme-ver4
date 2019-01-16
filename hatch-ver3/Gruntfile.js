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
                    'components-php/header.php': '_haml/components/header.haml',
                    'components-php/header02.php': '_haml/components/header02.haml',
                    'components-php/footer.php': '_haml/components/footer.haml',
                    'components-php/keywords.php': '_haml/components/keywords.haml',
                    'components-php/keywords-category.php': '_haml/components/keywords-category.haml',
                    'components-php/recommend-list.php': '_haml/components/recommend-list.haml',
                    'components-php/affiliate-ad.php': '_haml/components/affiliate-ad.haml',
                    'components-php/paging-nav.php': '_haml/components/paging-nav.haml',
                    'components-php/annie-banner.php': '_haml/components/annie-banner.haml',
                    'components-php/annie-ad-side.php': '_haml/components/annie-ad-side.haml',
                    'components-php/house-ad-side.php': '_haml/components/house-ad-side.haml',
                    'components-php/business-ad-side.php': '_haml/components/business-ad-side.haml',
                    'components-php/article-sns-btns.php': '_haml/components/article-sns-btns.haml',
                    'components-php/wrote-models-box.php': '_haml/components/wrote-models-box.haml',
                    'components-php/sns-btns.php': '_haml/components/sns-btns.haml',
                    'components-php/related-article.php': '_haml/components/related-article.haml',
                    'components-php/sns-box.php': '_haml/components/sns-box.haml',
                    'components-php/this-page-tags.php': '_haml/components/this-page-tags.haml',
                    'components-php/category-popular.php': '_haml/components/category-popular.haml',
                    'components-php/total-popular.php': '_haml/components/total-popular.haml',
                    'components-php/news-articles.php': '_haml/components/news-articles.haml',
                    'components-php/breadcrumb.php': '_haml/components/breadcrumb.haml',
                    'components-php/header-sp.php': '_haml/components/header-sp.haml',
                    'components-php/footer-sp.php': '_haml/components/footer-sp.haml',
                    'components-php/share-house-ad.php': '_haml/components/share-house-ad.haml',
                    'components-php/sponsor-blogger.php': '_haml/components/sponsor-blogger.haml',
                    'components-php/business.php': '_haml/components/business.haml',
                    'components-php/service.php': '_haml/components/service.haml',
                    'components-php/contact-form.php': '_haml/components/contact-form.haml',
                    'components-php/header-bar-menu.php': '_haml/components/header-bar-menu.haml',
                    'components-php/lists-popular-total.php': '_haml/components/lists-popular-total.haml',
                    'components-php/lists-popular-month.php': '_haml/components/lists-popular-month.haml',
                    'components-php/lists-news.php': '_haml/components/lists-news.haml',
                    'components-php/bt-popular-month.php': '_haml/components/bt-popular-month.haml',
                    'components-php/bt-news-lists.php': '_haml/components/bt-news-lists.haml',
                    'components-php/category-keywords.php': '_haml/components/category-keywords.haml',


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
