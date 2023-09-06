function handleCreateChapterCrawler(){
    let btnCreateChapterCrawler = document.querySelector("#btnCreateChapterCrawler");
    let urlAjax =  'http://localhost/stories/wp-admin/admin-ajax.php';
    let mcNameChapter = document.querySelector("#mcNameChapter");
    let mcNameStoryParent = document.querySelector("#mcNameStoryParent");
    let mcIDStoryParents = document.querySelector("#mcIDStoryParents");
    let mcCurrentChapStory = document.querySelector("#mcCurrentChapStory");
    let mcContentChapter = document.querySelector("#mcContentChapter");
    if(btnCreateChapterCrawler){
        btnCreateChapterCrawler.onclick = ()=>{
            let valnameChapter = mcNameChapter.value;
            let valnameStoryParent = mcNameStoryParent.value;
            let valIDStoryParent = mcIDStoryParents.value;
            let valChapterCurrentStoryParent = mcCurrentChapStory.value;
            let valContent = mcContentChapter.value;
            let dataChapter = {};
            dataChapter.name_chapter = valnameChapter;
            dataChapter.name_story_parents = valnameStoryParent;
            dataChapter.id_story_parents = valIDStoryParent;
            dataChapter.num_chapter_current = valChapterCurrentStoryParent;
            dataChapter.content_chapter = valContent;
            jQuery.ajax({
                type: "POST",
                url: urlAjax,
                data: {
                    'action': 'mc_auto_create_chapter_have_crawler',
                    'data_chapter' : dataChapter
                },
                dataType: "html",
                beforeSend: function () {
                },
                success: function (response) {
                    let results = JSON.parse(response);
                    console.log(results);
                    // if(results.data.status == true){
                        
                    // }else{
                        
                    // }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    }
            });
        }
    }
}

handleCreateChapterCrawler();