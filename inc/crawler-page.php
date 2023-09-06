<?php
function mc_admin_create_chapter_crawler_page() {
    add_menu_page(
        __( 'Page Title', 'mccrawler' ),
        __( 'Create Chapter Crawl'),
        'manage_options',
        'create-chap-crawl-page',
        'mc_admin_page_create_chap_crawler',
        'dashicons-reddit',
        5
    );
}
add_action( 'admin_menu', 'mc_admin_create_chapter_crawler_page' );

function mc_admin_page_create_chap_crawler() {
    ?>
    <div class="mc_create_chap_crawler">
        <div class="mc_create_chap_crawler_title">
            Create Chapter Crawler
        </div>
        <div class="mc_create_chap_crawler_cover">
            <div class="one-inpt-crechap">
                <label for="mcNameChapter">Name Chapter</label>
                <input type="text" id="mcNameChapter" placeholder="Name Chapter" />
            </div>
            <div class="one-inpt-crechap">
                <label for="mcNameStoryParent">Name Story Parents</label>
                <input type="text" id="mcNameStoryParent" placeholder="Name Story Parents" />
            </div>
            <div class="one-inpt-crechap">
                <label for="mcIDStoryParents">ID Story Parents</label>
                <input type="number" id="mcIDStoryParents" placeholder="ID Story Parents" />
            </div>
            <div class="one-inpt-crechap">
                <label for="mcCurrentChapStory">Current Chapter</label>
                <input type="number" id="mcCurrentChapStory" placeholder="Current Chapter" />
            </div>
            <div class="one-inpt-crechap">
                <label for="mcContentChapter">Content Chapter</label>
                <textarea id="mcContentChapter"></textarea>
            </div>
            <div class="txt-wating" id="loadingTxt">
                Vui lòng chờ đợi ......
            </div>
            <div class="btn-create-chap-crawler">
                <button type="button" id="btnCreateChapterCrawler">Create</button>
            </div>
        </div>
    </div>
    <?php
}