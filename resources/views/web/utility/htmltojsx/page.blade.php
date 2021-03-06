
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>HTML to JSX</title>
  <meta name="viewport" content="width=device-width" />
  <meta property="og:title" content="HTML to JSX" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://facebook.github.io/react/img/logo_og.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/3.21.0/codemirror.min.css" />
  <link rel="stylesheet" href="{{ asset('assets/utility/htmltojsx/react.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/utility/htmltojsx/syntax.css') }}" />
</head>
<body>
  <div class="jsxCompiler">
    <h1>HTML to JSX</h1>
    <div id="jsxCompiler">Loading...</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.1/react.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.1/react-dom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/3.21.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/javascript/javascript.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/create-react-class@15.6.0/create-react-class.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prop-types/15.6.0/prop-types.min.js"></script>
    <script src="{{ asset('assets/utility/htmltojsx/live_editor.js') }}"></script>
    <script src="{{ asset('assets/utility/htmltojsx/htmltojsx.min.js') }}"></script>
    <script src="{{ asset('assets/utility/htmltojsx/htmltojsx-component.js') }}"></script>
  </div>
</body>
</html>
