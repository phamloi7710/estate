var row = 0;
function addImage(){
    html = '<tr id="rowImage'+row+'">';
    html += '<td><input type="text" name="txtImageTitle[]" class="form-control" placeholder="Tiêu Đề Hình Ảnh"></td>';
    html += '<td><div class="row"><div class="col-md-10"><input id="image'+row+'" type="text" name="image[]" class="form-control" placeholder="Đường Dẫn Hình Ảnh"></div><div class="col-md-2"><a data-input="image'+row+'" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage'+row+'">Chọn Ảnh</a></div></td>';
    html += '<td class="center">';
    html += '<a href="javascript:void(0)" onclick="$(\'#rowImage'+row+'\').remove();" title="Xóa" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>';
    html += '</td></tr>';
    $('#contentAttribute').append(html);
    $('.selectImage'+row+'').filemanager('image');
        var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
        window.SetUrl = cb;
    };
    row++;
}
function addImageIndex(){
    html = '<tr id="rowImageIndex'+row+'">';
    html += '<td><input type="text" name="txtImageTitleIndex[]" class="form-control" placeholder="Tiêu Đề Hình Ảnh"></td>';
    html += '<td><div class="row"><div class="col-md-10"><input id="image'+row+'" type="text" name="imageIndex[]" class="form-control" placeholder="Đường Dẫn Hình Ảnh"></div><div class="col-md-2"><a data-input="image'+row+'" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage'+row+'">Chọn Ảnh</a></div></td>';
    html += '<td class="center">';
    html += '<a href="javascript:void(0)" onclick="$(\'#rowImageIndex'+row+'\').remove();" title="Xóa" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>';
    html += '</td></tr>';
    $('#contentHinhAnhIndex').append(html);
    $('.selectImage'+row+'').filemanager('image');
        var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
        window.SetUrl = cb;
    };
    row++;
}
function addVideo(){
    html = '<tr id="rowVideo'+row+'">';
    html += '<td><input type="text" name="txtUrlVideo[]" class="form-control" placeholder="Đường Dẫn Video Youtube"></td>';
    html += '<td class="center">';
    html += '<a href="javascript:void(0)" onclick="$(\'#rowVideo'+row+'\').remove();" title="Xóa" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>';
    html += '</td></tr>';
    $('#contentVideo').append(html);
    row++;
}