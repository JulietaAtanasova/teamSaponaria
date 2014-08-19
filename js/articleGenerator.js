function modifyText($action) {
    var text = document.getElementById('article');
    var startPos = text.selectionStart;
    var endPos = text.selectionEnd;
    var tag;
    switch ($action) {
        case 'bold': tag = 'b'; break;
        case 'italic': tag = 'i'; break;
        case 'underline': tag = 'u'; break;
        default: return;
    }
    var value = text.value;
    text.value = value.slice(0, startPos) + "<" + tag + ">"  + value.slice(startPos, endPos)
    + "</" + tag + ">" + value.slice(endPos);
    text.selectionStart = endPos + (tag.length * 2) + 5;
}