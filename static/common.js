function check() {
    var keyword = $("#search").val();
    if (keyword === "" || !keyword) {
        return false
    }
}

function mdToHtml() {
    var content = $("#demo1").val();
    $("#demo1").empty().val(content);
    editormd.markdownToHTML("EditorMdview", {
        htmlDecode: "style,script,iframe",
        markdownSourceCode: false,
        emoji: false,
        taskList: true,
        tex: false,
        flowChart: false,
        sequenceDiagram: false,
    });
    $("#demo1").remove()
};