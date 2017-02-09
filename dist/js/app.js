(function() {
  var ta = document.querySelector('.editor .workspace-pane-textarea');
  var myCodeMirror = CodeMirror.fromTextArea(ta, {
    mode: 'text/x-php',
    theme: 'dracula',
    lineNumbers: true,
  });
})();
