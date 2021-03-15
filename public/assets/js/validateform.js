
function validateform(formid){
    $('.errlabel').remove();
    res = {
        errors : 0,
        data:{},
        alldata: {}
    }
    $(`${formid} .inp`).each(function(){
        // console.log(this);

        var elname = $(this).attr('name');
        var elval = $(this).val();
        var errname = $(this).attr('errname');

        if(typeof errname == 'undefined'){
            errname = elname;
        }

        var isrequired = $(this).attr('required');

        if(isrequired){
            if(elval.length < 1){
                // $(this).addClass('emptyinput');
                $(this).after(`<div class="errlabel" style="color:red; font-size:11px;"  > ${capitalize(errname)} is required ! </div>`);
                res.errors = res.errors + 1;
            }
            else{

            }
        }

        res.data[elname] = elval;


    });

    $(`${formid} input`).each(function(){
        var name  = $(this).prop('name');
        var value = $(this).val();
        res.alldata[name] = value;
        // data.push([]);

    });
    $(`${formid} select`).each(function(){
        var name  = $(this).prop('name');
        var value = $(this).val();
        res.alldata[name] = value;
        // data.push([]);

    });

    return res;
}



function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1)
}
