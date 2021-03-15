// const { cond } = require("lodash");

console.log('Template Build Initialized !');


const tinyinit  = function(){
    var emailHeaderConfig = {
        selector: '.tinymce-heading',
        menubar: false,
        inline: true,

        plugins: [
            'lists',
            // 'powerpaste',
            // 'autolink'
        ],
        toolbar: 'undo redo | bold italic underline',
        valid_elements: 'strong,em,span[style],a[href]',
        valid_styles: {
            '*': 'font-size,font-family,color,text-decoration,text-align'
        },
        // powerpaste_word_import: 'clean',
        // powerpaste_html_import: 'clean',
        };

        var emailBodyConfig = {
        selector: '.tinymce-body',
        menubar: false,
        inline: true,
        // plugins: [
        //     'link',
        //     'lists',
        //     'powerpaste',
        //     'autolink',
        //     'tinymcespellchecker'
        // ],
        toolbar: [
            'undo redo | bold italic underline | fontselect fontsizeselect',
            'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
        ],
        valid_elements: 'p[style],strong,em,span[style],a[href],ul,ol,li',
        valid_styles: {
            '*': 'font-size,font-family,color,text-decoration,text-align'
        },
        // powerpaste_word_import: 'clean',
        // powerpaste_html_import: 'clean',
        };

        tinymce.init(emailHeaderConfig);
        tinymce.init(emailBodyConfig);
}

tinyinit();


// Global change detect to save
setTimeout(() => {
    $(document).ready(function(){
        $('body').on('focusout', '.tinymce-heading', function(){
            savetemplate();
        });


        $('body').on('focusout', '.tinymce-body', function(){
            savetemplate();
        });

    });
},4000 );


// section update


$(document).ready(function () {
    $('body').on('change' , '.sectionname', function () {
        sectionupdate($(this).parent(), 'nameupdate');


    });


    $('body').on('click' , '.sectionitem', function () {
        sectionupdate($(this), 'togglesection');


    });

    $('body').on('click' , '.sectionitem .remove', function () {
        sectionupdate($(this).parent().parent(), 'remove');


    });

    $('body').on('click' , '.sectionitem .sortup', function () {
        sectionupdate($(this).parent().parent(), 'sortup');


    });

    $('body').on('click' , '.sectionitem .sortdown', function () {
        sectionupdate($(this).parent().parent(), 'sortdown');


    });




});


const sectionupdate = function (block , func){
    var blockparent = block;


    const nameupdate = function(){
        // console.log(blockparent);
        var name = blockparent.find('.sectionname').val();
        var code = blockparent.attr('sectionid');

        var section = $('body').find(`.sectionblock[sectionid=${code}]`);

        section.attr('name' , name);

        savetemplate();



    }

    const togglesection = function (){
        var code = blockparent.attr('sectionid');

        var section = $('body').find(`.sectionblock[sectionid=${code}]`);

        $('body').find('.sectionblock').hide();
        section.show();


    }

    const sortup = function(){
        var sectionid = blockparent.attr('sectionid');
        var block = blockparent;



        console.log(block.prev().attr('sectionid'));

            // change dom order

            if(typeof block.prev().attr('sectionid') != 'undefined'){
                var replacement = block.get(0).outerHTML;

                block.prev().before(replacement);

                block.remove();



                var section = $('body').find(`.sectionblock[sectionid=${sectionid}]`);
                var name = $('body').find(`.sectionblock[sectionid=${sectionid}]`).attr('name');

                $('body').find(`.sectionitem[sectionid=${sectionid}]`).find('.sectionname').val(name);


                var sectionreplacement = section.get(0).outerHTML;

                section.prev().before(sectionreplacement);

                section.remove();


                savetemplate();




            }


    }

    const sortdown = function(){
        var sectionid = blockparent.attr('sectionid');
        var block = blockparent;



        // console.log(block.prev());

            // change dom order

        if(typeof block.next().attr('sectionid') != 'undefined'){
            var replacement = block.get(0).outerHTML;

            block.next().after(replacement);

            block.remove();



            var section = $('body').find(`.sectionblock[sectionid=${sectionid}]`);
            var name = $('body').find(`.sectionblock[sectionid=${sectionid}]`).attr('name');

            $('body').find(`.sectionitem[sectionid=${sectionid}]`).find('.sectionname').val(name);


            var sectionreplacement = section.get(0).outerHTML;

            section.next().after(sectionreplacement);

            section.remove();


            savetemplate();




        }

    }

    const remove = function (){
        var sectionid = blockparent.attr('sectionid');
        var block = blockparent;



        // console.log(block.prev());

            // change dom order

        if(typeof block.attr('sectionid') != 'undefined'){


            block.remove();


            var section = $('body').find(`.sectionblock[sectionid=${sectionid}]`);


            section.remove();


            var sectionindex = template_config.blocks.findIndex(section => section.sectionid === sectionid);

            // var blockindex = template_config.blocks[sectionindex].blocks.findIndex(block => block.id === blockid);

            template_config.blocks.splice(sectionindex, 1);




            savetemplate();




        }

    }



    eval(func)();



}



