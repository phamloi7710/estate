$(document).ready(function(){
    $('.selectImage').filemanager('image');
    var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
        window.SetUrl = cb;
    };
    $(".deleteImage").click(function(){
        $(".imagePreview").attr('src','');
        $(".imagePreview").attr('src','../assets/uploads/images/no-avatar.png');
        $("#image").val('');
    });
});
function alertMsg(theURL,msg)
{
    if (confirm(msg))
    {
        window.location.href=theURL;
    }
    else
    {
        return false;
    }
}
