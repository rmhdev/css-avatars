<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimalistic avatars based on css">
    <meta name="keywords" content="css, avatar">
    <meta name="author" content="@rmhdev">

    <title>CSS avatars</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/docs.css" rel="stylesheet">
    <link href="../dist/css/avatars.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="page-header">
        <div class="container">
            <h1>CSS avatars</h1>
            <div class="pull-right"><a href="https://github.com/rmhdev/css-avatars" class="btn btn-success btn-lg">View code on GitHub</a></div>
            <p class="lead">Minimalistic avatars based on CSS</p>
        </div>
    </div>
</header>

<main class="main">
    <div class="container">

        <h2>How to use</h2>
        <div class="row">
            <div class="col-md-6">
                <pre class="how-to-use"><code class="html"><?php
                    echo htmlentities('<i class="avatar avatar-color-12 avatar-letter-r"></i>');
                ?></code></pre>
            </div>
            <div class="col-md-6">
                <dl class="dl-horizontal">
                    <dt><code>.avatar</code></dt><dd>Base class</dd>
                    <dt><code>.avatar-color-X</code></dt><dd>color number, from <code>0</code> to <code>215</code></dd>
                    <dt><code>.avatar-letter-Y</code></dt><dd>Letter, from <code>a</code> to <code>z</code></dd>
                    <dt><code>.avatar-Z</code></dt><dd>(optional) size: <code>sm</code>, <code>md</code>, <code>lg</code></dd>
                </dl>
            </div>
        </div>

        <h2>Colors & letters</h2>
        <div class="doc-avatars">
            <ul class="doc-avatars-list">
                <?php for ($i = 0; $i < 216; $i += 1) : $letter = chr(($i % 26) + 97); ?>
                    <li>
                        <span class="avatar avatar-color-<?php echo $i; ?> avatar-letter-<?php echo $letter; ?>"></span>
                        <span class="doc-avatar-class">avatar avatar-color-<?php echo $i; ?> avatar-letter-<?php echo $letter; ?></span>
                    </li>
                <?php endfor; ?>

            </ul>
        </div>

        <h3>Sizes</h3>

        <div class="row text-center">
            <div class="col-md-3">
                <div>Small (<code>avatar-sm</code>):</div>
                <i class="avatar avatar-color-0 avatar-letter-a avatar-sm"></i>
            </div>
            <div class="col-md-3">
                <div>Default:</div>
                <i class="avatar avatar-color-0 avatar-letter-a"></i>
            </div>
            <div class="col-md-3">
                <div>Medium (<code>avatar-md</code>):</div>
                <i class="avatar avatar-color-0 avatar-letter-a avatar-md"></i>
            </div>
            <div class="col-md-3">
                <div>Large (<code>avatar-lg</code>):</div>
                <i class="avatar avatar-color-0 avatar-letter-a avatar-lg"></i>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <ul class="footer-links">
        <li>Created by Rober Martín</li>
        <li>Code on <a href="https://github.com/rmhdev/css-avatars">GitHub</a></li>
        <li>Code licensed under <a href="https://github.com/rmhdev/css-avatars/blob/master/LICENSE">MIT</a>,
            documentation under <a href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0.</a></li>
    </ul>
</footer>

</body>
</html>
