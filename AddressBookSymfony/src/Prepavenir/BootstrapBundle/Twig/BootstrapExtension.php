<?php

namespace Prepavenir\BootstrapBundle\Twig;


class BootstrapExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
             new \Twig_SimpleFunction('bootstrap_alert', [$this, 'alert'], ['is_safe' => ['html']])
        ];
    }

    public function alert($msg, $type = 'success') {
        return <<<DEL
<div class="alert alert-$type alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    $msg
</div>
DEL;

    }
}