//  text-block


$(document).ready(function () {
    $('body').on('click' , '.text-block .sortup', function () {
        textblock($(this).parent().parent().parent(), 'sortup');
    });

    $('body').on('click' , '.text-block .sortdown', function () {
        textblock($(this).parent().parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.text-block .remove', function () {
        textblock($(this).parent().parent().parent(), 'remove');
    });


});


const textblock = function (block , func){
    var blockparent = block;

    const sortup = function(){
        globalsortup($(blockparent));

        // console.log(blockconfig);


    }

    const sortdown = function(){


        // console.log(blockconfig);

        globalsortdown($(blockparent));


    }

    const remove = function (){
        globalremove($(blockparent));
    }




    eval(func)();


}



//  signature-block


$(document).ready(function () {
    $('body').on('click' , '.signature-block .sortup', function () {
        signatureblock($(this).parent().parent(), 'sortup');
    });

    $('body').on('click' , '.signature-block .sortdown', function () {
        signatureblock($(this).parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.signature-block .remove', function () {
        signatureblock($(this).parent().parent(), 'remove');
    });

    $('body').on('click' , '.signature-block .clearcanvas', function () {
        signatureblock($(this).parent().parent(), 'clearcanvas');
    });

    $('body').on('click' , '.signature-block .name-tab', function () {
        signatureblock($(this).parent().parent().parent(), 'nametab');
    });

    $('body').on('click' , '.signature-block .sign-tab', function () {
        signatureblock($(this).parent().parent().parent(), 'signtab');
    });


});


const signatureblock = function (block , func){
    var blockparent = block;

    const setsignature = function (){

        // $('#clearcanvas').on('click', function(){
        //     signaturePad.clear();
        // });
    }

    const clearcanvas = function (){

        var canvas = blockparent.find('.canvas');

        var signaturePad = new SignaturePad($(canvas)[0]);
        // ctx.save();

        // Use the identity matrix while clearing the canvas
        // ctx.setTransform(1, 0, 0, 1, 0, 0);
        // ctx.clearRect(0, 0, canvas.width, canvas.height);

        // // Restore the transform
        // ctx.restore();


        // ctx.clear(true);
        // signaturePad.clear();

        // console.log(ctx);

    }

    const nametab = function(){
        blockparent.find('.name').show();
        blockparent.find('.name-tab').addClass('active');

        blockparent.find('.sign').hide();
        blockparent.find('.sign-tab').removeClass('active');



    }

    const signtab = function(){
        blockparent.find('.sign').show();
        blockparent.find('.sign-tab').addClass('active');

        blockparent.find('.name').hide();
        blockparent.find('.name-tab').removeClass('active');


    }

    const sortup = function(){
        globalsortup($(blockparent));

        // console.log(blockconfig);


    }

    const sortdown = function(){


        // console.log(blockconfig);

        globalsortdown($(blockparent));


    }

    const remove = function (){
        globalremove($(blockparent));
    }




    eval(func)();


}








//  feature-block


$(document).ready(function () {
    $('body').on('click' , '.feature-block .sortup', function () {
        featureblock($(this).parent().parent(), 'sortup');
    });

    $('body').on('click' , '.feature-block .sortdown', function () {
        featureblock($(this).parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.feature-block .remove', function () {
        featureblock($(this).parent().parent(), 'remove');
    });


    $('body').on('input' , '.feature-block .color', function () {
        featureblock($(this).parent().parent().parent(), 'changecolor');
    });

    $('body').on('change' , '.feature-block .color', function () {
        featureblock($(this).parent().parent().parent(), 'digest');
    });

    $('body').on('click' , '.feature-block .imagehitter', function () {
        featureblock($(this).parent().parent().parent(), 'imagehitter');
        // console.log('hit');
    });


    $('body').on('change' , '.feature-block .bgimageinput', function () {
        featureblock($(this).parent().parent().parent(), 'setbg');
        // console.log('hit');
    });


});


const featureblock = function (block , func){
    var blockparent = block;


    const changecolor = function(){
        // console.log(blockparent.find('.color').val());
        var color = blockparent.find('.color').val();

        blockparent.find('.filter').css('background-color', `${color}`);
        blockparent.attr('bg' , color);



    }

    const imagehitter = function(){
        blockparent.find('.bgimageinput').trigger('click');

    }

    const setbg = function(){
        var fileinput = blockparent.find('.bgimageinput');
        var file = $(fileinput)[0].files[0];
        var reader = new FileReader();


        reader.readAsDataURL(file);

        reader.onload = function (e) {

            blockparent.find('.cover').css("background" , `url(${e.target.result}) no-repeat`);
            blockparent.find('.cover').css({
                "background-origin": "border-box",

                "background-clip": "border-box",
                "background-position": "center",
                "background-size": "cover",
            });




            blockparent.attr('image' , 'active') ;
            blockparent.attr('filter' , 'deactive') ;

            blockparent.find('.filter').css({"opacity" : "0.4" , "background-color" : ``});



            console.log('hit on set');
            // $(block).find('.activesource').attr('src', e.target.result);
            // $(block).attr('state', 'active');
        }
    }

    const digest =function(){
        savetemplate();

    }

    const sortup = function(){
        globalsortup($(blockparent));

        // console.log(blockconfig);


    }

    const sortdown = function(){


        // console.log(blockconfig);

        globalsortdown($(blockparent));


    }

    const remove = function (){
        globalremove($(blockparent));
    }





    eval(func)();


}






// image-block

$(document).ready(function () {
    $('body').on('change' , '.image-block .chooseimage', function () {
        imageblock($(this).parent().parent().parent(), 'setimage');
    });

    $('body').on('click','.image-block .setting',function () {
        imageblock($(this).parent().parent(), 'setting');
    });

    $('body').on('click','.image-block .chooselabel',function () {
        imageblock($(this).parent().parent().parent(), 'trigerinput');
    });

    $('body').on('click' , '.image-block .sortup', function () {
        imageblock($(this).parent().parent(), 'sortup');
    });

    $('body').on('click' , '.image-block .sortdown', function () {
        imageblock($(this).parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.image-block .remove', function () {
        imageblock($(this).parent().parent(), 'remove');
    });

});


const imageblock = function (block, func) {
    var blockstate = block.attr('state');
    var blockparent = block;
    var active = blockparent.find('.active');
    var choose = blockparent.find('.choose');


        const trigerinput = function (){
            blockparent.find('.chooseimage').trigger('click');
        }

        const setimage = function () {


            var activesource = blockparent.find('.active .activesource');
            var fileinput = block.find('.custom-file');


            // var imagefakepath  = $(block).val();
            // console.log();
            // return;
            var file = $(fileinput)[0].files[0];
            var reader = new FileReader();


            reader.readAsDataURL(file);

            reader.onload = function (e) {

                $(block).find('.activesource').attr('src', e.target.result);
                $(block).attr('state', 'active');
            }


            // console.log(block.html());
            // console.log(block.find('.activesource').html());
            // console.log(block.find('.activesource').attr('src'));


            active.show();
            choose.hide();
            savetemplate();
        }

        const setting= function () {
            console.log(blockstate);
            if (blockstate == 'active') {
                active.hide();
                choose.show();
                blockparent.attr('state', 'choose');
                return;

            } else {
                if (blockstate == 'choose') {
                    active.show();
                    choose.hide();
                    blockparent.attr('state', 'active');
                    return;
                }
            }


        }

        const sortup = function(){
            globalsortup(blockparent);

        }

        const sortdown = function(){

            globalsortdown(blockparent);


        }

        const remove = function (){
            globalremove($(blockparent));
        }



    eval(func)();

    // imageblock[func]();
    // var imageblock = new imageblock();
    // this.setting();
    // imageblock[func]();
    // imageblock().setimage();
    // (imageblock).eval(func)();
    // window['imageblock'][func]();
    // window[this][func]();






    // console.log(imagefile);
}





// video-block



$(document).ready(function () {
    $('body').on('change' , '.video-block .choosevideo',function () {
        videoblock($(this).parent().parent().parent(), 'setvideo');
    });

    $('body').on( 'click','.video-block .setting' , function () {
        videoblock($(this).parent().parent(), 'setting');
    });

    $('body').on( 'click','.video-block .iframe-selection' , function () {
        videoblock('', 'iframeselection' , $(this));
    });


    $('body').on( 'click' , '.video-block .loadvideo', function () {
        videoblock($(this).parent().parent().parent(), 'loadvideo' , $(this));
    });

    $('body').on('click' , '.video-block .sortup', function () {
        videoblock($(this).parent().parent(), 'sortup');
    });

    $('body').on('click' , '.video-block .sortdown', function () {
        videoblock($(this).parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.video-block .remove', function () {
        videoblock($(this).parent().parent(), 'remove');
    });



});

function videoblock(block, func , el = null) {
    if(block.length  > 0){
        var blockstate = block.attr('state');
        var blockparent = block;
        var active = blockparent.find('[section=active]');
        var choose = blockparent.find('.choose');
    }




    const setvideo = function () {
        var activesource = blockparent.find('.active .activesource');
        var fileinput = blockparent.find('.custom-file');


        var imagefakepath = $(block).val();
        // console.log();
        // return;
        var file = $(fileinput)[0].files[0];
        var reader = new FileReader();


        reader.readAsDataURL(file);

        reader.onload = function (e) {

            activesource.attr('src', e.target.result);
            blockparent.attr('state', 'active');
        }


        active.show();
        choose.hide();
        savetemplate();
    }

    const setting = function () {
        console.log(blockstate);
        if (blockstate == 'active') {
            active.hide();
            choose.show();
            blockparent.attr('state', 'choose');
            return;

        } else {
            if (blockstate == 'choose') {
                active.show();
                choose.hide();
                blockparent.attr('state', 'active');
                return;
            }
        }


    }

    const iframeselection = function(){
        var selectedtype = el.attr('type' );

        el.parent().find('.iframe-selection').each(function(){
            // console.log(this);
            $(this).removeClass('active');
        });
        el.addClass('active');


        el.parent().find('[name=iframetype]').val(selectedtype);





        // console.log();
    }


    const loadvideo = function (){
        var iframeinput = blockparent.find('.iframeinput').val();
        var iframetype = blockparent.find('.iframetype').val();





        if(iframetype == 'youtube'){
            var videolink = parseurl(iframeinput.split('?')[1]);
            var iframe = `

                <iframe  height="450"
                    src="https://www.youtube.com/embed/${videolink.v}"
                    frameborder="0" allow="accelerometer; autoplay;
                    clipboard-write; encrypted-media;
                    gyroscope; picture-in-picture" allowfullscreen>
                </iframe>

            `;
            // console.log(videolink);

            blockparent.attr('state', 'active');

            active.html(iframe);

            active.show();
            choose.hide();

        }
        if(iframetype == 'vimeo'){
            var videolink = iframeinput.split('.com/')[1];
            var iframe = `

                <iframe
                    src="https://player.vimeo.com/video/${videolink}"
                     height="450"
                    frameborder="0" title="{video_title}"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </iframe>

            `;
            // console.log(videolink);

            blockparent.attr('state', 'active');

            active.html(iframe);

            active.show();
            choose.hide();
        }
        savetemplate();
        console.log(iframeinput);
    }

    const sortup = function(){
        globalsortup(blockparent);

    }

    const sortdown = function(){

        globalsortdown(blockparent);


    }

    const remove = function (){
        globalremove($(blockparent));
    }







    // videoblock[func]();


    eval(func)();






    // console.log(imagefile);
}


// priceblock

$(document).ready(function (){
    $('body').on( 'click' , '.pricing-block .rowinsert' ,function () {
        priceblock($(this).parent().parent().parent().parent(), 'rowinsert' , $(this).parent().parent());
    });




    $('body').on( 'click', '.pricing-block .btntitle',function () {
        priceblock($(this).parent().parent().parent().parent(), 'addtitle');
    });

    $('body').on( 'click','.pricing-block .btntable' ,  function () {
        priceblock($(this).parent().parent().parent().parent(), 'addtable');
    });


    $('body').on('click' , '.pricing-block .sortup', function () {
        priceblock($(this).parent().parent().parent(), 'sortup');
    });

    $('body').on('click' , '.pricing-block .sortdown', function () {
        priceblock($(this).parent().parent().parent(), 'sortdown');
    });

    $('body').on('click' , '.pricing-block .remove', function () {
        priceblock($(this).parent().parent().parent(), 'remove');
    });



});


const priceblock = function (block , func , el = null){

    if(block.length  > 0){
        var blockstate = block.attr('state');
        var blockparent = block;
        var active = blockparent.find('[section=active]');
        var choose = blockparent.find('.choose');
        var renderbox = blockparent.find('.renderbox');
        if(el != null){
            console.log(el.html());
            // return;
            var tabledata = el.find('.tabledata').val();

            // console.log(tabledata);
            if(tabledata.length < 1){
                tabledata = [];
            }
            else{
                tabledata = JSON.parse(el.find('.tabledata').val());
                // console.log(tabledata);

            }
        }

    }


    const settable = function (el , data){
        el.html('');



        var total = 0;

        data.forEach(function(row){
            total = parseInt(row.price) + total;
            el.append(`
                <tr>
                    <td >${row.title}</td>
                    <td >${row.price}</td>

                </tr>
            `);

        });
        el.append(`
                <tr>
                    <th style="font-size: 22px; text-align:center;">Total</th>
                    <th style="font-size: 22px; text-align:center;">${total}</th>

                </tr>
        `);
    }

    const addtable = function () {
        var tabletemplate = `

            <div class="sectiontable" >
                <input type="text" value=""  class="tabledata " style="display:none;">

                <div class="tableholder">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody class="tablebody">

                        </tbody>
                    </table>

                </div>
                <hr>
                <div class="editor">
                    <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" value="0" min="0" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="btn btn-primary rowinsert">Add</div>
                </div>
            </div>


        `;
        renderbox.append(tabletemplate);

    }

    const addtitle = function(){
        var titletemplate = `

            <div class="sectiontitle">
                <div class="sidetool editor" >
                    <div class="settingbtn">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="tooltip-box">
                        <div class="tool">
                            <i class="fa fa-trash-alt" ></i>
                        </div>
                        <div class="tool setting ">
                            <i class="fa fa-cog"></i>
                        </div>

                        <div class="tool">
                            <i class="fa fa-chevron-up"></i>
                        </div>

                        <div class="tool">
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>

                </div>
                <div class="title tinymce-heading">
                    Click here to rename this section title
                </div>
            </div>

        `;

        renderbox.append(titletemplate);

        tinyinit();
        savetemplate();


    }

    const rowinsert = function (section) {

        // console.log(blockparent.html());
        var section = el;
        var title = section.find('[name=title]');
        var price = section.find('[name=price]');
        // var total = section.find('.total');
        var table = section.find('.tablebody');




        if(title.val().length < 1){
            title.after(`
                <div class="errmsg" style="color:red;"> Title is required! </div>
            `);
        }
        else{


            tabledata.push({
                title : title.val(),
                price : price.val()
            });
            // console.log(tabledata);

            section.find('.tabledata').val(JSON.stringify(tabledata));

            // return;
            settable(table , tabledata);
        }

        savetemplate();





    }


    const sortup = function(){
        globalsortup(blockparent);

    }

    const sortdown = function(){

        globalsortdown(blockparent);


    }

    const remove = function (){
        globalremove($(blockparent));
    }




    eval(func)();
}





function parseurl(url) {
    var hash;
    var myJson = {};
    var hashes = url.slice(url.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        myJson[hash[0]] = hash[1];
        // If you want to get in native datatypes
        // myJson[hash[0]] = JSON.parse(hash[1]);
    }
    return myJson;
}



function sortblock(arr, old_index, new_index) {
    while (old_index < 0) {
        old_index += arr.length;
    }
    while (new_index < 0) {
        new_index += arr.length;
    }
    if (new_index >= arr.length) {
        var k = new_index - arr.length + 1;
        while (k--) {
            arr.push(undefined);
        }
    }
    arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
    return arr;
};



function globalsortdown(blockparent){
    var blockid = blockparent.attr('block');
    var block = blockparent;
        // console.log(blockparent.attr('block'));
        // var index_of_apple = list.indexOf("apple")
        console.log(blockparent.attr('order') +" < ="+ template_config.blocks.length);
        var sectionid = $('body').find('#template').find('.widgetholder').find('.sectionblock:visible').attr('sectionid');

        var sectionindex = template_config.blocks.findIndex(section => section.sectionid === sectionid);

        if(blockparent.attr('order') < template_config.blocks[sectionindex].blocks.length){
            var blockindex = template_config.blocks[sectionindex].blocks.findIndex(block => block.id === blockid);
            // console.log(blockindex);
            var current_block = template_config.blocks[sectionindex].blocks[blockindex];

            var next_block =  template_config.blocks[sectionindex].blocks[blockindex+1];
            // $('body').find('[block]')

            current_block.order = current_block.order +1;
            next_block.order = next_block.order -1 ;


            // change dom order
            block.attr('order' , current_block.order);
            block.next().attr('order' , next_block.order);


            var replacement = block.get(0).outerHTML;

            block.next().after(replacement);

            block.remove();


            sortblock(template_config.blocks[sectionindex].blocks , blockindex , blockindex + 1);

            savetemplate();

        }
}


function globalsortup(blockparent){
    var blockid = blockparent.attr('block');
    var block = blockparent;
        // console.log(blockparent.attr('block'));
        // var index_of_apple = list.indexOf("apple")

        var sectionid = $('body').find('#template').find('.widgetholder').find('.sectionblock:visible').attr('sectionid');

        var sectionindex = template_config.blocks.findIndex(section => section.sectionid === sectionid);

        if(blockparent.attr('order')> 1){
            var blockindex = template_config.blocks[sectionindex].blocks.findIndex(block => block.id === blockid);
            // console.log(blockindex);
            var current_block = template_config.blocks[sectionindex].blocks[blockindex];

            var pre_block =  template_config.blocks[sectionindex].blocks[blockindex-1];
            // $('body').find('[block]')

            current_block.order = current_block.order -1;
            pre_block.order = pre_block.order +1 ;


            // change dom order
            block.attr('order' , current_block.order);
            block.prev().attr('order' , pre_block.order);


            var replacement = block.get(0).outerHTML;

            block.prev().before(replacement);

            block.remove();


            sortblock(template_config.blocks[sectionindex].blocks , blockindex , blockindex - 1);
            savetemplate();

        }


}


function globalremove(blockparent){
    var blockid = blockparent.attr('block');
    var block = blockparent;

    var sectionid = $('body').find('#template').find('.widgetholder').find('.sectionblock:visible').attr('sectionid');
    var sectionindex = template_config.blocks.findIndex(section => section.sectionid === sectionid);

    var blockindex = template_config.blocks[sectionindex].blocks.findIndex(block => block.id === blockid);

    template_config.blocks[sectionindex].blocks.splice(blockindex, 1);

    block.remove();
    // console.log(blockparent.html());

    // correctorder();

    savetemplate();

}


function correctorder(){
    var order = 0;

    template_config.blocks.forEach(section => {
        // block.order = order ;
        section.forEach(block => {
            order =order+1;
            block.order = order ;

        });
        order =0;

    });



    order = 0;
    $('body .sectionblock').each(function(){

        // $(this).attr('order', order );
        $(this).find('.templateblock').each(function(){
            order =order+1;
            $(this).attr('order', order );
        });
        order =0;
   });

}





////////////////////////////////////





// function imageblock(block , func){
//     var blockstate = block.attr('state');
//     var blockparent = block;
//     var active = blockparent.find('.active');
//     var choose = blockparent.find('.choose');


//     var imageblock = {
//         type:'image-block',
//         order: 0,
//         name: '',
//         src : '',
//         starter : ``,

//         blockparent : blockparent,
//         blockstate : block.attr('state'),
//         active : blockparent.find('.active'),
//         choose : blockparent.find('.choose'),
//         setimage: function(){
//             console.log('hit ');
//             var activesource = blockparent.find('.active .activesource');
//             var fileinput = blockparent.find('.custom-file');


//             // var imagefakepath  = $(block).val();
//             // console.log();
//             // return;
//             var file = $(fileinput)[0].files[0];
//             var reader = new FileReader();


//             reader.readAsDataURL(file);

//             reader.onload= function (e){

//                 activesource.attr('src', e.target.result);
//                 blockparent.attr('state' , 'active');
//             }


//             active.show();
//             choose.hide();
//         },
//         setting = function(){
//             console.log(blockstate);
//             if(blockstate == 'active'){
//                 active.hide();
//                 choose.show();
//                 blockparent.attr('state' , 'choose');
//                 return;

//             }
//             if(blockstate == 'choose'){
//                 active.show();
//                 choose.hide();
//                 blockparent.attr('state' , 'active');
//                 return;
//             }

//         }

//     }

//     // eval(func)();
//     imageblock[func]();
//     // return;
//     // (imageblock).eval(func)();





//     function setimage(){
//         var activesource = blockparent.find('.active .activesource');
//         var fileinput = blockparent.find('.custom-file');


//         var imagefakepath  = $(block).val();
//         // console.log();
//         // return;
//         var file = $(fileinput)[0].files[0];
//         var reader = new FileReader();


//         reader.readAsDataURL(file);

//         reader.onload= function (e){

//             activesource.attr('src', e.target.result);
//             blockparent.attr('state' , 'active');
//         }


//         active.show();
//         choose.hide();
//     }

//     function setting(){
//         console.log(blockstate);
//         if(blockstate == 'active'){
//             active.hide();
//             choose.show();
//             blockparent.attr('state' , 'choose');
//             return;

//         }
//         if(blockstate == 'choose'){
//             active.show();
//             choose.hide();
//             blockparent.attr('state' , 'active');
//             return;
//         }

//     }





//     // console.log(imagefile);
// }
