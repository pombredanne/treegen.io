<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Treegen.io</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
    <script type="text/javascript" src="/dist/js/codemirror.js"></script>
    <script type="text/javascript" src="/dist/js/modes.js"></script>
    <link rel="stylesheet" href="/dist/css/styles.css">
    <link rel="stylesheet" href="/dist/css/dracula.css">
  </head>
  <body>
    <div class="app">
      <header class="header">
        <h3 class="logo"><a href="/">treegen.io</a></h3>
        <nav class="nav">
          <div class="nav-item">A project by <a href="http://twitter.com/bowersbros" target="_blank" rel="noopener">Alex Bowers</a></div>
          <div class="nav-item"><a href="https://github.com/treegen-io/treegen.io" target="_blank" rel="noopener">Source Code</a></div>
        </nav>
      </header>
      <div class="workspace">
        <div class="workspace-pane editor">
          <div class="pane-header"><h4>Editor</h4></div>
          <textarea class="workspace-pane-textarea"></textarea>
        </div>
        <div class="workspace-pane output">
          <div class="pane-header"><h4>Output</h4></div>
          <textarea class="workspace-pane-textarea" readonly></textarea>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/dist/js/app.js"></script>

  </body>
</html>
