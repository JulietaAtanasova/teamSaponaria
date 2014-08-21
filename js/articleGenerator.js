//function modifyText($action) {
//    var text = document.getElementById('article');
//    var startPos = text.selectionStart;
//    var endPos = text.selectionEnd;
//    var tag;
//    switch ($action) {
//        case 'bold': tag = 'b'; break;
//        case 'italic': tag = 'i'; break;
//        case 'underline': tag = 'u'; break;
//        default: return;
//    }
//    var value = text.value;
//    text.value = value.slice(0, startPos) + "<" + tag + ">"  + value.slice(startPos, endPos)
//    + "</" + tag + ">" + value.slice(endPos);
//    text.selectionStart = endPos + (tag.length * 2) + 5;
//}

function modifyText(action) {
    switch (action) {
        case 'bold': document.execCommand("bold", false); break;
        case 'italic': document.execCommand("italic", false); break;
        case 'underline': document.execCommand("underline", false); break;
        case 'heading':
            var tag = document.getElementById('heading').value;
            if (tag == "") {
                document.execCommand('formatBlock', false, "div");
            } else {
                document.execCommand('formatBlock', false, tag);
            }
            break;
        case 'fontFamily':
            var family = document.getElementById('fontFamily').value;
            document.execCommand("fontName", false, family); break;
        case 'fontSize':
            var size = document.getElementById('fontSize').value;
            document.execCommand("fontSize", false, size); break;
        case 'link':
            var link = prompt('Enter a hyperlink:');
            document.execCommand('createLink', false, link); break;
        case 'unlink':
            document.execCommand("unlink", false, false); break;
        case 'image':
            var link = prompt('Enter the link for your image:');
            document.execCommand('InsertImage',false, link); break;
    }

}

function saveChanges() {
    document.getElementById('article').innerHTML = document.getElementById('textfield').innerHTML;
}