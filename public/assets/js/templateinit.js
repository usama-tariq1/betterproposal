// template init

var $baseurl = ``;


function gettemplate(){
    $('body #previewrender').html('');

    // var template = $('body').find('#templateholder').get(0).outerHTML;
    var template = $('body').find('#template .widgetholder').html();


    $('body #previewrender').html(template);

    // $('body').find('.editor').each(function(){
    //     $(this).remove();
    //     // console.log($(this).html());
    // });
    $('body #previewrender').find('.editor').remove();

    $('body #previewrender').find('.view').show();

    $('body #previewrender').find('.tinymce-heading').attr('contenteditable' , "false");
    $('body #previewrender').find('.tinymce-body').attr('contenteditable' , "false");
    $('body #previewrender').find('.sidemenu').remove();




    template = $('body').find('#previewrender').html();




    return template;


}

function geteditable(){


    var template = $('body').find('#template .widgetholder').html();

    return template;


}


jQuery(function(){
    $('.savetemplate').click(function(){
        savetemplate();
    });

    // $('body').change(function(){
    //     console.log('Hit change');
    // });

});

function savetemplate(){
    var template = gettemplate();
    var editable = geteditable();
    var code = $('body #template').attr('templateid');
    var config = JSON.stringify(template_config);
    var templatename = $('body #templatename');
    var templatedescription = $('body #templatedescription');
    var savedtag = $('.savedtag');
    var token = $('[name=_token]').val();
    var errors = 0;




    // console.log(template);
    // return ;

    $('.errmsg').remove();

    if(templatename.val().length < 1){
        // templatename.after(`
        //     <div class="errmsg" style="color:red;"> Name is required! </div>
        // `);
        templatename = code;
        // errors++;

    }
    else{
        templatename = templatename.val();

    }


    if(templatedescription.val().length < 1){
        templatedescription = "...";
        // templatedescription.after(`
        //     <div class="errmsg" style="color:red;"> Description is required! </div>
        // `);
        // errors++;

    }
    else{
        templatedescription = templatedescription.val();

    }

    if(errors < 1){
        var formdata = {
            preview :`${template}`,
            editable : `${editable}`,
            code : code ,
            config : config,
            templatename :templatename,
            templatedescription : templatedescription,
            _token : token

        }

        // console.log(formdata);


        $.ajax({
            type: 'POST',
            url: `${$baseurl}/template/update/${code}`,
            data : formdata,
            success : function(response){
                console.log(response);

                // response = JSON.parse(response);

                if(response.status == 200){
                    savedtag.show();
                    setTimeout(() => {
                        savedtag.hide();
                    }, 2000);
                }



            }
        });
    }





}



$(document).ready(function(){
    $('.addblankpage').click(function(){
        addblank();
    });
});


function addblank(){

    var templateholder = $('#templateholder');



    $.ajax({
        type: 'GET',
        url : `${$baseurl}/template/add/template`,
        cache: false,
        processData: false,
        success : function(data){
            // console.log(data);
            // return;
            template_config.templateid = data.templateid;
            // console.log(template_config);

            templateholder.html(data.template);

            $('.templateform').show();
            $('.addblankpage').hide();
            $('.addsection').show();


            // addtextblock();


        }
    });





}


// add section
$(document).ready(function(){
    $('.addsection').click(function(){
        addsection();
    });
});

function addsection(){

    var widgetholder = $('body').find('#template .widgetholder');



    $.ajax({
        type: 'GET',
        url : `${$baseurl}/template/add/section`,
        cache: false,
        processData: false,
        success : function(data){
            // console.log(data);
            // return;
            template_config.blocks.push({
                sectionid : data.sectionid,
                sectionname : '',
                blocks : Array()
            });
            // console.log("hit add section");

            widgetholder.append(data.section);
            $('body #templateholder ').find('#widgetholder .sectionblock').each(function(){
                $(this).hide();
            });

   
            $('body').find('#templateholder').find('#widgetholder').find(`.sectionblock[sectionid=${data.sectionid}]`).show();
            


            // $('body').find('#template .widgetholder').show();
            $('.addblankpage').hide();


            var sectionitem = `

                <div class="sectionitem" sectionid="${data.sectionid}">
                    <input type="text" placeholder="Section Name .." class="sectionname">
                    <div class="actions">
                        <i class="fa fa-chevron-up sortup"></i>
                        <i class="fa fa-chevron-down sortdown "></i>
                        <i class="fa fa-save save"></i>
                        <i class="fa fa-trash-alt remove  " ></i>
                    </div>

                </div>

            `;

            $('body').find('#sectionlist').append(sectionitem);


            addtextblock();


        }
    });





}


