import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

let editors = document.querySelectorAll('.editor');

if (editors) {
    let nodes = Array.prototype.slice.call(editors,0);
    nodes.forEach(function(node){
        ClassicEditor.create(node);
   });
}
