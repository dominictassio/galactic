<?php

class __Mustache_5a92085596d2207f7308ad42c05f70b4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!doctype html>
';
        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <meta charset="utf-8">
';
        $buffer .= $indent . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <title>Galactic</title>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
';
        $buffer .= $indent . '    <!--[if lt IE 9]>
';
        $buffer .= $indent . '      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
';
        $buffer .= $indent . '      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
';
        $buffer .= $indent . '    <![endif]-->
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body style="padding-top:122px;">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <nav class="navbar navbar-default navbar-fixed-top">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="navbar-header">
';
        $buffer .= $indent . '                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
';
        $buffer .= $indent . '                    <span class="sr-only">Toggle navigation</span>
';
        $buffer .= $indent . '                    <span class="icon-bar"></span>
';
        $buffer .= $indent . '                    <span class="icon-bar"></span>
';
        $buffer .= $indent . '                    <span class="icon-bar"></span>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <a class="navbar-brand" href="#">Galactic</a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div id="navbar" class="collapse navbar-collapse">
';
        $buffer .= $indent . '                <ul class="nav navbar-nav">
';
        $buffer .= $indent . '                    <li class="active"><a href="#">Home</a></li>
';
        $buffer .= $indent . '                    <li><a href="#about">About</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div><!--/.nav-collapse -->
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="jumbotron">
';
        $buffer .= $indent . '            <h1>Galactic FTB Infinity Server</h1>
';
        $buffer .= $indent . '            <p>Who\'s on?</p>
';
        $buffer .= $indent . '            <div class="row">
';
        // 'players' section
        $value = $context->find('players');
        $buffer .= $this->sectionB5d9ca57a7977526c01088ffb662ae58($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
';
        $buffer .= $indent . '    <script src="assets/js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function sectionB5d9ca57a7977526c01088ffb662ae58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img class="img-rounded img-responsive" src="https://minotar.net/avatar/{{name}}" aslt="{{name}}">
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img class="img-rounded img-responsive" src="https://minotar.net/avatar/';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" aslt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