// add textblock




$(document).ready(function(){
    $('.addtextblock').click(function(){
        console.log("hit");
        addtextblock();
    });
});


function addtextblock(){

    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/textblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('textblock' , data.blockid , data.block);

                tinyinit();

            }
        });
    }

}



// add signature block



$(document).ready(function(){
    $('.addsignatureblock').click(function(){
        console.log("hit");
        addsignatureblock();
    });
});


function addsignatureblock(){

    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/signatureblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('signatureblock' , data.blockid , data.block);



                // var canvas = $(`.signature-block[block=${data.blockid}]`).find('.canvas');
                // var signaturePad = new SignaturePad($(canvas)[0]);



                // canvas.width = $(`.signature-block[block=${data.blockid}]`).width();
                // canvas.height = $(`.signature-block[block=${data.blockid}]`).height();


            }
        });
    }

}




// add imageblock




$(document).ready(function(){
    $('.addimageblock').click(function(){
        // console.log("hit");
        addimageblock();
    });
});


function addimageblock(){


    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/imageblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('imageblock' , data.blockid , data.block);


                // tinyinit();
            }
        });
    }

}






// add videoblock




$(document).ready(function(){
    $('.addvideoblock').click(function(){
        // console.log("hit");
        addvideoblock();
    });
});


function addvideoblock(){

    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/videoblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('videoblock' , data.blockid , data.block);

                // tinyinit();
            }
        });
    }

}







// add featureblock




$(document).ready(function(){
    $('.addfeatureblock').click(function(){
        // console.log("hit");
        addfeatureblock();
    });
});


function addfeatureblock(){

    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/featureblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('featureblock' , data.blockid , data.block);


                tinyinit();
            }
        });
    }

}










// add pricingblock




$(document).ready(function(){
    $('.addpricingblock').click(function(){
        // console.log("hit");
        addpricingblock();
    });
});


function addpricingblock(){

    if($("#template").length){

        $.ajax({
            type: 'GET',
            url : `${$baseurl}/template/add/block/pricingblock/${template_config.blocks.length}`,
            cache: false,
            processData: false,
            success : function(data){
                // console.log(data);

                setblock('pricingblock' , data.blockid , data.block);

                tinyinit();
            }
        });
    }

}



function setblock(blocktype , blockid , block){

    let newblock = '';

    var sectionid = $('body').find('#template').find('.widgetholder').find('.sectionblock:visible').attr('sectionid');

    var sectionindex = template_config.blocks.findIndex(section => section.sectionid === sectionid);

    console.log(sectionindex);
    newblock = JSON.parse(JSON.stringify(template_config.blocktemplates[blocktype]));

    var blocks = JSON.parse(JSON.stringify(template_config.blocks[sectionindex].blocks));



    newblock.id = blockid;
    newblock.order = blocks.length + 1;
    // newblock.order = blocks[sectionindex].blocks.length + 1;


    // console.log(blockid);
    // console.log(newblock);



    blocks.push(
        newblock
    );
    template_config.blocks[sectionindex].blocks = blocks;



    // template_config.blocks[blockid] = newblock;

    // var section = $('body').find('#template').find('.widgetholder').find('.sectionblock:visible');
    var section = $('body').find('#template').find('.widgetholder').find(`.sectionblock[sectionid=${sectionid}]`);



    section.append(block);

    savetemplate();




}
