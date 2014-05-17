<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimalistic avatars based on css">
    <meta name="keywords" content="">
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
                    <dt><code>.avatar-color-X</code></dt><dd>Web-safe color, from <code>0</code> to <code>215</code></dd>
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

        <div class="row">
            <div class="col-md-1">
                <i class="avatar avatar-color-0 avatar-letter-a avatar-sm"></i>
            </div>
            <div class="col-md-2">
                <i class="avatar avatar-color-0 avatar-letter-a"></i>
            </div>
            <div class="col-md-3">
                <i class="avatar avatar-color-0 avatar-letter-a avatar-md"></i>
            </div>
            <div class="col-md-4">
                <i class="avatar avatar-color-15 avatar-letter-d avatar-lg"></i>
            </div>
        </div>
    </div>
</main>

<footer class="footer">

</footer>


</body>
</html>
